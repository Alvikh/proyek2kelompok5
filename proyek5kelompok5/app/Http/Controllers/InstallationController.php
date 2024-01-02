<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Installation;

class InstallationController extends Controller
{
    public function storeInstallation(Request $request)
    {
        // Validate the input data
        $request->validate([
            'title' => 'required|string',
            'capacity' => 'required|string',
            'storage' => 'required|string',
            'nama' => 'required|string',
            'kota' => 'required|string',
            'hp' => 'required|string',
            'daya' => 'required|string',
            'pesan' => 'required|string',
        ]);

        // Create a new Installation instance and save it to the database
        $installation = new Installation();
        $installation->title = $request->input('title');
        $installation->capacity = $request->input('capacity');
        $installation->storage = $request->input('storage');
        $installation->nama = $request->input('nama');
        $installation->kota = $request->input('kota');
        $installation->hp = $request->input('hp');
        $installation->daya = $request->input('daya');
        $installation->pesan = $request->input('pesan');
$installation->status = 'pending'; // Provide a default status value
$installation->save();



        // Redirect to a view indicating successful submission
        return view('submitted');
    }
}
