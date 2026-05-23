<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Flux\Flux;

class UserDetailsForm extends Component
{
    public User $user;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $status = 'active';

    public ?string $banned_until = null;

    public string $ban_reason = '';

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->name = $user->name ?? '';
        $this->email = $user->email ?? '';
        $this->status = $user->status ?? 'active';
    }

    public function save(): void
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->user->id),
            ],

            'password' => ['nullable', 'string', 'min:8'],

            'status' => ['required', Rule::in(['active', 'inactive', 'banned'])],
        ]);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'status' => $this->status,
        ];

        if (! blank($this->password)) {
            $data['password'] = Hash::make($this->password);
        }

        $original = $this->user->getOriginal();

        $this->user->update($data);

        activity('admin')
            ->causedBy(Auth::user())
            ->performedOn($this->user)
            ->event('updated')
            ->withProperties([
                'area' => 'Users',
                'ip' => request()->ip(),

                'old' => [
                    'name' => $original['name'] ?? null,
                    'email' => $original['email'] ?? null,
                    'status' => $original['status'] ?? null,
                ],

                'new' => [
                    'name' => $this->user->name,
                    'email' => $this->user->email,
                    'status' => $this->user->status,
                ],
            ])
            ->log('Updated user');

        $this->reset('password');

        session()->flash('success', 'User updated successfully.');
    }

    public function banUser(): void
    {
        $this->validate([
            'ban_reason' => ['required', 'string', 'max:1000'],
            'banned_until' => ['required', 'date', 'after:today'],
        ]);

        $this->user->update([
            'banned_until' => $this->banned_until,
            'ban_reason' => $this->ban_reason,
            'status' => 'banned',
        ]);

        $this->status = 'banned';

        activity('admin')
            ->causedBy(Auth::user())
            ->performedOn($this->user)
            ->event('banned')
            ->withProperties([
                'area' => 'Users',
                'ip' => request()->ip(),
                'ban_reason' => $this->ban_reason,
                'banned_until' => $this->banned_until,
            ])
            ->log('Banned user');

        DB::table('sessions')
            ->where('user_id', $this->user->id)
            ->delete();

        Flux::toast('User has been banned.', variant: 'success');

        $this->reset(['ban_reason', 'banned_until']);

        $this->modal('ban-user')->close();
    }

    public function render()
    {
        return view('livewire.admin.users.user-details-form');
    }
}
