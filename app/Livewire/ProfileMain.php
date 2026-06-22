<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserProfile;
use Livewire\Attributes\Validate;
use Flux\Flux;

class ProfileMain extends Component
{
    public User $user;
    public UserProfile $userprofile;
    public $password;

    #[Validate('required|string|max:255')]
    public $name;

    #[Validate('required|email', as: 'Email Address')]
    public $email;

    #[Validate('nullable|string|max:255')]
    public $tagline;

    #[Validate('nullable|string|max:2000')]
    public $bio;

    public function mount()
    {
        $this->user = Auth::user();

        $this->userprofile = $this->user->profile()->firstOrCreate();

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->tagline = $this->userprofile->tagline;
        $this->bio = $this->userprofile->bio;
    }

    public function save()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->userprofile->update([
            'tagline' => $this->tagline,
            'bio' => $this->bio,
        ]);

        Flux::success('Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile-main');
    }
}
