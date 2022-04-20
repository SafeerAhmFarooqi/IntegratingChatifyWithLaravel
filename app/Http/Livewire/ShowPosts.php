<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ShowPosts extends Component
{
    use WithFileUploads;

    public $postImage='';
    public $postText='';


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
        $posts= Post::leftjoin('users','users.id','=','posts.user_id')
        ->orderBy('id','desc')
        ->get([
            'posts.*',
            'users.firstname',
            'users.profile_pic'
        ]);
        return view('livewire.show-posts',[
            'posts'=>$posts,
        ]);
    }
}
