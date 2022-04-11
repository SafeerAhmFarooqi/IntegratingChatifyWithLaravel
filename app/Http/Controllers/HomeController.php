<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $posts= Post::orderBy('id','desc')->get();
        // return view('home', compact('posts'));

         $posts= Post::leftjoin('users','users.id','=','posts.user_id')
                ->orderBy('id','desc')
                ->get([
                    'posts.*',
                    'users.firstname',
                    'users.profile_pic'
                ]);

            return view('home', compact('posts'));
    }
}
