<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    // Show all traders
    public function traders()
    {
        // Only allow superAdmin access
        if (Auth::user()->role !== 'superAdmin') {
            return redirect()->route('dashboard')->with('error', 'Access denied.');
        }

        // Get all traders
        $traders = User::where('role', 'trader')->get();

        return view('superadmin.traders', compact('traders'));
    }

    // Edit trader info
    public function editTrader($id)
    {
        $trader = User::findOrFail($id);

        return view('superadmin.editTrader', compact('trader'));
    }

    // Update trader info
    public function updateTrader(Request $request, $id)
    {
        $trader = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|unique:users,mobile,'.$trader->id,
            // Add more fields if needed
        ]);

        $trader->update($request->all());

        return redirect()->route('superadmin.traders')->with('success', 'Trader updated successfully.');
    }

    // Delete trader
    public function deleteTrader($id)
    {
        $trader = User::findOrFail($id);
        $trader->delete();

        return redirect()->route('superadmin.traders')->with('success', 'Trader deleted successfully.');
    }
}
