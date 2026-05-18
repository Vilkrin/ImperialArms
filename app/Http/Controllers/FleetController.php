<?php

namespace App\Http\Controllers;

use App\Models\MemberShip;

class FleetController extends Controller
{
    public function index()
    {
        $fleetShips = MemberShip::with(['ship.media'])
            ->where('is_fleet', true)
            ->whereHas('user.roles', function ($query) {
                $query->where('name', 'org member');
            })
            ->selectRaw('ship_id, COUNT(*) as fleet_count')
            ->groupBy('ship_id')
            ->get();

        return view('fleet', compact('fleetShips'));
    }
}
