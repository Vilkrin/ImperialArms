<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberShip;
use Illuminate\Validation\Rule;

class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memberShips = MemberShip::with(['user', 'ship'])
            ->where('is_fleet', true)
            ->whereHas('user.roles', function ($query) {
                $query->where('name', 'org member');
            })
            ->get();

        $availableShips = MemberShip::with(['user', 'ship'])
            ->where('is_fleet', false)
            ->whereHas('user.roles', function ($query) {
                $query->where('name', 'org member');
            })
            ->get();

        return view('admin.fleet.index', compact('memberShips', 'availableShips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'membership_id' => [
                'required',
                'integer',
                Rule::exists('member_ships', 'id'),
            ],
        ]);

        $memberShip = MemberShip::with('user.roles')
            ->where('id', $data['membership_id'])
            ->where('is_fleet', false)
            ->whereHas('user.roles', function ($query) {
                $query->where('name', 'org member');
            })
            ->first();

        if (! $memberShip) {
            return redirect()
                ->route('admin.fleet.index')
                ->with('error', 'That ship could not be added to the fleet.');
        }

        $memberShip->update([
            'is_fleet' => true,
        ]);

        return redirect()
            ->route('admin.fleet.index')
            ->with('success', 'Ship added to the fleet successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $memberShip = MemberShip::with('user.roles')
            ->where('id', $id)
            ->where('is_fleet', true)
            ->whereHas('user.roles', function ($query) {
                $query->where('name', 'org member');
            })
            ->first();

        if (! $memberShip) {
            return redirect()
                ->route('admin.fleet.index')
                ->with('error', 'That ship could not be removed from the fleet.');
        }

        $memberShip->update([
            'is_fleet' => false,
        ]);

        return redirect()
            ->route('admin.fleet.index')
            ->with('success', 'Ship removed from the fleet successfully.');
    }
}
