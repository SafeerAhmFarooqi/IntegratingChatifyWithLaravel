<div>
    
    <div class="col-md-6">
        <h5>Group Name : {{$group->group_title}}</h5>
        <!-- Post Create Box
        ================================================= -->
        <div class="create-post">
          <form  wire:submit.prevent="submit" id="postform"  enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group" style="width:100%">
                <!-- <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" /> -->
      
                                            
                      @if(Auth::user()->profile_pic)
                      <img src="{{asset('images/user_profile_pics/'.Auth::user()->profile_pic)}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px" class="profile-photo-md">
                      @else
                      <img src="{{asset('images/user_profile_pics/photoicon.jpg')}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px" class="profile-photo-md">
                      @endif
                   
                  
                <textarea wire:model.defer="postText" rows="2" placeholder="What are you thinking?" id="post_text" class="form-control"></textarea>
                
            </div>
            
                @error('postText') <span class="error" style="color: red">{{ $message }}</span> @enderror
            
            
            </div>
            <div class="col-md-4">
              <div class="tools">
                <ul class="publishing-tools list-inline">
      
      <div class="image-upload">
      <label for="file-input" >
      <img src="https://www.freeiconspng.com/thumbs/no-image-icon/no-image-icon-13.png" style="pointer-events: none;width:30px">
      </label>
      
      <input  type="file" id="file-input" wire:model.defer="postImage" accept="image/png, image/jpeg">
      
      </div>
      
      
      <input type="hidden" name="category" value="police">
      <input type="hidden" name="privacy" value="public">
                  
                </ul>
                
      
                 <button type="submit" class="btn btn-primary pull-right">Publish</button>
                 @error('postImage') <span class="error" style="color: red">{{ $message }}</span> @enderror
              </div>
            </div>
          </div>
        </form>
        <div class="alert alert-success" id="message" style="display:none">
      <strong>Success!</strong> Post Submitted Successfully ! 
      </div>
      <br><br><br>
    </div>
      <div id="post-list">
          @foreach ($posts as $post)
          <div class="post-content">
            <div class="post-container">
                <img src="{{$post->user->profile_pic ?asset('images/user_profile_pics/'.$post->user->profile_pic) : asset('images/user_profile_pics/photoicon.jpg') }}" class="profile-photo-md pull-left">
                <div class="post-detail" id="post-data">
                    <div class="user-info"><h5>
                        <a href="" class="profile-link">{{$post->user->firstname.' '.$post->user->lastname}}</a>
                        <p style="float:right;">
                            <i class="icon ion-ios-calendar-outline"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }} &nbsp; 
                            <i class="icon ion-ios-clock-outline"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('h:i:s') }}
                        </p>
                    </h5>
                </div>
                <div class="post-text">
                    <p>{{$post->post_text}}
                        </p>
                    </div>
                    @if ($post->post_image)
                    <img src="{{$post->post_image ?asset('images/user_post_pics/'.$post->post_image) : asset('images/user_profile_pics/photoicon.jpg') }}" style="width: 100%" />    
                    @endif
               

                    <br>  <br> 
                         <form  wire:submit.prevent="saveComment"   class="form_statusinput">
                    <textarea class="form-control comment" wire:model.defer="commentText" placeholder="write a comment..." rows="2"></textarea>
                    <br>
                    
                     
                    <input type="submit"  class="btn btn-info pull-right" wire:click="currentId({{$post->user->id}},{{$post->id}})">

                </form>


  <div class="clearfix"></div>
              

    
  @foreach ($post->comments as $comment)
  {{-- old commnets starts --}}
{{-- <div class="post-container">
       
  <img src="{{$comment->user->profile_pic ?asset('images/user_profile_pics/'.$comment->user->profile_pic) : asset('images/user_profile_pics/photoicon.jpg') }}" alt="" class="img-circle" class="profile-photo-sm" style="height:40px;min-width:40px;max-width:40px;">

      <p><a href="userprofile.php?id= " class="profile-link">&nbsp;{{$comment->user->firstname.' '.$comment->user->lastname}}</a> {{-- <i class="em em-laughing"></i>  </p>
      <div class="container">{{$comment->comment}}</div>  
      

      
      
      
      
    </div>  --}}
{{-- oold comments end --}}


{{-- new comments start --}}

<div class="post-content">
  <div class="post-container">
      <img src="{{$comment->user->profile_pic ?asset('images/user_profile_pics/'.$comment->user->profile_pic) : asset('images/user_profile_pics/photoicon.jpg') }}" class="profile-photo-md pull-left">
      <div class="post-detail" id="post-data">
          <div class="user-info"><h5>
              <a href="" class="profile-link">{{$comment->user->firstname.' '.$comment->user->lastname}}</a>
              
          </h5>
      </div>
      <div class="post-text">
          <p>{{$comment->comment}}
              </p>
          </div>
  </div>          
</div>
</div> 



{{-- new comments end --}}
























    
    @endforeach
  



            </div>          
        </div>
      </div> 
          @endforeach
       


    </div>
      </div>
    </div>
