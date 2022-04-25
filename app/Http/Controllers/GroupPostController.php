<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group_Member;
use App\Models\Group_Post;
use App\Models\Group;
use App\Models\User;


class GroupPostController extends Controller
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
        //
        
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
         $user=Auth::user()->id;

        $model = new Group_Post();
        $model->post_text=$request->post('post_text');
        $model->group_id=$request->post('group_id');
        $model->member_id=$user;
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
         $members=Group_Member::where('group_id',$id)->get();

         return view('group_post', compact('members'));
    }


      public function show_group($id, $name)
    {
    
       // $members=Group_Member::where('group_id',$id)->get();

        // return view('group_post', compact('members','name'));
        $group=Group_Member::where('group_id',$id)->first();
        $membersId=explode(',',$group->member_id);
        $members=[];
       // return print_r($membersId);
        foreach ($membersId as $value) {
            array_push($members,User::where('id',$value)->first());
        }
        return view('group_post_livewire', compact('id','members'));

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
}
