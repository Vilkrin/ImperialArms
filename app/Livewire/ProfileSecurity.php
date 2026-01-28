<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileSecurity extends Component
{
    public function render()
    {
        return view('livewire.profile-security');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = auth()->user();
        $user->password = Hash::make($validated['password']);
        $user->save();

        return back()->with('success', 'Password updated!');


        $user = $request->user();

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        // Only set the password if provided
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('profile.index')->with('status', 'Profile updated.');
    }
}
