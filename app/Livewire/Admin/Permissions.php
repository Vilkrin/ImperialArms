<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Flux\Flux;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;

    public string $search = '';

    public bool $showForm = false;
    public ?int $editingId = null;

    public string $name = '';
    public array $selectedRoles = [];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function createPermission()
    {
        $this->resetForm();
        $this->showForm = true;
    }

    private function resetForm()
    {
        $this->reset([
            'showForm',
            'editingId',
            'name',
            'selectedRoles',
        ]);
    }

    public function editPermission(int $permissionId)
    {
        $permission = Permission::with('roles')->findOrFail($permissionId);

        $this->editingId = $permission->id;
        $this->name = $permission->name;
        $this->selectedRoles = $permission->roles->pluck('name')->toArray();

        $this->showForm = true;
    }

    public function save()
    {
        $this->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('permissions', 'name')->ignore($this->editingId),
            ],
            'selectedRoles' => ['array'],
        ]);

        $permission = Permission::updateOrCreate(
            ['id' => $this->editingId],
            [
                'name' => $this->name,
                'guard_name' => 'web',
            ]
        );

        $roles = Role::whereIn('name', $this->selectedRoles)->get();

        foreach ($roles as $role) {
            $role->givePermissionTo($permission);
        }

        Role::whereNotIn('name', $this->selectedRoles)
            ->get()
            ->each(fn($role) => $role->revokePermissionTo($permission));

        $this->resetForm();
        $this->resetPage();
        $this->search = '';

        Flux::toast(
            variant: 'success',
            text: 'Permission saved successfully.'
        );
    }

    public function deletePermission(int $permissionId)
    {
        Permission::findOrFail($permissionId)->delete();

        Flux::toast(
            variant: 'success',
            text: 'Permission deleted successfully.'
        );
    }

    public function render()
    {
        return view('livewire.admin.permissions', [
            'permissions' => Permission::withCount('roles')
                ->when($this->search, function ($query) {
                    $query->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($this->search) . '%']);
                })
                ->orderBy('name')
                ->paginate(25),

            'roles' => Role::orderBy('name')->get(),
        ]);
    }
}
