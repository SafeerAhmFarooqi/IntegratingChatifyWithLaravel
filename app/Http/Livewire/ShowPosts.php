<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class ShowPosts extends Component
{
    use WithFileUploads;

    public $postImage='';
    public $postText='';
    public $commentText='';
    public $currentPostId=0;
    public $currentUserId=0;

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
         $model->post_image=$pic;
         $model->save();
         $this->postImage='';
         $this->postText='';
    }
    public function render()
    {
        // $posts= Post::leftjoin('users','users.id','=','posts.user_id')
        // ->orderBy('id','desc')
        // ->get([
        //     'posts.*',
        //     'users.firstname',
        //     'users.lastname',
        //     'users.id as userId',
        //     'users.profile_pic'
        // ]);

        $posts= Post::with(['comments' => function ($query) {
            $query->with('user')
            ->orderBy('id', 'desc');
        }])
        ->with('user')
        ->orderBy('id','desc')
        ->get();

        return view('livewire.show-posts',[
            'posts'=>$posts,
        ]);
    }

    public function saveComment()
    {
        $this->validate([
            'commentText' => 'required',
        ]);

        $model=new Comments();
        $model->user_id=$this->currentUserId; 
        $model->post_id=$this->currentPostId; 
        $model->comment=$this->commentText;
         $model->save();
         $this->currentUserId=0;
         $this->currentPostId=0;
         $this->commentText='';
    }
}
