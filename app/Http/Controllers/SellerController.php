<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function SellerIndex(){
        return view('seller.seller_login');
    } // end method

    public function SellerDashboard(){
        return view('seller.index');
    } // END METHOD

    public function SellerLogin(Request $request){
        // dd($request->all());

        $check = $request->all();
        if(Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password'] ])){
            return redirect()->route('seller.dashboard')->with('error' , 'Seller login succefuly');
        }else{
            return back()->with('error' , 'Invalid Email or Password');
        }

    }  // end methode

    public function SellerLogout(){
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_from')->with('error' , 'Seller Logout succefuly');
    } // end method

    public function SellerRegister(){
        return view('seller.seller_register');
    } // end method

    public function SellerRegisterCreate(Request $request){

        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('seller_login_from')->with('error' , 'Seller Created succefuly');

    } //END METHOD

}
