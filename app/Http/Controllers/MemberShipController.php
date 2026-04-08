<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MemberShipController extends Controller
{
    public function index()
    {

        $memberShips = auth()->user()->ships()->with('ship')->get();
        return view('profile.ships', compact('memberShips'));
    }

    public function assign(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'ship_id' => 'required|exists:ships,id',
            'name' => 'nullable|string|max:255'
        ]);

        $user = User::findOrFail($data['user_id']);
        $user->ships()->attach($data['ship_id'], ['name' => $data['name'] ?? null]);

        return back()->with('success', 'Ship assigned to user.');
    }

    public function remove(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'ship_id' => 'required|exists:ships,id',
        ]);

        $user = User::findOrFail($data['user_id']);
        $user->ships()->detach($data['ship_id']);

        return back()->with('success', 'Ship removed from user.');
    }
}
