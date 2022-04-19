<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use App\Models\Location;
use App\Models\Shop_Category;
use App\Models\Shop;
use Hash;

class ShopAuthController extends Controller
{
    
    public function showLoginForm()
    {
       
    	if(Auth::guard('shop')->check()){

    		redirect('Shop/dashboard');
    	}else{
    		return view('auth.shopLogin');
    	}
    }


    public function login(Request $request)
    {
        if(auth()->guard('shop')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->user();
            return redirect('/Shop/dashboard');
        } else {
            return redirect()->back()->withError('username or email doesn\'t match.');
        }
    }


    public function showRegisterForm(Request $request)
    {
        $category=Shop_Category::all();
     	$location= Location::all();
        return view('auth.shopRegister', compact('category','location'));
    }

     public function register(Request $request)
    {
        $shop = Shop::create([
        	'shop_name'=>$request['shop_name'],
        	'address'=>$request['address'],
        	'shop_category'=>$request['shop_category'],
        	'phone'=>$request['phone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'location'=>$request['location'],
        ]);

        return redirect('Shop/login');
    }


    public function logout(Request $request)
    {
        Auth::guard('shop')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
