<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Attributes\Validate;

class ProfileMain extends Component
{
    public User $user;

    #[Validate('required|string|max:255')]
    public $name;

    #[Validate('required|email', as: 'Email Address')]
    public $email;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        // Save user details
        $this->user->name = $this->name;
        $this->user->email = $this->email;

        if ($this->password) {
            $this->user->password = bcrypt($this->password);
        }

        $this->user->save();

        session()->flash('success', 'Profile updated successfully.');

        // Redirect to the user list page
        return redirect()->route('profile.index');
    }

    public function render()
    {
        return view('livewire.profile-main');
    }
}
