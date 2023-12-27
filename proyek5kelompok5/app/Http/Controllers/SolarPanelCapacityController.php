<?php

namespace App\Http\Controllers;

use App\Models\SolarPanelCapacity;
use Illuminate\Http\Request;

class SolarPanelCapacityController extends Controller
{
    public function index()
    {
        $capacities = SolarPanelCapacity::all();
        return view('admin.capacities.index', compact('capacities'));
    }

    public function create()
    {
        return view('admin.capacities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'capacity' => 'required|string',
        ]);

        SolarPanelCapacity::create($request->all());

        return redirect()->route('admin.capacities.index')
            ->with('success', 'Kapasitas panel surya berhasil ditambahkan');
    }

    public function edit(SolarPanelCapacity $capacity)
    {
        return view('admin.capacities.edit', compact('capacity'));
    }

    public function update(Request $request, SolarPanelCapacity $capacity)
    {
        $request->validate([
            'capacity' => 'required|string',
        ]);

        $capacity->update($request->all());

        return redirect()->route('admin.capacities.index')
            ->with('success', 'Kapasitas panel surya berhasil diperbarui');
    }

    public function destroy(SolarPanelCapacity $capacity)
    {
        $capacity->delete();

        return redirect()->route('admin.capacities.index')
            ->with('success', 'Kapasitas panel surya berhasil dihapus');
    }
}
