<?php

namespace App\Livewire\Admin\Ships;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Ship;
use Flux\Flux;
use Illuminate\Support\Str;

class ShipManager extends Component
{
    use WithFileUploads, WithPagination;

    public $classSearch = '';
    public $roleSearch = '';

    // Form fields
    public $manufacturer;
    public $model;
    public $class;
    public $role;
    public $size;
    public $crew_required;
    public $cargo_capacity;
    public $description;
    public $image;


    // Editing
    public $editingId = null;

    public function mount()
    {
        $this->ships = Ship::orderBy('manufacturer')
            ->orderBy('model')
            ->get();
    }

    #[Computed]
    public function classOptions()
    {
        return Ship::query()
            ->where('class', 'like', '%' . trim($this->classSearch) . '%')
            ->whereNotNull('class')
            ->distinct()
            ->pluck('class')
            ->take(20);
    }

    public function createClass()
    {
        $this->validate([
            'classSearch' => 'required|min:2',
        ]);

        $this->class = $this->classSearch;

        // Clear search so Flux doesn't re-trigger request
        $this->classSearch = '';
    }

    public function updatedClassSearch()
    {
        $this->resetErrorBag('classSearch');
    }

    #[Computed]
    public function roleOptions()
    {
        return Ship::query()
            ->where('role', 'like', '%' . trim($this->roleSearch) . '%')
            ->whereNotNull('role')
            ->distinct()
            ->pluck('role')
            ->take(20);
    }

    public function createRole()
    {
        $this->validate([
            'roleSearch' => 'required|min:2',
        ]);

        $this->role = $this->roleSearch;
        $this->roleSearch = '';
    }

    public function updatedRoleSearch()
    {
        $this->resetErrorBag('roleSearch');
    }

    public function save()
    {
        $data = $this->validate([
            'manufacturer' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'class' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'size' => 'nullable|string|max:255',
            'crew_required' => 'nullable|integer|min:0',
            'cargo_capacity' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:20480', // 20MB max
        ]);

        if ($this->editingId) {
            $ship = Ship::findOrFail($this->editingId);
            $ship->update($data);
        } else {
            $ship = Ship::create($data);
        }

        if ($this->image) {
            $extension = $this->image->getClientOriginalExtension();
            $fileName = Str::slug($ship->manufacturer . ' ' . $ship->model, '_') . '.' . $extension;

            $ship->clearMediaCollection('images');
            $ship->addMedia($this->image->getRealPath())
                ->usingFileName($fileName)
                ->toMediaCollection('images');
        }

        Flux::toast(
            heading: $this->editingId ? 'Ship Updated.' : 'Ship Added.',
            text: 'The ship has been saved successfully.',
            variant: 'success'
        );

        $this->resetForm();
        $this->resetPage();
        $this->modal('ship-form')->close();
    }

    public function edit($id)
    {
        $ship = Ship::findOrFail($id);

        $this->editingId = $ship->id;
        $this->manufacturer = $ship->manufacturer;
        $this->model = $ship->model;
        $this->class = $ship->class;
        $this->role = $ship->role;
        $this->size = $ship->size;
        $this->crew_required = $ship->crew_required;
        $this->cargo_capacity = $ship->cargo_capacity;
        $this->description = $ship->description;
    }

    public function delete($id)
    {
        Ship::findOrFail($id)->delete();

        Flux::toast(
            heading: 'Ship Deleted.',
            text: 'The ship has been deleted successfully.',
            variant: 'success'
        );

        $this->resetPage();
    }

    public function resetForm()
    {
        $this->reset([
            'manufacturer',
            'model',
            'class',
            'role',
            'size',
            'crew_required',
            'cargo_capacity',
            'description',
            'image',
            'editingId',
        ]);
    }

    public function render()
    {
        return view('livewire.admin.ships.ship-manager', [
            'ships' => Ship::latest()->paginate(10),
        ]);
    }
}
