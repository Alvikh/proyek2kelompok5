<?php

namespace App\Http\Controllers;

use App\Models\PaketOrder;
use Illuminate\Http\Request;

class PaketOrderController extends Controller
{
    public function index()
    {
        $confirmations = PaketOrder::all();

        return view('admin.confirmations.index', ['confirmations' => $confirmations]);
    }

    public function update($id)
    {
        $paketOrder = PaketOrder::findOrFail($id);

        $paketOrder->update(['confirmation' => true]);
    
        return redirect()->route('admin.confirmations.index')->with('success', 'Order confirmed successfully');
    }
    

}
