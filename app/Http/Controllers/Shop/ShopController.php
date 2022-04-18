<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Shop_Category;
use App\Models\Shop;

class ShopController extends Controller
{

  public function dashboard()
    {
        return view('Shop.dashboard');
    }




    
}
