<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Contractfarming;
use App\Models\Addnewvegetable;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $vegetables = Addnewvegetable::all();

        return view('index', compact('vegetables') );
    }

    public function product() {

        $vegetables = \DB::table('exotic_vegetables')->get(); 
        return view('product', compact('vegetables') );
    }

     public function contact() {
        $users=User::all();
        return view('contact',compact('users'));
    }

     public function about() {
        return view('about');
    }

    public function cart() {
        return view('cart');
    }

    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
    }

    public function orderFormPage($admin_id, $vegetable_id) {

        $veg = Addnewvegetable::where('admin_id', $admin_id)
                                ->where('vegetable_id',$vegetable_id)
                                ->first();
                        
        return view('orderform', compact('veg') );
    } 



    // This is When new trader register for it

    public function registersave(Request $request){

         $data = $request->validate([
            'businessName' => 'required',
             'mobile'       => 'required',
             'address'      => 'required',
            'password'     => 'required|confirmed',

            ]);


          // Insert into DB
            $user = User::create($data);

            if ($user) {
                return redirect()->route('login');
            }

         return back()->with('error', 'Registration failed');
    }

    public function contractfarming(Request $request){


         $data = $request->validate([
            'businessname' => 'required',
            'contact'  => 'required',
            'togrow'  => 'required',
            'duration'  => 'required',
            'monthlysupply' => 'required',
            ]);

            
          // Insert into DB
            $contract = Contractfarming::create($data);

            if ($contract) {
                return redirect()->route('index');
            }

         return back()->with('error', ' failed');

        }



}


  
