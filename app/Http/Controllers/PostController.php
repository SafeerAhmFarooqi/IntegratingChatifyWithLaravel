<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;

class PostController extends Controller
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
       //   $posts = Post::all();
       // return response()->json([
       //  'posts'=>$posts,
       // ]);

       $posts= Post::leftjoin('users','users.id','=','posts.user_id')
                ->orderBy('id','desc')
                ->get([
                    'posts.*',
                    'users.firstname',
                    'users.profile_pic'
                ]);
           
         return response()->json([
        'posts'=>$posts,
       ]);       


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
         //return $request->post();
        if($request->hasFile('post_image')){ 
           $file=$request->post->file('post_image');
           $filename= $file->getClientOriginalName();
           $filename= time(). '.' .$filename;
           $file->storeAs('user_post_pics',$filename);

            $pic=$filename;
        }else
        {
            $pic='null';
        }

        $user=Auth::user()->id;

        $model = new Post();
        $model->post_text=$request->post('post_text');
        $model->user_id=$user;
        $model->post_image=$pic;
        $model->save();
        return["msg"=>"Post Submitted It Take 5 - 10 Seconds for Appear ! "];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Post::find($id)->delete();

        return redirect('home');
    }
}
