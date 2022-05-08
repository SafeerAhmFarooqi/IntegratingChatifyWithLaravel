
 @include('layouts.templatefrontend.header');

 <div id="page-contents">
   <div class="container">
     <div class="row">
 
       <!-- Newsfeed Common Side Bar Left
       ================================================= -->
       @include('layouts.templatefrontend.leftsidebar');
     <div id="newsfeed">
 
 <div class="col-md-9">
 <!-- Friend List
 ================================================= -->
 <div class="friend-list">
 
 @foreach($users as $user)
 <div class="col-md-6 col-sm-6">
 <div class="friend-card">
 <img src="{{asset('user_frontend/images/covers/1.jpg')}}" alt="profile-cover" class="img-responsive cover">
 <div class="card-info">
 
 @if($user->profile_pic)    
 <img src="{{asset('storage/user_profile_pics/'.$user->profile_pic)}}" class="profile-photo-lg">
 @else
 <img src="{{asset('storage/user_profile_pics/photoicon.jpg')}}" class="profile-photo-lg">
 @endif
 
 <div class="friend-info">
 <a href="{{route('users.show',$user->id)}}" class="pull-right text-green btn btn-default">Profile</a>
 &nbsp; &nbsp;
 <a href="#" onclick="openForm({{$user->id}})" class="pull-right text-green btn btn-default"> <i class="icon ion-chatboxes"></i> Chat</a>
 {{-- <a href="{{config('chatify.routes.prefix')}}/{{$user->id}}" class="pull-right text-green btn btn-default" onclick="closeForm()"> <i class="icon ion-chatboxes"></i> Chat</a> --}}
 <h5><a href="{{route('users.show',$user->id)}}" class="profile-link">{{$user->firstname.' '.$user->lastname}}</a></h5>
 <p> 
   @foreach ($user->options as $option)
       {{$option.','}}
   @endforeach
 </p>
 </div>
 </div>
 </div>
 </div>
 

 <div class="chat-popup" id="myForm_{{$user->id}}">
  <div style="height: 100%;">
    <iframe style="height: 100%;" src="{{config('chatify.routes.prefix')}}/{{$user->id}}" title="YouTube video" allowfullscreen></iframe>
    
  </div>
  <a href="#" class="btn btn-primary" style="margin: 10px 20px;" onclick="closeForm({{$user->id}})">Close Chat</a>
</div>

<script>
  function openForm(id) {
    polls = document.querySelectorAll('[id ^= "myForm_"]');
    Array.prototype.forEach.call(polls, callback);
    function callback(element, iterator) {
      document.getElementById(element.id).style.display = "none";
}
    // if(document.getElementByClassName("chat-popup").style.display = "none")
    // {
    //   alert('open');
    // }
    if(document.getElementById('myForm_'+id).offsetTop == 0)
    {
      document.getElementById('myForm_'+id).style.display = "block";
    }
    else
    {
      document.getElementById('myForm_'+id).style.display = "none";
    }
  }
  
  function closeForm(id) {
    document.getElementById('myForm_'+id).style.display = "none";
  }
  </script>
 @endforeach
 
 </div>
 </div>
 </div>
 </div>  
 
 
     </div>
 
       <!-- Newsfeed Common Side Bar Right
       ================================================= -->
      </div>
   </div>
 </div>

<style>
  .chat-popup {
  display: none;
  position: fixed;
  bottom: 50px;
  right: 25px;
  border: 3px solid #f1f1f1;
  height: 50%;
  z-index: 9;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
     </style>
    
 @include('layouts.templatefrontend.footer')

 @section('style')
    
 @endsection
 