<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;
use App\Models\Shop;
use Auth;
use App\Models\UseVoucher;
use App\Models\Location;
use App\Models\Shop_Category;
use App\Models\Sub_Category;

class UserVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $category=Shop_Category::all();
        $location=Location::all();
        $sub_category=Sub_Category::all();

        $vouchers=Voucher::join('shops','shops.id','=','vouchers.shop_id')
        ->get([
            'vouchers.*',
            'shops.shop_name'
        ]);



        return view('vouchers_list',compact('vouchers','category','location','sub_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop_profile= Shop::where('id',$id)->first();

        return view('shop_profile',compact('shop_profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function savings()
    {
        $login= Auth::user()->email;

        $t_savings=UseVoucher::where('user_email',$login)->sum('discount');

         $use_vouchers= UseVoucher::leftjoin('shops','shops.id','=','use_vouchers.shop_id')
         ->where('user_email',$login)
         ->get([
            'use_vouchers.*',
            'shops.shop_name'
         ]);

         return view('user_use_vouchers', compact('use_vouchers','t_savings'));
    }
}
