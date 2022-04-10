
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
 <img src="{{asset('user_frontend/images/users/user-6.jpg')}}" class="profile-photo-lg">
 <div class="friend-info">
 <a href="{{route('users.show',$user->id)}}" class="pull-right text-green btn btn-default">Profile</a>
 &nbsp; &nbsp;
 <a href="message.php?id=24" class="pull-right text-green btn btn-default"> <i class="icon ion-chatboxes"></i> Chat</a>
 <h5><a href="timeline.html" class="profile-link">{{$user->name}}</a></h5>
 <p> army,</p>
 </div>
 </div>
 </div>
 </div>
 
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
 
 @include('layouts.templatefrontend.footer');
 