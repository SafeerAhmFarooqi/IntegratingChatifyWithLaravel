<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use Auth;

class VoucherController extends Controller
{
    public function vouchers()
    {
    	$vouchers=Voucher::all();

      	return view('Shop.vouchers',compact('vouchers'));
    }

    public function create_vouchers()
    {

      	return view('Shop.create_vouchers');
    }

     public function store_voucher(Request $request)
    {
       $shop_id= Auth::guard('shop')->user()->id;

    	 if($request->hasFile('image')){ 
           $file=$request->file('image');
           $filename= $file->getClientOriginalName();
           $filename= time(). '.' .$filename;
           $file->storeAs('shop_vouchers',$filename);

            $image=$filename;
        }else
        {
            $image='null';
        }


      	$voucher= new Voucher;

      	$voucher->title=$request->title;
      	$voucher->code=$request->code;
      	$voucher->image=$image;
      	$voucher->discount=$request->discount;
        $voucher->shop_id=$shop_id;

      	$voucher->save();

    	return redirect('Shop/vouchers');
    }

    
}
