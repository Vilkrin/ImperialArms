<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;
use Illuminate\Support\Facades\Auth;

class FleetController extends Controller
{
    public function index()
    {
        $ships = Ship::all();
        return view('fleet', compact('ships'));
    }

    public function show(Ship $ship)
    {
        return view('fleet.show', compact('ship'));
    }

    public function addToUser(Ship $ship)
    {
        $user = Auth::user();
        $user->ships()->attach($ship->id); // optional: custom_name via form
        return back()->with('success', 'Ship added to your fleet.');
    }

    public function removeFromUser(Ship $ship)
    {
        $user = Auth::user();
        $user->ships()->detach($ship->id);
        return back()->with('success', 'Ship removed from your fleet.');
    }
}
