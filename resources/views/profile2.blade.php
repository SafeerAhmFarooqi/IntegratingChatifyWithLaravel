<!DOCTYPE html>
<html lang="en">
<head>
  <title>News Feed | Check what your friends are doing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{asset('user_frontend/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('user_frontend/css/style.css')}}" />
<link rel="stylesheet" href="{{asset('user_frontend/css/ionicons.min.css')}}" />
<link rel="stylesheet" href="{{asset('user_frontend/css/font-awesome.min.css')}}" />
<link href="{{asset('user_frontend/css/emoji.css')}}" rel="stylesheet">
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script> --}}
  <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> --}}
  
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script> 

</head>
<body>

 

<div class="container">
    <!-- Timeline
    ================================================= -->
    <div class="timeline">
    <div class="timeline-cover">
    <!--Timeline Menu for Large Screens-->
    <div class="timeline-nav-bar hidden-sm hidden-xs">
    <div class="row">
    <div class="col-md-3">
    <div class="profile-info">
    <!-- <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo"> -->
    @if($data->profile_pic)
    <img src="{{asset('storage/user_profile_pics/'.$data->profile_pic)}}" class="img-responsive profile-photo">
    @else
    <img src="{{asset('storage/user_profile_pics/photoicon.jpg')}}" class="img-responsive profile-photo">
    @endif
    
    <h3 style="font-weight: bold !important">{{Auth::user()->firstname}}</h3>
    <p class="text-muted">{{Auth::user()->email}}</p>
    </div>
    </div>
    <div class="col-md-9">
    <ul class="list-inline profile-menu">
    <li><a href="{{route('home')}}">Home</a></li>
    <li><a href="{{route('profile.index')}}">Basic Information</a></li>
    <li><a href="{{route('profile.edit',Auth::user()->id)}}" >Profile Image</a></li>
    <!--<li><a href="timeline-album.html">Album</a></li>
    <li><a href="timeline-friends.html">Friends</a></li> -->
    </ul>
    <ul class="follow-me list-inline">
    <!-- <li>1,299 people following her</li>
    <li><button class="btn-primary">Add Friend</button></li> -->
    </ul>
    </div>
    </div>
    </div><!--Timeline Menu for Large Screens End-->
    <!--Timeline Menu for Small Screens-->
    <div class="navbar-mobile hidden-lg hidden-md">
    <div class="profile-info">
    
    <img src="images/users/user-1.jpg" alt="" class="img-responsive profile-photo">
    <h4>Sarah Cruiz</h4>
    <p class="text-muted">Creative Director</p>
    </div>
    <div class="mobile-menu">
    <ul class="list-inline">
    <li><a href="timline.html">Timeline</a></li>
    <li><a href="timeline-about.html" class="active">About</a></li>
    <li><a href="timeline-album.html">Album</a></li>
    <li><a href="timeline-friends.html">Friends</a></li>
    </ul>
    <button class="btn-primary">Add Friend</button>
    </div>
    </div><!--Timeline Menu for Small Screens End-->
    </div>
    <div id="page-contents" style="position: relative;">
    <div class="row">
    <div class="col-md-3">
    <!--Edit Profile Menu-->
    <ul class="edit-menu">
    <!-- <li><i class="icon ion-ios-information-outline"></i><a href="edit-profile-basic.html">Basic Information</a></li> -->
    <li class="active"><i class="icon ion-ios-briefcase-outline"></i><a href="{{route('profile.index')}}">Basic Information</a></li>
    <li><i class="icon ion-ios-heart-outline"></i><a href="{{route('profile.edit',Auth::user()->id)}}">Profile Image</a></li>
    <li><i class="icon ion-ios-locked-outline"></i><a href="{{route('profile.show',Auth::user()->id)}}">Privacy</a></li>
    <!-- <li><i class="icon ion-ios-settings"></i><a href="edit-profile-settings.html">Account Settings</a></li>
    <li><i class="icon ion-ios-locked-outline"></i><a href="edit-profile-password.html">Change Password</a></li> -->
    </ul>
    </div>
    <div class="col-md-7">
    <!-- Edit Work and Education
    ================================================= -->
    <div class="edit-profile-container">
    <div class="block-title">
    <h4 class="grey"><i class="icon ion-ios-book-outline"></i>My Information</h4>
    <div class="line"></div>
    <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
    <!-- <div class="line"></div> -->
    </div>
    <div class="edit-block">
    <form name="education" id="education" class="form-group" style="margin-top:30px" action="{{route('profile.update',$data->id)}}" method="POST">
    
        @csrf
        @method('PUT')
    <div class="row">
    <div class="form-group col-xs-6">
    <label for="date-from">Username</label>
    <input id="date-from" class="form-control input-group-lg" type="text" name="email" placeholder="asad6351" value="{{$data->email}}">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-xs-6">
    <label for="date-from">First Name</label>
    <input id="date-from" class="form-control input-group-lg" type="text" name="firstname" placeholder="Muhammad" value="{{$data->firstname}}">
    </div>
    <div class="form-group col-xs-6">
    <label for="date-to" class="">Last Name</label>
    <input id="date-to" class="form-control input-group-lg" type="text" name="lastname" placeholder="Asad" value="{{$data->lastname}}">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-xs-12">
    <label for="school">Geburtsdatum</label>
    <input id="school" class="form-control input-group-lg" type="text" name="dob" placeholder="12-10-2012" value="{{$data->dob}}">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-xs-12">
    <label for="school">Address</label>
    {{-- <input id="school" class="form-control input-group-lg" type="text" name="address" placeholder="" value="{{$data->address}}"> --}}
    <input type="text" class="form-control input-group-lg" name="address" placeholder="Enter your address" value="{{$data->address?$data->address : ''}}" id="myAddress"/>



    <script type="text/javascript">
        var searchInput = 'myAddress';
        
            $(document).ready(function () {
                var autocomplete;
                autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                    types: ['geocode']
                   
                });
            
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                    var near_place = autocomplete.getPlace();
                });
            });
    </script>    
</div>
    </div>
    <div class="row">
    <div class="form-group col-xs-12">
    <label for="school">Phone</label>
    <input id="school" class="form-control input-group-lg" type="text" name="phone" placeholder="" value="{{$data->phone}}">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-xs-12">
    <label for="edu-description">Info</label>
    <textarea id="edu-description" name="about" class="form-control" rows="4" cols="400">{{$data->about}}</textarea>
    </div>
    </div>
    <input type="submit" name="submitgernalsettings" class="btn btn-primary" value="Save Changes">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @include('layouts.templatefrontend.footer')
</body>

</html>
