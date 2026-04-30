<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class EditUser extends Component
{

    public User $user;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $status = 'active';

    public array $roleStates = [];

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

            'status' => ['required', Rule::in(['active', 'inactive', 'banned'])],

            'selectedRoles' => ['array'],
            'selectedRoles.*' => ['string', 'exists:roles,name'],
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'status' => $this->status,
        ]);

        if (! $this->user->hasRole('Super Admin')) {
            $this->user->syncRoles($this->selectedRoles);
        }

        session()->flash('success', 'User updated successfully.');
    }

    public function updatedRoleStates(): void
    {
        $roleIds = collect($this->roleStates)
            ->filter()
            ->keys()
            ->toArray();

        $roles = Role::whereIn('id', $roleIds)
            ->pluck('name')
            ->toArray();

        if ($this->user->hasRole('Super Admin')) {
            $roles[] = 'Super Admin';
        }

        $this->user->syncRoles($roles);
    }

    public function render()
    {
        return view('livewire.admin.edit-user', [
            'roles' => Role::orderBy('name')->get(),
        ]);
    }
}
