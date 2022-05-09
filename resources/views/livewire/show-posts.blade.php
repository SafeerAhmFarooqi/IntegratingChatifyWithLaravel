<div wire:poll.100ms>
  <div class="col-md-6">

      <!-- Post Create Box
      ================================================= -->
      <div class="create-post">
        <div>
          <form  wire:submit.prevent="submit" id="postform"  enctype="multipart/form-data">
            {{-- @if ($postImage)
            Photo Preview:
            <img src="{{ $postImage->temporaryUrl() }}" style="width: 100%">
        @endif --}}
            <div class="row">
              <div class="col-md-8">
                <div class="form-group" style="width:100%">
                  <!-- <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" /> -->
        
                                              
                        @if(Auth::user()->profile_pic)
                        <img src="{{asset('storage/user_profile_pics/'.Auth::user()->profile_pic)}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px" class="profile-photo-md">
                        @else
                        <img src="{{asset('storage/user_profile_pics/photoicon.jpg')}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px" class="profile-photo-md">
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
        <img src="{{asset('assets/upload.png')}}" style="pointer-events: none;width:30px">
        </label>
        <input  type="file" id="file-input" wire:model="postImage">
        
        
        </div>
        
        
        
                    
                  </ul>
                  
        
                   <button type="submit" class="btn btn-primary pull-right"  id="publish">Publish</button>
                   @error('postImage') <span class="error" style="color: red">{{ $message }}</span> @enderror
                </div>
                
                <div>
                  <script>
                      // $(document).ready(function(){
                      //     @this.name="Farooqi";
                      // });
              
                    
              
              
                   window.addEventListener('livewire-upload-start', event => {
                       // alert("Upload Started");
                       document.getElementById("publish").disabled = true;
                   
              })
              </script>     
                  </div>  

                  <div>
                    <script>
                        // $(document).ready(function(){
                        //     @this.name="Farooqi";
                        // });
                
                      
                
                
                     window.addEventListener('livewire-upload-finish', event => {
                         // alert("Upload Finished");
                         document.getElementById("publish").disabled = false;
                     
                })
                </script>     
                    </div>  

              </div>
            </div>
          </form>
        </div>
      <div class="alert alert-success" id="message" style="display:none">
    <strong>Success!</strong> Post Submitted Successfully ! 
    </div>
    <div class="row">
      <div wire:loading wire:target="postImage">  <h5>Image Uploading...</h5></div>
    </div>
    <br><br><br>
  </div>
  
    <div id="post-list">
        @foreach ($posts as $post)
        <div class="post-content">
          <div class="post-container">
              <img src="{{$post->user->profile_pic ?asset('storage/user_profile_pics/'.$post->user->profile_pic) : asset('storage/user_profile_pics/photoicon.jpg') }}" class="profile-photo-md pull-left">
              <div class="post-detail" id="post-data">
                  <div class="user-info"><h5>
                      <a href="{{$post->user->id==Auth::user()->id?route('profile.index') : route('users.show',$post->user->id)}}" class="profile-link">{{$post->user->firstname.' '.$post->user->lastname}}</a>
                      <p style="float:right;">
                          <i class="icon ion-ios-calendar-outline"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }} &nbsp; 
                          <i class="icon ion-ios-clock-outline"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('h:i:s') }}
                      </p>
                  </h5>
              </div>
              <div class="row">
                
                    {{$post->post_text}}
                    @if (Auth::user()->id==$post->user_id)
                    <a href="javascript:;" wire:click="selectPostId({{$post->id}})" style="float: right" data-toggle="modal" data-target="#fullHeightModalRight"><i class="icon ion-ios-trash-outline"></i></a>    
                    @endif    
              </div>
              
                  @if ($post->post_image)
                  <img src="{{$post->post_image ?asset('storage/user_post_pics/'.$post->post_image) : asset('storage/user_profile_pics/photoicon.jpg') }}" style="width: 100%" />    
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
     
<img src="{{$comment->user->profile_pic ?asset('storage/user_profile_pics/'.$comment->user->profile_pic) : asset('storage/user_profile_pics/photoicon.jpg') }}" alt="" class="img-circle" class="profile-photo-sm" style="height:40px;min-width:40px;max-width:40px;">

    <p><a href="userprofile.php?id= " class="profile-link">&nbsp;{{$comment->user->firstname.' '.$comment->user->lastname}}</a> {{-- <i class="em em-laughing"></i>  </p>
    <div class="container">{{$comment->comment}}</div>  
    

    
    
    
    
  </div>  --}}
{{-- oold comments end --}}


{{-- new comments start --}}

<div class="post-content">
<div class="post-container">
    <img src="{{$comment->user->profile_pic ?asset('storage/user_profile_pics/'.$comment->user->profile_pic) : asset('storage/user_profile_pics/photoicon.jpg') }}" class="profile-photo-md pull-left">
    <div class="post-detail" id="post-data">
        <div class="user-info"><h5>
            <a href="" class="profile-link">{{$comment->user->firstname.' '.$comment->user->lastname}}</a>
            
        </h5>
    </div>
    <div class="post-text">
        <p>{{$comment->comment}} 
          @if (Auth::user()->id==$comment->user_id)
          <a href="javascript:;" wire:click="selectCommentId({{$comment->id}})" style="float: right" data-toggle="modal" data-target="#fullHeightModalRightComments"><i class="icon ion-ios-trash-outline"></i></a>    
          @endif
          
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
        <div
  x-data="{
      observe () {
          let observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                  if (entry.isIntersecting) {
                      @this.call('loadMore')
                  }
              })
          }, {
              root: null
          })

          observer.observe(this.$el)
      }
  }"
  x-init="observe"
></div>

        {{-- @if($posts->hasMorePages())
        <button wire:click.prevent="loadMore">Load more</button>
    @endif --}}
     


  </div>
    </div>
    {{-- <div>
      <script>
        window.addEventListener('initSomething', event => {
          //alert("Hello! I am an alert box!");
          
})
      </script>

    </div> --}}
    <div>
      <div class="modal fade" id="fullHeightModalRight" tabindex="-1"  aria-hidden="true" wire:ignore.self>
 <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
 <div class="modal-dialog modal-full-height modal-right" role="document">
 <div class="modal-content">
 <div class="modal-header">
 <h4 class="modal-title w-100" id="myModalLabel">Delete Post</h4>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
 <span aria-hidden="true">×</span>
 </button>
 </div>
 <div class="modal-body">
 <h5>Are you sure you want to delete this post?</h5>
 
 </div>
 <div class="modal-footer justify-content-center">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
 <button type="button" class="btn btn-primary" wire:click="deletePost" data-dismiss="modal">Delete</button>
 </div>
 
 </div>
 </div>
 </div>
    </div>

    <div>
      <div class="modal fade" id="fullHeightModalRightComments" tabindex="-1"  aria-hidden="true" wire:ignore.self>
        <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
        <div class="modal-dialog modal-full-height modal-right" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Delete Comment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">
        <h5>Are you sure you want to delete this comment?</h5>
        
        </div>
        <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" wire:click="deleteComment" data-dismiss="modal">Delete</button>
        </div>
        
        </div>
        </div>
        </div>
    </div>
  </div>
