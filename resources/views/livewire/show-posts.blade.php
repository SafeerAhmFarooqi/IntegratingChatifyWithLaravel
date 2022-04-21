<div>
    <div class="col-md-6">

        <!-- Post Create Box
        ================================================= -->
        <div class="create-post">
          <form  wire:submit.prevent="submit" id="postform"  enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group" style="width:100%">
                <!-- <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" /> -->
      
                                            
                      @if(Auth::user()->profile_pic)
                      <img src="{{asset('images/user_profile_pics/'.Auth::user()->profile_pic)}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px"" class="profile-photo-md">
                      @else
                      <img src="{{asset('images/user_profile_pics/photoicon.jpg')}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px"" class="profile-photo-md">
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
                <img src="{{Auth::user()->profile_pic ?asset('images/user_profile_pics/'.Auth::user()->profile_pic) : asset('images/user_profile_pics/photoicon.jpg') }}" class="profile-photo-md pull-left">
                <div class="post-detail" id="post-data">
                    <div class="user-info"><h5>
                        <a href="" class="profile-link">{{Auth::user()->firstname}}</a>
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
                </div>
                @if ($post->post_image)
            <img src="{{asset('images/user_post_pics/'.$post->post_image)}}" style="width: 100px;" />    
            @endif
            </div>
            
            
        </div>
          @endforeach
       


    </div>
      </div>
    </div>