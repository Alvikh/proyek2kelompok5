<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use App\Models\PaketOrder;

class AdminConfirmationController extends Controller
{
    public function showConfirmedPaketOrders()
{
    $confirmedPaketOrders = PaketOrder::where('confirmation', true)->get();

    return view('admin.confirmed-paket-orders', ['confirmedPaketOrders' => $confirmedPaketOrders]);
}

    public function submit()
    {

        $userCount = FormSubmission::distinct('id')->count();

        return view('admin.home', ['userCount' => $userCount]);
    }
}




