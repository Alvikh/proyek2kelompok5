<?php

namespace App\Http\Controllers;

use App\Models\PaketOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function submitted(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required|string',
            'kota' => 'required|string',
            'hp' => 'required|string',
            'daya' => 'required|string',
            'paket_kebutuhan' => 'required|string',
            'pesan' => 'required|string',
        ], [
            'required' => 'Kolom :attribute wajib diisi.',
            'string' => 'Kolom :attribute harus berupa teks.',
        ]);
        
        $userId = Auth::user()->id;
        
        // Simpan data ke dalam database
        PaketOrder::create([
            'user_id' => $userId,
            'nama' => $request->input('nama'),
            'kota' => $request->input('kota'),
            'hp' => $request->input('hp'),
            'daya' => $request->input('daya'),
            'paket_kebutuhan' => $request->input('paket_kebutuhan'),
            'pesan' => $request->input('pesan'),
        ]);
        

        return view('submitted');
    }


    }

