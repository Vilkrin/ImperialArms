<?php

namespace App\Http\Controllers;

use App\Models\MemberShip;

class FleetController extends Controller
{
    public function index()
    {
        $fleetShips = MemberShip::with(['ship', 'user'])
            ->where('is_fleet', true)
            ->whereHas('user.roles', function ($query) {
                $query->where('name', 'org member');
            })
            ->get();

        return view('fleet', compact('fleetShips'));
    }
}
