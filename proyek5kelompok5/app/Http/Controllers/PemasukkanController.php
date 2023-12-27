<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukkan;

class PemasukkanController extends Controller
{
    public function index()
    {
        // Retrieve data from the 'pemasukkan' table using Eloquent
        $pemasukkan = Pemasukkan::all();

        // Pass data to the 'admin.pemasukkan.index' view for rendering
        return view('admin.pemasukkan.index', compact('pemasukkan'));
    }

    public function create()
    {
        // Show the form for adding a new Pemasukkan entry
        return view('admin.pemasukkan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'uang_masuk' => 'required|numeric',
            'uang_keluar' => 'required|numeric',
            'jumlah_sisa_uang_masuk' => 'required|numeric',
        ]);

        // Create a new Pemasukkan instance
        Pemasukkan::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('pemasukkan.index')->with('success', 'Pemasukkan added successfully');
    }

    public function edit($id)
    {
        // Retrieve data for a specific Pemasukkan entry based on the provided ID using Eloquent
        $pemasukkan = Pemasukkan::findOrFail($id);

        // Show the form for editing the Pemasukkan entry
        return view('admin.pemasukkan.edit', compact('pemasukkan'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'uang_masuk' => 'required|numeric',
            'uang_keluar' => 'required|numeric',
            'jumlah_sisa_uang_masuk' => 'required|numeric',
        ]);

        // Update the existing Pemasukkan data in the 'pemasukkan' table using Eloquent
        Pemasukkan::where('id', $id)->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('pemasukkan.index')->with('success', 'Pemasukkan updated successfully.');
    }

    public function destroy($id)
    {
        // Delete an existing Pemasukkan entry from the 'pemasukkan' table using Eloquent
        Pemasukkan::destroy($id);

        // Redirect to the index page with a success message
        return redirect()->route('pemasukkan.index')->with('success', 'Pemasukkan deleted successfully.');
    }
}
