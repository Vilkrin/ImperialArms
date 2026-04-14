<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ship;
use Illuminate\Validation\Rule;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ships = Ship::latest()->get();

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
            'manufacturer' => ['required', 'string', 'max:255'],
            'model' => [
                'required',
                'string',
                'max:255',
                Rule::unique('ships')->where(function ($query) use ($request) {
                    return $query->where('manufacturer', $request->manufacturer);
                }),
            ],
            'class' => ['nullable', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'size' => ['nullable', 'string', 'max:255'],
            'crew_required' => ['nullable', 'integer', 'min:0'],
            'cargo_capacity' => ['nullable', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $ship = Ship::create($data);

        if ($request->hasFile('image')) {
            $ship->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()
            ->route('admin.ships.index')
            ->with('success', 'Ship created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ship $ship)
    {
        return view('admin.ships.show', compact('ship'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ship $ship)
    {
        return view('admin.ships.edit', compact('ship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ship $ship)
    {
        $data = $request->validate([
            'manufacturer' => ['required', 'string', 'max:255'],
            'model' => [
                'required',
                'string',
                'max:255',
                Rule::unique('ships')
                    ->ignore($ship->id)
                    ->where(function ($query) use ($request) {
                        return $query->where('manufacturer', $request->manufacturer);
                    }),
            ],
            'class' => ['nullable', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'size' => ['nullable', 'string', 'max:255'],
            'crew_required' => ['nullable', 'integer', 'min:0'],
            'cargo_capacity' => ['nullable', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        $ship->update($data);

        if ($request->hasFile('image')) {
            $ship->clearMediaCollection('images');
            $ship->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()
            ->route('admin.ships.index')
            ->with('success', 'Ship updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ship $ship)
    {
        $ship->delete();

        return redirect()
            ->route('admin.ships.index')
            ->with('success', 'Ship deleted successfully.');
    }
}
