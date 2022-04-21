<!DOCTYPE html>
<html lang="en">
	 
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>News Feed | Check what your friends are doing</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="{{asset('user_frontend/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('user_frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('user_frontend/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('user_frontend/css/font-awesome.min.css')}}" />
    <link href="{{asset('user_frontend/css/emoji.css')}}" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
    <style type="text/css">
  .image-upload > input {
  visibility:hidden;
  width:0;
  height:0
}

.heart {
  cursor: pointer;
  height: 50px;
  width: 50px;
  background-image:url( 'https://abs.twimg.com/a/1446542199/img/t1/web_heart_animation.png');
  background-position: left;
  background-repeat:no-repeat;
  background-size:2900%;
}

.heart:hover {
  background-position:right;
}

.is_animating {
  animation: heart-burst .8s steps(28) 1;
}

@keyframes heart-burst {
  from {background-position:left;}
  to { background-position:right;}
}
    </style>
    
    <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
    @livewireStyles
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('user_frontend/images/logo.png')}}" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
               
              <li class="dropdown">
                <a href="index.php"  role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->email }}  </a>
                   
              </li>
              <li class="dropdown">
                <a href="edit-profile.php"  role="button" aria-haspopup="true" aria-expanded="false"> {{ session('status') }}  </a>
                <div> 

                                
                </div>
              </li>
              <li class="dropdown" >
                <form action="{{route('logout')}}" method="post"  enctype="multipart/form-data"> 
                  @csrf 
                <button type="submit" style="background:none:color:#fff;"> logout </button>


                </form>
                
                
              </li>
               
               
            </ul>
            <form class="navbar-form navbar-right hidden-sm" action="{{route('user_search')}}" method="post">
              @csrf
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search peoples" name="search_user">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    @livewireScripts
  </body>
  </html>