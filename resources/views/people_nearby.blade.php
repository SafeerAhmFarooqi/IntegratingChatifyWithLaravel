
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
 
 
 <!--  <div class="create-post">
               <form  id="postform"  enctype="multipart/form-data">
               @csrf
               <div class="row">
                 <div class="col-md-8">
               
                     <input type="text" id="long" name="long" value="">
                     <input type="text" id="lat" name="lat" value="">
                     <input type="submit" name="submit" id="post_sub_btn" class="btn btn-primary pull-right" value="Publish">
 
                 </div>
               </div>
             </form>
             <div class="alert alert-success" id="message" style="display:none">
   <strong>Success!</strong> Post Submitted Successfully ! 
 </div> -->

<!--  <a href="{{route('people_nearby.show',1)}}">Test</a> -->


 @foreach($users as $user)
 <div class="col-md-6 col-sm-6">
 <div class="friend-card">
 <img src="{{asset('user_frontend/images/covers/1.jpg')}}" alt="profile-cover" class="img-responsive cover">
 <div class="card-info">
 
 @if($user->profile_pic)    
 <img src="{{asset('storage/images/user_profile_pics/'.$user->profile_pic)}}" class="profile-photo-lg">
 @else
 <img src="{{asset('storage/images/user_profile_pics/photoicon.jpg')}}" class="profile-photo-lg">
 @endif
 
 <div class="friend-info">
 <a href="{{route('users.show',$user->id)}}" class="pull-right text-green btn btn-default">Profile</a>
 &nbsp; &nbsp;
 <a href="{{config('chatify.routes.prefix')}}/{{$user->id}}" class="pull-right text-green btn btn-default"> <i class="icon ion-chatboxes"></i> Chat</a>
 <h5><a href="timeline.html" class="profile-link">{{$user->firstname}}</a></h5>
 <?php 
$mylat=Auth::user()->latitude;
$mylong=Auth::user()->longitude;

$pi80 = M_PI / 180;
  $mylat *= $pi80;
  $mylat1=$mylat;
    $mylong *= $pi80;
    $mylong1 =$mylong;
 
    $userlat= $user->latitude;

 $userlon=$user->longitude;
   
 $mylat;
   $mylong;
   


    $userlat *= $pi80;
    $userlon *= $pi80;
error_reporting(0);
ini_set('display_errors', 0);

    $r = 6372.797; 
    $dlat = $userlat - $mylat1;
    $dlon = $userlon - $mylong1;
    $a = sin($dlat / 2) * sin($dlat / 2) + cos($mylat1) * cos($userlat) * sin($dlon / 2) * sin($dlon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
     $GLOBALS['km'] = (int)$km = $r * $c;
    
 ?>
 <p> army,</p>
  <p>{{round($km,2)}} km away</p>
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
  <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
 
 <script>
 var x = document.getElementById("demo");
 
  window.onload = function(e){ 
     
        if (navigator.geolocation) {
     navigator.geolocation.getCurrentPosition(showPosition);
   } else { 
     x.innerHTML = "Geolocation is not supported by this browser.";
   }
 }
 
 function showPosition(position) {
   document.getElementById("long").value= position.coords.longitude;
   document.getElementById("lat").value=position.coords.latitude;
 
   
     }
 
 </script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
 <script
     src=//code.jquery.com/jquery-3.5.1.min.js
     integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
     crossorigin=anonymous></script>
     
      <script type="text/javascript">
 
       $(document).ready(function() {
 
     
 
   
       //jQuery('#message').html('disabled', true);
       $("#postform").submit(function(e){
       
           e.preventDefault();
           jQuery('#post_sub_btn').attr('disabled', true);
         jQuery.ajax({
           url:"{{route('people_nearby.update',1)}}",
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           data:jQuery('#postform').serialize(),
           type:'PUT',
           success:function(result){
             jQuery('#message').html(result.msg);
             jQuery('#post_sub_btn').attr('disabled', false);
            // jQuery('#message').attr('disabled', true);
            $("#message").show();
            $("#message").delay(10000).hide(0);
            
 
             fetchpost();
 
           }
 
           });
 
 
       });
 
       });
 
 
   
 
 
       
 </script>
 
 