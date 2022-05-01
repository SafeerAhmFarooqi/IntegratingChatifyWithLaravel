<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Shop_Category;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{

  public function dashboard()
    {
      if(!Auth::user()->shop_status)
      {
          return redirect()->route('in-active-shop');
      }
      else
      {
        return view('Shop.dashboard');
      }
        
    }




    
}
