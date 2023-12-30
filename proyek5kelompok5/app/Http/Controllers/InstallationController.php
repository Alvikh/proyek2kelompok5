<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Installation;

class InstallationController extends Controller
{
    public function showInstallationForm($blogId)
    {
        $blog = Blog::find($blogId);
        return view('pasang', compact('blog'));
    }

    public function storeInstallation(Request $request)
    {
        $installation = new Installation();
        $installation->title = $request->input('title');
        $installation->capacity = $request->input('capacity');
        $installation->storage = $request->input('storage');
        $installation->nama = $request->input('nama');
        $installation->kota = $request->input('kota');
        $installation->hp = $request->input('hp');
        $installation->daya = $request->input('daya');
        $installation->pesan = $request->input('pesan');
        $installation->save();

        // You can add any additional logic here (e.g., sending emails, notifications)

        return redirect()->route('submitted');
    }
}
