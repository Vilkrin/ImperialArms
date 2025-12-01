<?php

namespace App\Livewire;

use Livewire\Component;

class ProfileMain extends Component
{
    public $name;
    public $email;

    public function mount()
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        $this->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
        ]);

        auth()->user()->update([
            'name'  => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.profile-main');
    }
}
