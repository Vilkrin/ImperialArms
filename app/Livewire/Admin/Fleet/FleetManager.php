<?php

namespace App\Livewire\Admin\Fleet;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MemberShip;

class FleetManager extends Component
{
    use WithPagination;

    public $membershipId = null;

    public function addToFleet()
    {
        $this->validate([
            'membershipId' => ['required', 'exists:member_ships,id'],
        ]);

        $memberShip = MemberShip::where('id', $this->membershipId)
            ->where('is_fleet', false)
            ->whereHas('user.roles', fn($query) => $query->where('name', 'org member'))
            ->firstOrFail();

        $memberShip->update([
            'is_fleet' => true,
        ]);

        $this->reset('membershipId');
        $this->resetPage();
        $this->modal('add-ship')->close();
    }

    public function removeFromFleet($id)
    {
        $memberShip = MemberShip::where('id', $id)
            ->where('is_fleet', true)
            ->firstOrFail();

        $memberShip->update([
            'is_fleet' => false,
        ]);

        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.fleet.fleet-manager', [
            'memberShips' => MemberShip::with(['user', 'ship'])
                ->where('is_fleet', true)
                ->whereHas('user.roles', function ($query) {
                    $query->where('name', 'org member');
                })
                ->paginate(10),

            'availableShips' => MemberShip::with(['user', 'ship'])
                ->where('is_fleet', false)
                ->whereHas('user.roles', function ($query) {
                    $query->where('name', 'org member');
                })
                ->get(),
        ]);
    }
}
