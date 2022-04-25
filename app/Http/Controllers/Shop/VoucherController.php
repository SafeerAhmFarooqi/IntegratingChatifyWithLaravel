<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use App\Models\UseVoucher;
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
           $file->storeAs('shop_vouchers',$filename,'public');

            $image=$filename;
        }else
        {
            $image='null';
        }

        $code=time();


      	$voucher= new Voucher;

      	$voucher->title=$request->title;
      	$voucher->code=$code;
      	$voucher->image=$image;
      	$voucher->discount=$request->discount;
        $voucher->shop_id=$shop_id;

      	$voucher->save();

    	return redirect('Shop/vouchers');
    }

     public function use_vouchers()
    {
      $use_vouchers= UseVoucher::all();

        return view('Shop.use_vouchers', compact('use_vouchers'));
    }


     public function check_voucher(Request $request)
    {

        $query=Voucher::where('code',$request->code)->first();

        if($query->status == 1){


        $use_voucher= new UseVoucher;

        $use_voucher->title=$query->title;
        $use_voucher->code=$query->code;
        $use_voucher->image=$query->image;
        $use_voucher->discount=$query->discount;
        $use_voucher->shop_id=$query->shop_id;
        $use_voucher->user_email=$request->user_email;

        $use_voucher->save();

        Voucher::where('code',$query->code)->update([

            'status'=> 0,
        ]);

        return redirect('Shop/dashboard');

        }else{

          return "already use this voucher";
        }

    
    }

    
}
