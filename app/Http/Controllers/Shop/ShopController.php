<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Shop_Category;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use App\Models\Voucher;
use App\Models\UseVoucher;

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
        $voucherCount=Voucher::all()->count();
        $vouchersDiscount=UseVoucher::where('shop_id',Auth::user()->id)->pluck('discount');
        $totalSpend=0;
        foreach ($vouchersDiscount as $discount) {
          
          $totalSpend+=$discount;
        } 
        return view('Shop.dashboard',[
          'voucherCount'=>$voucherCount,
          'totalSpend'=>$totalSpend,
        ]);
      }
        
    }




    
}
