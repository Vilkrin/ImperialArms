<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Attributes\Validate;
use Flux\Flux;

class ProfileMain extends Component
{
    public User $user;
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

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->tagline = $this->user->tagline;
        $this->bio = $this->user->bio;
    }

    public function save()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
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
