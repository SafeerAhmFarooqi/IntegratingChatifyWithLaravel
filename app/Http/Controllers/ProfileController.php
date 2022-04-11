<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile_Privacy;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user()->id;

        $data= User::where('id',$user)->first();

        return view('profile', compact('data'));
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
        $user= Auth::user()->id;

        $data= User::where('id',$user)->first();

        return view('profile_privacy', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::where('id',$id)->first();
        return view('edit_profile_image',compact('user'));
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

        User::where('id',$id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->last_name,
            'dob'=>$request->dob,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'about'=>$request->about,
            'email'=>$request->email,
        ]);

        return redirect('home');
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

     public function edit_p_pic(Request $request,$id)
    {

     if($request->hasFile('profile_pic')){ 
           $file=$request->file('profile_pic');
           $filename= $file->getClientOriginalName();
           $filename= time(). '.' .$filename;
           $file->storeAs('user_profile_pics',$filename);

            $pic=$filename;
        }else
        {
            $pic='null';
        }

        User::where('id',$id)->update([
            'profile_pic'=>$pic,
        ]);

        return redirect('profile');
    }

 public function profile_privacy(Request $request,$id)
    {

        Profile_Privacy::where('user_id',$id)->update([

            'dob_status'=> $request->dob_status,
            'address_status'=> $request->address_status,
            'phone_status'=> $request->phone_status,
            'about_status'=> $request->about_status,
        ]);

        return redirect('home');
   
    }



}
