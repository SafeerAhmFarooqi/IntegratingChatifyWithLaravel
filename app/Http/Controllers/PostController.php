<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  
    public function form_submit(Request $request)
    {
        //return $request->post();
        $model = new Post();
        $model->post_text=$request->post('post_text');
        $model->save();
        return["msg"=>"Post Submitted It Take 5 - 10 Seconds for Appear ! "];
    }

    public function profile(){


        $user= Auth::user()->id;

        $data= User::where('id',$user)->first();

      
        return view('profile', compact('data'));


    }

     public function profile_update(Request $request,$id){

        User::where('id',$id)->update([
            'name'=>$request->firstname,
            'email'=>$request->username
        ]);

        return redirect('home');

    }
}
