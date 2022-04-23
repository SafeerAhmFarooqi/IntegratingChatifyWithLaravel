{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}





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
            
            <a class="navbar-brand" href="/"><img src="{{asset('user_frontend/images/logo.png')}}" alt="logo" /></a>
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
                
                  @if(session()->has('status'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('status') }}
      </div>
            @endif
@if ($errors->any())
@foreach ($errors->all() as $error)
   <div class="alert alert-danger" role="alert">{{$error}}</div>
@endforeach
@endif
            <div class="reg-form-container"> 
                
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  
                  
                </ul><!--Tabs End-->
              </div>
              
               
                <!--Login-->
                

                <div class="tab-pane" id="login">
                  <h3>Forgot Password</h3>
                  <p class="text-muted">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                  
                  <!--Login Form-->
                  <form  method="POST" action="{{ route('password.email') }}">
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
                        <br><br>

                        <button type="submit" class="btn btn-primary" value="Login Account" class="btn btn-primary">
                                    {{ __('Email Password Reset Link') }}
                                </button>
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

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    


    <!-- Scripts
    ================================================= -->
    <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>    
    <script src="{{asset('user_frontend/js/script.js')}}"></script>


     

<!-- Modal -->




    </body>
 
</html>

