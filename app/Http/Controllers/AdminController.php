<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Specialorder;
use App\Models\Contractfarming;
use App\Models\Addnewvegetable;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
     public function addvegetable() {
        return view('admin.addnewvegetable');
    }

public function dashboard()
{
    if (!Auth::check()) {
        return redirect()->route('login'); // ✅ NOT register
    }

    // OPTIONAL: role protection
    if (Auth::user()->role !== 'trader') {
        abort(403);
    }

    $recents = Order::where('admin_id', Auth::id())
        ->latest()
        ->take(5)
        ->get();

    $monthlyRevenue = \DB::table('orders')
        ->join('addnewvegetables', 'orders.vegetable_id', '=', 'addnewvegetables.vegetable_id')
        ->where('orders.status', 'confirmed')
        ->where('orders.admin_id', Auth::id())
        ->selectRaw('MONTH(orders.created_at) as month, SUM(addnewvegetables.price * addnewvegetables.quantity) as revenue')
        ->groupBy('month')
        ->pluck('revenue', 'month')
        ->toArray();

    $mostSoldVegetables = \DB::table('orders')
        ->join('addnewvegetables', 'orders.vegetable_id', '=', 'addnewvegetables.vegetable_id')
        ->where('orders.status', 'confirmed')
        ->where('orders.admin_id', Auth::id())
        ->selectRaw('addnewvegetables.name, SUM(addnewvegetables.quantity) as total_quantity')
        ->groupBy('addnewvegetables.name')
        ->orderByDesc('total_quantity')
        ->get();

    $orders = Order::where('admin_id', Auth::id())->get();

    return view('admin.dashboard', compact(
        'orders',
        'recents',
        'monthlyRevenue',
        'mostSoldVegetables'
    ));
}


    public function vegetableslist() {

        $vegetables = Addnewvegetable::where('admin_id', Auth::id())->get();

        return view('admin.vegetableslist', compact('vegetables'));
    }
    
    public function orders() {

       

        $orders=Order::where('admin_id', Auth::id())->get();
        $vegetables = Addnewvegetable::where('admin_id', Auth::id())->get();

        return view('admin.orders', compact('orders', 'vegetables'));

    }

    public function specialOrders() {
        // Delete special orders older than 1 day
    Specialorder::where('created_at', '<', now()->subDay())->delete();

        $orders = Specialorder::orderBy('id', 'DESC')->get();
        return view('admin.specialOrders', compact('orders'));

    }

    public function contractFarmingPage() {

        
        // Delete special orders older than 1 day
    Contractfarming::where('created_at', '<', now()->subDay())->delete();

        $contractfarmingorders=Contractfarming::all();
        return view('admin.contractFarming', compact('contractfarmingorders'));

    }


    public function logout(){

    Auth::logout();
    return redirect()->route('index');

    }

        // This is for add new todays available vegetables by trader
    public function Addnewvegetable(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string|max:20',
            'quantity' => 'required|string|max:20',
            'image' => 'required|image',
        ]);

    
        $img = $request->file('image');

        // Generate unique filename
        $filename = time() . '_' . $img->getClientOriginalName();

        // Move file
        $img->move(public_path('images'), $filename);

        // Save in DB
        $addvegetable = Addnewvegetable::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $filename,
            'admin_id' =>Auth::id(),
        ]);



        if ($addvegetable) {
            return redirect()->back()->with('success', 'Added successfully!');
        
        }

         return redirect()->back()->with('error', 'Failed to add new vegetable.');
    }

    // Show edit form for a vegetable
    public function edit($id){

        $vegetable = Addnewvegetable::find($id);
        return view('admin.editvegetable', compact('vegetable'));
    }

        // Update vegetable in database
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
            return redirect()->route('vegetableslist')->with('success', 'Vegetable updated successfully!');
        }

        return redirect()->back()->with('error', 'Failed to update vegetable.');
    }


        // delete vegetable in database
    public function deleteVegetable($vegetable_id){

        // Fetch the vegetable that belongs ONLY to the logged-in admin
        $vegetable = Addnewvegetable::where('vegetable_id', $vegetable_id)
                                    ->where('admin_id', Auth::id())
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

    public function loginmatch(Request $request){


        $credentials = $request->validate([
            'mobile'  => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

             $user = Auth::user();

           if ($user->role === 'trader') {
            return redirect()->route('dashboard'); // Trader dashboard
        } elseif ($user->role === 'superAdmin') {
            return redirect()->route('superadmin.traders'); // Super Admin view
        } else {
            Auth::logout();
            return back()->with('error', 'Unauthorized role.');
        }
    } else {
        return back()->with('error', 'Login failed. Please check your credentials.');
    }
    }

    public function storeOrder(Request $request){
        $request->validate([
            'businessname' => 'required|string',
            'contact' => 'required|string',
            'delivery_location' => 'required|string',
        ]);

        Order::create([
            'businessname' => $request->businessname,
            'contact' => $request->contact,
            'delivery_location' => $request->delivery_location,
            'status' => 'pending',
            'admin_id' => $request->admin_id,
            'vegetable_id' => $request->vegetable_id,
            'invoice' => $request->invoice,
        ]);

        return redirect()->back()->with('success', 'Order Placed Successfully!');
    }

    public function confirmOrder($order_id){
        $order = Order::find($order_id);
        if ($order) {
            $order->status = 'confirmed';
            $order->save();
            return redirect()->back()->with('success', 'Order confirmed successfully!');
        }
        return redirect()->back()->with('error', 'Order not found.');
    }

    public function cancelOrder($order_id){
        $order = Order::find($order_id);
        if ($order) {
            $order->status = 'canceled';
            $order->save();
            return redirect()->back()->with('success', 'Order canceled successfully!');
        }
        return redirect()->back()->with('error', 'Order not found.');
    }




    public function Specialorder(Request $request){
        $request->validate([
            'business_name' => 'required|string',
            'requirements' => 'required|string',
            'quantity' => 'required|string',
            'contact' => 'required|string',
            'delivery_location' => 'required|string',
        ]);

        Specialorder::create([
            'business_name' => $request->business_name,
            'requirements' => $request->requirements,
            'quantity' => $request->quantity,
            'contact' => $request->contact,
            'delivery_location' => $request->delivery_location,
        ]);

        return redirect()->back()->with('success', 'Order Placed Successfully!');
    }

    public function invoice($order_id){

        $order = Order::find($order_id);
        
        $vegetable = Addnewvegetable::where('vegetable_id', $order->vegetable_id)->first();
        if ($order) {
            return view('admin.invoice', compact('order', 'vegetable'));
        }
        return redirect()->back()->with('error', 'Order not found.');
    }

   


}




