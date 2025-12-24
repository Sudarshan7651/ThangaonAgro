<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Addnewvegetable;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    // Show all traders
    public function traders(){
        // Only allow superAdmin access
        if (Auth::user()->role !== 'superAdmin') {
            return redirect()->route('dashboard')->with('error', 'Access denied.');
        }

        // Get all traders
        $traders = User::where('role', 'trader')->get();

        return view('superadmin.traders', compact('traders'));
    }

    // Edit trader info
    public function editTrader($id){
        $trader = User::findOrFail($id);

        return view('superadmin.editTrader', compact('trader'));
    }

    // Update trader info
    public function updateTrader(Request $request, $id){
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
    public function deleteTrader($id){
        $trader = User::findOrFail($id);
        $trader->delete();

        return redirect()->route('superadmin.traders')->with('success', 'Trader deleted successfully.');
    }

    public function manageVegetables(){
        
        $vegetables = Addnewvegetable::all();
        return view('superadmin.manageVegetables',compact('vegetables')); 
   }

    public function deleteVegetable($vegetable_id){

        // Fetch the vegetable that belongs ONLY to the logged-in admin
        $vegetable = Addnewvegetable::where('vegetable_id', $vegetable_id)
                                    ->first();

        // Delete image file from folder
        $imagePath = public_path('images/' . $vegetable->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete record
        $vegetable->delete();

        return redirect()->back()->with('success', 'Vegetable deleted successfully!');
    }

    public function updateVegetable(Request $request, $vegetable_id){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|max:2048',
        ]);

        $vegetable = Addnewvegetable::find($vegetable_id);
        if (!$vegetable) {
            return redirect()->route('vegetableslist')->with('error', 'Vegetable not found.');
        }

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path('images'), $filename);
            $vegetable->image = $filename;
        }

        // Update other fields
        $vegetable->name = $validated['name'];
        $vegetable->price = $validated['price'];
        $vegetable->quantity = $validated['quantity'];

        if ($vegetable->save()) {
            return redirect()->route('manageVegetables')->with('success', 'Vegetable updated successfully!');
        }

        return redirect()->back()->with('error', 'Failed to update vegetable.');
    }

    // View all orders from all traders
    public function allOrders(Request $request){
        // Only allow superAdmin access
        if (Auth::user()->role !== 'superAdmin') {
            return redirect()->route('dashboard')->with('error', 'Access denied.');
        }

        // Get all vegetables for filter dropdown
        $vegetables = Addnewvegetable::all();

        // Build query for orders
        $query = Order::with(['trader', 'vegetable']);

        // Apply filter if vegetable is selected
        if ($request->has('vegetable') && $request->vegetable != '') {
            $vegId = Addnewvegetable::where('name', $request->vegetable)->value('vegetable_id');
            if ($vegId) {
                $query->where('vegetable_id', $vegId);
            }
        }

        // Get all orders
        $orders = $query->orderBy('created_at', 'desc')->get();

        return view('superadmin.allOrders', compact('orders', 'vegetables'));
    }
}
