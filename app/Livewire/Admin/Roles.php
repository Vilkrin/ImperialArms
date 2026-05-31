<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Flux\Flux;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithPagination;

    public string $search = '';

    public bool $showForm = false;
    public ?int $editingId = null;

    public string $name = '';
    public array $selectedPermissions = [];

    public function createRole()
    {
        $this->resetForm();
        $this->showForm = true;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function editRole(int $roleId)
    {
        $role = Role::with('permissions')->findOrFail($roleId);

        $this->editingId = $role->id;
        $this->name = $role->name;
        $this->selectedPermissions = $role->permissions->pluck('name')->toArray();
        $this->showForm = true;
    }

    public function save()
    {
        $this->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('roles', 'name')->ignore($this->editingId),
            ],
            'selectedPermissions' => ['array'],
        ]);

        $role = Role::updateOrCreate(
            ['id' => $this->editingId],
            [
                'name' => $this->name,
                'guard_name' => 'web',
            ]
        );

        $role->syncPermissions($this->selectedPermissions);

        $this->resetForm();

        Flux::toast(
            variant: 'success',
            text: 'Role saved successfully.'
        );
    }

    public function deleteRole(int $roleId)
    {
        $role = Role::findOrFail($roleId);

        if ($role->name === 'Super Admin') {
            Flux::toast(
                variant: 'danger',
                text: 'Super Admin role cannot be deleted.'
            );

            return;
        }

        $role->delete();

        Flux::toast(
            variant: 'success',
            text: 'Role deleted successfully.'
        );
    }

    public function cancel()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->reset([
            'showForm',
            'editingId',
            'name',
            'selectedPermissions',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.roles', [
            'roles' => Role::withCount('users')
                ->when($this->search, function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                })
                ->orderBy('name')
                ->paginate(25),

            'permissions' => Permission::orderBy('name')->get(),
        ]);
    }
}
