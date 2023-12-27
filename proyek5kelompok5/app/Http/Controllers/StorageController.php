<?php

// app/Http/Controllers/StorageController.php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index()
    {
        $storage = Storage::all();
        return view('admin.storage.index', compact('storage'));
    }

    public function create()
    {
        return view('admin.storage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'storage' => 'required|string',
        ]);

        Storage::create($request->all());

        return redirect()->route('admin.storage.index')
            ->with('success', 'Storage berhasil ditambahkan');
    }

    public function edit(Storage $storage)
    {
        return view('admin.storage.edit', compact('storage'));
    }

    public function update(Request $request, Storage $storage)
    {
        $request->validate([
            'storage' => 'required|string',
        ]);

        $storage->update($request->all());

        return redirect()->route('admin.storage.index')
            ->with('success', 'Storage berhasil diperbarui');
    }

    public function destroy(Storage $storage)
    {
        $storage->delete();

        return redirect()->route('admin.storage.index')
            ->with('success', 'Storage berhasil dihapus');
    }
}
