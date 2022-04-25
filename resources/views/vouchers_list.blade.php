
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

  
   
  <div class="col-md-6 col-sm-6">
    @foreach($vouchers as $vouchers)
 <div class="friend-card">
 <img src="{{asset('storage/shop_vouchers/'.$vouchers->image)}}" alt="profile-cover" class="img-responsive cover">
 <div class="card-info">  
 <div class="friend-info"> 
 &nbsp; &nbsp;
 <h5><a href="#" class="profile-link">{{$vouchers->title}} </a></h5>
 <a href="#" class="pull-right text-green btn btn-default"> {{$vouchers->code}}</a>
     <br>
     
 </div>
 </div>
 </div>

 @endforeach
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
 