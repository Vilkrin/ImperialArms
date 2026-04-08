<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ship;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ships = Ship::all();
        return view('admin.ships.index', compact('ships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'manufacturer' => 'required|string',
            'model'        => 'required|string|unique:ships,model,NULL,id,manufacturer,' . $request->manufacturer,
            'class'        => 'nullable|string',
            'role'         => 'nullable|string',
            'size'         => 'nullable|string',
            'crew_required' => 'nullable|integer',
            'cargo_capacity' => 'nullable|integer',
            'description'  => 'nullable|string',
            'image'        => 'nullable|image|max:2048',
        ]);

        $ship = Ship::create($data);

        if ($request->hasFile('image')) {
            $ship->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('admin.ships.index')->with('success', 'Ship created successfully.');
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
        return view('admin.ships.edit', compact('ship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ship $ship)
    {
        $data = $request->validate([
            'manufacturer' => 'required|string',
            'model'        => 'required|string|unique:ships,model,' . $ship->id . ',id,manufacturer,' . $request->manufacturer,
            'class'        => 'nullable|string',
            'role'         => 'nullable|string',
            'size'         => 'nullable|string',
            'crew_required' => 'nullable|integer',
            'cargo_capacity' => 'nullable|integer',
            'description'  => 'nullable|string',
            'image'        => 'nullable|image|max:2048',
        ]);

        $ship->update($data);

        if ($request->hasFile('image')) {
            $ship->clearMediaCollection('images');
            $ship->addMedia($request->file('image'))->toMediaCollection('images');
        }

        return redirect()->route('admin.ships.index')->with('success', 'Ship updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ship $ship)
    {
        $ship->delete();
        return redirect()->route('admin.ships.index')->with('success', 'Ship deleted.');
    }
}
