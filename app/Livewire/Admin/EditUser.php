<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Flux\Flux;

class EditUser extends Component
{

    public User $user;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $status = 'active';

    public array $roleStates = [];


    public ?string $banned_until = null;

    public string $ban_reason = '';

    public function mount(User $user): void
    {
        $this->user = $user;

        $this->name = $user->name ?? '';
        $this->email = $user->email ?? '';
        $this->status = $user->status ?? 'active';

        foreach (Role::all() as $role) {
            $this->roleStates[$role->id] = $user->hasRole($role->name);
        }
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

        $this->user->update($data);

        $this->reset('password');

        session()->flash('success', 'User updated successfully.');
    }





    public function render()
    {
        return view('livewire.admin.edit-user', [
            'roles' => Role::orderBy('name')->get(),
        ]);
    }
}
