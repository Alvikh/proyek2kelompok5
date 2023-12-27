<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bar;

class BarController extends Controller
{
    public function barChart()
    {
        $countByKehadiran = Bar::countByKehadiran();

        return view('admin.home', compact('countByKehadiran'));
    }
}
