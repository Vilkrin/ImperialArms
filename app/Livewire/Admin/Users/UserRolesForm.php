<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;
use Flux\Flux;

class UserRolesForm extends Component
{
    use WithPagination;

    public User $user;

    public array $roleStates = [];

    public function mount(User $user): void
    {
        abort_unless(
            auth()->user()->can('manage.users.roles'),
            403
        );

        $this->user = $user;

        foreach (Role::all() as $role) {
            $this->roleStates[$role->id] = $user->hasRole($role->name);
        }
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

        Flux::toast('User roles have been updated.', variant: 'success');

        activity('admin')
            ->causedBy(auth()->user())
            ->performedOn($this->user)
            ->event('updated')
            ->withProperties([
                'area' => 'Users',
                'section' => 'Roles',
                'ip' => request()->ip(),
                'roles' => $roles,
            ])
            ->log('Updated user roles');
    }

    public function render()
    {
        return view('livewire.admin.users.user-roles-form', [
            'roles' => Role::orderBy('name')->get(),
        ]);
    }
}
