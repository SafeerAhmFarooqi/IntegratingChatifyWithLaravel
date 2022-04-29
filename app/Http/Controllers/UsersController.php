<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shop;
use App\Models\Voucher;

class UsersController extends Controller
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
        $users= User::where('active_status',1)->get();
        return view('users',compact('users'));
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
       // $user= User::where('id',$id)->first();

         $user=User::leftjoin('profile_privacies','profile_privacies.user_id','=','users.id')
            ->where('users.id','=',$id)
            ->first([
                'users.*',
                'profile_privacies.dob_status',
                'profile_privacies.address_status',
                'profile_privacies.phone_status',
                'profile_privacies.about_status',
            ]);

        return view('show_users_profile',compact('user'));
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
    public function user_search(Request $request)
    {
        $search=$request->search_user;

        $users = User::query()
        ->where('active_status',1)
        ->orwhere('firstname', 'LIKE', "%{$search}%")
        ->orWhere('lastname', 'LIKE', "%{$search}%")

        ->get();

        return view('search_user' ,compact('users'));
    }

    public function voucher_search(Request $request)
    {

        $location=$request->location;
        $shop_category=$request->shop_category;
        $sub_category=$request->sub_category;

        $where=array();

        if($request->location)
        {
            $where['vouchers.location']=$request->location;
        
        }
        if($request->shop_category)
        {
            $where['vouchers.shop_category']=$request->shop_category;
        }
        if($request->sub_category)
        {
            $where['vouchers.sub_category']=$request->sub_category;
        }

        $vouchers = Voucher::join('shops','shops.id','=','vouchers.shop_id')
        ->where($where)
        ->get([
            'vouchers.*',
            'shops.shop_name'
        ]);

        return view('search_vouchers' ,compact('vouchers'));
    }
}
