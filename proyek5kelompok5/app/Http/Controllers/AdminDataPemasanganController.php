<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Installation;

class AdminDataPemasanganController extends Controller
{
    public function index()
    {
        // Fetch confirmed installations data
        $confirmedInstallations = Installation::all();

        return view('admin.data-pemasangan.index', ['confirmedInstallations' => $confirmedInstallations]);
    }

    public function create()
    {
        // Show the form for creating a new installation
        return view('admin.data-pemasangan.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new installation data
        $request->validate([
            'title' => 'required',
            // Add validation rules for other fields
        ]);

        Installation::create($request->all());

        return redirect()->route('admin.data-pemasangan.index')->with('success', 'Installation created successfully.');
    }

    public function edit($id)
    {
        // Fetch installation data for editing
        $installation = Installation::find($id);

        return view('admin.data-pemasangan.edit', ['installation' => $installation]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update the installation data
        $request->validate([
            'title' => 'required',
            // Add validation rules for other fields
        ]);

        Installation::where('id', $id)->update($request->except('_token', '_method'));

        return redirect()->route('admin.data-pemasangan.index')->with('success', 'Installation updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the installation
        Installation::destroy($id);

        return redirect()->route('admin.data-pemasangan.index')->with('success', 'Installation deleted successfully.');
    }
}
