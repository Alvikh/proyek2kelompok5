<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        // Retrieve data from the 'pegawai' table using Eloquent
        $pegawai = Pegawai::all();

        // Pass data to the 'admin.pegawai.index' view for rendering
        return view('admin.pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        // Show the form for adding a new employee
        return view('admin.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        // Create a new Pegawai instance
        Pegawai::create($request->all());

        // Redirect to a success page or any other logic
        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai added successfully');
    }

    public function edit($id)
    {
        // Retrieve data for a specific employee based on the provided ID using Eloquent
        $pegawai = Pegawai::findOrFail($id);

        // Show the form for editing the employee
        return view('admin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        // Update the existing employee data in the 'pegawai' table using Eloquent
        Pegawai::where('id', $id)->update($validatedData);

        // Redirect to the index page or any other page you prefer
        return redirect()->route('admin.pegawai.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        // Delete an existing employee from the 'pegawai' table using Eloquent
        Pegawai::destroy($id);

        // Redirect to the index page or any other page you prefer
        return redirect()->route('admin.pegawai.index')->with('success', 'Employee deleted successfully.');
    }
}
