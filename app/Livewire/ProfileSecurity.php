<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\User;


class ProfileSecurity extends Component
{
    public User $user;

    #[Validate('nullable|min:8|confirmed')]
    public $password;

    public $password_confirmation;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function updatePassword()
    {
        // Save user details

        if ($this->password) {
            $this->user->password = bcrypt($this->password);
        }

        $this->user->save();

        return redirect()->route('profile.index')->with('status', 'Profile updated.');

        // Redirect to the user list page
        return redirect()->route('profile.index');
    }

    public function render()
    {
        return view('livewire.profile-security');
    }
}
