<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post;
use App\Models\Comments;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class GroupChat extends Component
{
    use WithFileUploads;

    public $postImage='';
    public $postText='';
    public $commentText='';
    public $currentPostId=0;
    public $currentUserId=0;
    public $groupId=0;

    public function currentId($userId,$postId)
    {
        $this->currentUserId=$userId;
        $this->currentPostId=$postId;
    }


    public function submit()
    {
        $this->validate([
            'postImage' => 'image|max:1024', // 1MB Max
            'postText' => 'required',
        ]);

        if($this->postImage)
        {
            $file=$this->postImage;
            $filename= $file->getClientOriginalName();
            $filename= time(). '.' .$filename;
            $file->storeAs('user_post_pics',$filename);
 
             $pic=$filename;
            
        }
        else{
            $pic=null;
        }
 
         $user=Auth::user()->id;
 
         $model = new Post();
         $model->post_text=$this->postText;
         $model->user_id=$user;
         $model->group_id=$this->groupId;
         $model->post_image=$pic;
         $model->save();
         $this->postImage='';
         $this->postText='';
    }


    public function render()
    {
        $posts= Post::with(['comments' => function ($query) {
            $query->with('user')
            ->orderBy('id', 'desc');
        }])
        ->with('user')
        ->where('group_id',$this->groupId)
        ->orderBy('id','desc')
        ->get();
        $group=Group::find($this->groupId);
        return view('livewire.group-chat',[
            'posts'=>$posts,
            'group'=>$group,
        ]);
    }
}
