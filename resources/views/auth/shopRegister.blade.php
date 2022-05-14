<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/auth.css')}}">
    <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script> 
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="/"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Register.</h1>
            <p class="auth-subtitle mb-5"><!-- Log in with your data that you entered during registration. --></p>

            <form action="{{route('Shop.register')}}" method="POST">
                @csrf

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="ShopName" name="shop_name" value="{{old('shop_name')}}">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <span>@error('shop_name')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="address" class="form-control form-control-xl" placeholder="Address"  id="myAddress" value="{{old('address')}}"/>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <span>@error('address')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
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
                <div class="form-group position-relative has-icon-left mb-4">
                    <select class="form-control form-control-xl" name="shop_category" >
                        <option value="">Select Category</option>
                        <option value="electronics">Electronics</option>
                        @foreach($category as $category)
                        <option value="{{$category->category}}">{{$category->category}}</option>
                        
                        @endforeach
                    </select>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <span>@error('shop_category')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <select class="form-control form-control-xl" name="sub_category" >
                        <option value="">Select Sub Category</option>
                        <option value="mobiles">Mobiles</option>
                        @foreach($sub_category as $sub_category)
                        <option value="{{$sub_category->sub_category}}">{{$sub_category->sub_category}}</option>
                        
                        @endforeach
                    </select>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <span>@error('sub_category')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Phone" name="phone" value="{{old('phone')}}">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <span>@error('phone')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <select class="form-control form-control-xl" name="location">
                        <option value="">Select City</option>
                        <option value="lahore">Lahore</option>
                        @foreach($location as $location)
                        <option value="{{$location->location}}">{{$location->location}}</option>
                        @endforeach
                    </select>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <span>@error('location')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
                </div>
                 <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Email" name="email" value="{{old('email')}}">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    <span>@error('email')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <span>@error('password')
                        <div style="color: red">{{ $message }}</div>
                    @enderror</span>
                </div>
               
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Register</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600"><a href="{{route('Shop.login')}}" class="font-bold">Sign
                        in</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>
