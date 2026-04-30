<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ship;
use App\Models\MemberShip;

class MemberShipController extends Controller
{
    public function index()
    {

        $memberShips = auth()->user()->ships()->get();

        $ships = Ship::orderBy('manufacturer')
            ->orderBy('model')
            ->get();

        return view('profile.ships', compact('memberShips', 'ships'));
    }

    public function assign(Request $request)
    {
        $data = $request->validate([
            'ship_id' => ['required', 'exists:ships,id'],
            'name' => ['nullable', 'string', 'max:255'],
        ]);

        auth()->user()->ships()->attach($data['ship_id'], [
            'name' => $data['name'] ?? null,
            'status' => 'active',
            'is_fleet' => false,
        ]);

        return back()->with('success', 'Ship added to your profile.');
    }

    public function updateStatus(Request $request, $membershipId)
    {
        $data = $request->validate([
            'status' => 'required|in:active,maintenance,destroyed',
        ]);

        $membership = MemberShip::where('id', $membershipId)
            ->where('user_id', auth()->id())
            ->first();

        if (!$membership) {
            return back()->with('error', 'Ship not found.');
        }

        $membership->update([
            'status' => $data['status'],
        ]);

        return back()->with('success', 'Ship status updated.');
    }

    public function remove($shipId)
    {

        $user = auth()->user();

        $membership = MemberShip::where('id', $membershipId)
            ->where('user_id', $user->id)
            ->first();

        // Safety check
        if (!$membership) {
            return back()->with('error', 'Ship not found in your fleet.');
        }

        // Delete ONLY this specific pivot row
        $membership->delete();

        return back()->with('success', 'Ship removed from your fleet.');
    }
}
