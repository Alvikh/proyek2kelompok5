<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Installation;
use App\Models\Pemasukkan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    $users = User::count();
    $installationsCount = Installation::count();
    $totalJumlahSisaUangMasuk = Pemasukkan::sum('jumlah_sisa_uang_masuk');

    $widget = [
        'users' => $users,
        'installations' => $installationsCount,
        'totalJumlahSisaUangMasuk' => $totalJumlahSisaUangMasuk,
        
    ];

    return view('admin.home', compact('widget'));
}
    
}
