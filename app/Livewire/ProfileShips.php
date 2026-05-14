<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ship;

class ProfileShips extends Component
{
    public $ships;

    public $memberShips;

    public $ship_id = null;

    public $name = '';

    public $serial_number = '';

    public function mount()
    {
        // All available ship models users can assign
        $this->ships = Ship::orderBy('manufacturer')
            ->orderBy('model')
            ->get();

        // Load current user's assigned ships
        $this->loadShips();
    }

    public function loadShips()
    {
        $this->memberShips = auth()->user()
            ->ships()
            ->with('media')
            ->get();
    }

    public function addShip()
    {
        $this->validate([
            'ship_id' => ['required', 'exists:ships,id'],
            'name' => ['nullable', 'string', 'max:255'],
            'serial_number' => ['nullable', 'string', 'max:255'],
        ]);

        auth()->user()->ships()->attach($this->ship_id, [
            'name' => $this->name,
            'serial_number' => $this->serial_number,
            'status' => 'active',
        ]);

        // Reset modal form fields
        $this->reset([
            'ship_id',
            'name',
            'serial_number',
        ]);

        // Refresh ship list
        $this->loadShips();

        // Close modal
        $this->modal('add-ship')->close();
    }

    public function updateStatus($shipId, $status)
    {
        auth()->user()->ships()->updateExistingPivot($shipId, [
            'status' => $status,
        ]);

        $this->loadShips();
    }

    public function removeShip($shipId)
    {
        auth()->user()->ships()->detach($shipId);

        $this->loadShips();
    }

    public function render()
    {
        return view('livewire.profile-ships');
    }
}
