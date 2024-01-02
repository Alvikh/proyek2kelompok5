<?php

namespace App\Http\Controllers;

use App\Models\Installation;

class AdminConfirmationController extends Controller
{
    public function showAdminConfirmationView()
    {
        $formulations = Installation::all();

        return view('admin.confirmation', ['formulations' => $formulations]);
    }

    public function confirm($id)
    {
        // Implement your logic for confirmation here
        // For example, you might update the status of the installation form

        // Assuming you have a 'status' column in your installations table
        Installation::where('id', $id)->update(['status' => 'confirmed']);

        return redirect()->route('admin.confirmation')->with('success', 'Installation confirmed successfully.');
    }

    public function reject($id)
    {
        // Implement your logic for rejection here
        // For example, you might update the status of the installation form

        // Assuming you have a 'status' column in your installations table
        Installation::where('id', $id)->update(['status' => 'rejected']);

        return redirect()->route('admin.confirmation')->with('success', 'Installation rejected successfully.');
    }

    public function showConfirmedInstallation()
    {
        // Add logic to fetch and display confirmed installations
        // For example, you can use the same view file and pass the confirmed installations data
        $confirmedInstallations = Installation::where('status', 'confirmed')->get();

        return view('admin.confirmed-installation', ['confirmedInstallations' => $confirmedInstallations]);
    }
}
