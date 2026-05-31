<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Flux\Flux;


class ProfileSecurity extends Component
{
    public User $user;

    #[Validate('nullable|min:8|confirmed')]
    public $password;

    public $password_confirmation;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function updatePassword()
    {
        if (! $this->password) {
            Flux::toast(variant: 'danger', text: 'Enter a new password first.');
            return;
        }

        $this->validate();

        $this->user->password = Hash::make($this->password);
        $this->user->save();

        $this->reset([
            'password',
            'password_confirmation',
        ]);

        Flux::toast(variant: 'success', text: 'Password updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile-security');
    }
}
