<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use App\Models\UseVoucher;
use Auth;
use Illuminate\Support\Str;

class VoucherController extends Controller
{
    public function vouchers()
    {
      $login= Auth::user()->id;
    	$vouchers=Voucher::where('shop_id',$login)->get();
      $voucherCount=Voucher::all()->count();
      $vouchersDiscount=UseVoucher::where('shop_id',Auth::user()->id)->pluck('discount');
      $totalSpend=0;
      foreach ($vouchersDiscount as $discount) {
        
        $totalSpend+=$discount;
      } 
      	return view('Shop.vouchers',[
          'voucherCount'=>$voucherCount,
          'totalSpend'=>$totalSpend,
          'vouchers'=>$vouchers,
        ]);
    }

    public function create_vouchers()
    {
      $voucherCount=Voucher::all()->count();
      $vouchersDiscount=UseVoucher::where('shop_id',Auth::user()->id)->pluck('discount');
      $totalSpend=0;
      foreach ($vouchersDiscount as $discount) {
        
        $totalSpend+=$discount;
      } 
      	return view('Shop.create_vouchers',[
          'voucherCount'=>$voucherCount,
          'totalSpend'=>$totalSpend,
        ]);
    }

     public function store_voucher(Request $request)
    {
       $shop_id= Auth::guard('shop')->user()->id;
       $location= Auth::guard('shop')->user()->location;
       $shop_category= Auth::guard('shop')->user()->shop_category;
       $sub_category= Auth::guard('shop')->user()->sub_category;

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

        $code=mt_rand(1000000000, 9999999999);
        while (true) {
          $voucher=Voucher::where('code',$code)->first();
          if(Voucher::where('code',$code)->first())
          {
            $code=mt_rand(1000000000, 9999999999);
          }
          else
          {
            break;
          }
        }


      	$voucher= new Voucher;

      	$voucher->title=$request->title;
      	$voucher->code=$code;
      	$voucher->image=$image;
      	$voucher->discount=$request->discount;
        $voucher->shop_id=$shop_id;
        $voucher->location=$location;
        $voucher->shop_category=$shop_category;
        $voucher->sub_category=$sub_category;

      	$voucher->save();

    	return redirect('Shop/vouchers');
    }

     public function use_vouchers()
    {
       $login= Auth::user()->id;
      $use_vouchers= UseVoucher::where('shop_id',$login)->get();
      $voucherCount=Voucher::all()->count();
      $vouchersDiscount=UseVoucher::where('shop_id',Auth::user()->id)->pluck('discount');
      $totalSpend=0;
      foreach ($vouchersDiscount as $discount) {
        
        $totalSpend+=$discount;
      } 
        return view('Shop.use_vouchers', [
          'voucherCount'=>$voucherCount,
          'totalSpend'=>$totalSpend,
          'use_vouchers'=>$use_vouchers,
        ]);
    }


     public function check_voucher(Request $request)
    {
        $query=Voucher::where('code',$request->code)->first();
        if ($query) {
          if($query->status == 1){


            $use_voucher= new UseVoucher;
    
            $use_voucher->title=$query->title;
            $use_voucher->code=$query->code;
            $use_voucher->image=$query->image;
            $use_voucher->discount=$query->discount;
            $use_voucher->shop_id=$query->shop_id;
            $use_voucher->location=$query->location;
            $use_voucher->shop_category=$query->shop_category;
            $use_voucher->sub_category=$query->sub_category;
            $use_voucher->user_email=$request->user_email;
    
            $use_voucher->save();
    
            Voucher::where('code',$query->code)->update([
    
                'status'=> 0,
            ]);
    
            return back()->with('message','Voucher Verified Successfully');
    
            }
            else
            {
              return back()->with('message','Voucher Already Used');
            }
}
else
{
  return back()->with('message','Wrong Voucher Code');
}
        

    
    }

    public function voucherDelete($id)
    {
      //return $id;

      $result=Voucher::find($id)->delete();
      if ($result) {
        return back()->with('message', 'Voucher Deleted Successfully' );
      } else {
        return back()->with('message', 'Error Deleting Voucher' );
      }
            
    }

    public function checkVoucher()
    {
      $voucherCount=Voucher::all()->count();
      $vouchersDiscount=UseVoucher::where('shop_id',Auth::user()->id)->pluck('discount');
      $totalSpend=0;
      foreach ($vouchersDiscount as $discount) {
        
        $totalSpend+=$discount;
      } 
      return view('Shop.chech_voucher',[
        'voucherCount'=>$voucherCount,
          'totalSpend'=>$totalSpend,
      ]);
            
    }

    
}
