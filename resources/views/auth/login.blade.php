
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta http-equiv="content-type" content="text/html; charset=utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="This is social network html5 template available in themeforest......" />
         <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
         <meta name="robots" content="index, follow" />
         <title>Friend Finder | A Complete Social Network Template</title>
 
     <!-- Stylesheets
     ================================================= -->
         <link rel="stylesheet" href="{{asset('user_frontend/css/bootstrap.min.css')}}" />
         <link rel="stylesheet" href="{{asset('user_frontend/css/style.css')}}" />
         <link rel="stylesheet" href="{{asset('user_frontend/css/ionicons.min.css')}}" />
     <link rel="stylesheet" href="{{asset('user_frontend/css/font-awesome.min.css')}}" />
     
     <!--Google Font-->
     <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
     
     <!--Favicon-->
     <link rel="shortcut icon" type="{{asset('user_frontend/image/png')}}" href="{{asset('user_frontend/images/fav.png')}}"/>
     <style>
 strong{
     color:red;
 } </style>	
 </head>
     <body>
 
     <!-- Header
     ================================================= -->
         <header id="header-inverse">
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
             <a class="navbar-brand" href="index.php"><img src="{{asset('user_frontend/images/logo.png')}}" alt="logo" /></a>
           </div>
  
         </div><!-- /.container -->
       </nav>
     </header>
     <!--Header End-->
     
     <!-- Landing Page Contents
     ================================================= -->
     <div id="lp-register">
         <div class="container wrapper">
         <div class="row">
             <div class="col-sm-5">
             <div class="intro-texts">
                 <h1 class="text-white">Make Cool Friends !!!</h1>
                 <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
               <button class="btn btn-primary">Learn More</button>
             </div>
           </div>
             <div class="col-sm-6 col-sm-offset-1">
             <div class="reg-form-container"> 
             
               <!-- Register/Login Tabs-->
               <div class="reg-options">
                 <ul class="nav nav-tabs">
                   
                   
                 </ul><!--Tabs End-->
               </div>
               
                
                 <!--Login-->
                 <div class="tab-pane" id="login">
                   <h3>Login</h3>
                   <p class="text-muted">Log into your account</p>
                   
                   <!--Login Form-->
                   <form  method="POST" action="{{ route('login') }}">
                   @csrf
                      <div class="row">
                       <div class="form-group col-xs-12">
                         <label for="my-email" class="sr-only">Email</label>
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Your Email"/>
                         @error('email')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror  
                     </div>
                     </div>
                     <div class="row">
                       <div class="form-group col-xs-12">
                         <label for="my-password" class="sr-only">Password</label>
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                         @error('password')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                 @enderror  
                     </div>
                         <br><br>
 
                         <button type="submit" class="btn btn-primary" value="Login Account" class="btn btn-primary">
                                     {{ __('Login') }}
                                 </button>
                                 @if (Route::has('password.request'))
                                     <a class="btn btn-link" href="{{ route('password.request') }}">
                                         {{ __('Forgot Your Password?') }}
                                     </a>
                                 @endif
                                 <a href="register" class="btn btn-link">Register New account?</a>
                     </div>
                   </form><!--Login Form Ends--> </div>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-sm-6 col-sm-offset-6">
           
             <!--Social Icons-->
             <ul class="list-inline social-icons">
               <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
               <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
               <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
               <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
               <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
 
     <!--preloader-->
     <div id="spinner-wrapper">
       <div class="spinner"></div>
     </div>
     
 
 
     <!-- Scripts
     ================================================= -->
     <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
     <script src="{{asset('user_frontend/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('user_frontend/js/jquery.appear.min.js')}}"></script>
         <script src="{{asset('user_frontend/js/jquery.incremental-counter.js')}}"></script>
     <script src="{{asset('user_frontend/js/script.js')}}"></script>
 
 
      <script type="text/javascript">
            $(function() {
            $('.login').click();
         });
       </script>
 
 <!-- Modal -->
 <div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
 
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Change Password Request</h4>
       </div>
       <div class="modal-body">
         <form name="Login_form" id="Login_form" action="" method="post">
                      <div class="row">
                       <div class="form-group col-xs-12">
                         <p> after reset your password make sure you change your password after login your account..
                         </p>
                         <label for="my-email" class="sr-only">Email</label>
                         <input id="my-email" class="form-control col-sm-6 input-group-lg" type="text" name="email" title="Enter Email" placeholder="Your Email" style="border-radius: 5px;width:50% !important">
                       </div>
                     </div>
                     <div class="row">
                      
                         
                        <input type="submit" name="passwordrequest" value="Login Account" class="btn btn-primary" style="margin:10px;border-radius:5px">
 
                     </div>
                   </form>
 
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
 
   </div>
 </div>
 
 
 
     </body>
  
 </html>
 