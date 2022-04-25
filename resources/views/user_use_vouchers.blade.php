
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
 
 

 <h3>Total Savings: {{$t_savings}}</h3>

 
@foreach($use_vouchers as $use_vouchers) 
   <div class="col-md-6 col-sm-6">
 <div class="friend-card">
 <img src="{{asset('storage/shop_vouchers/'.$use_vouchers->image)}}" alt="profile-cover" class="img-responsive cover">
 <div class="card-info">  
 <div class="friend-info"> 
 &nbsp; &nbsp;
 <h5><a href="#" class="profile-link">{{$use_vouchers->title}} </a>

  <p class="pull-right"> {{$use_vouchers->created_at}}</p>
 </h5>
<p>{{$use_vouchers->shop_name}}
 <a href="#" class="pull-right text-green btn btn-default"> {{$use_vouchers->code}}</a>
    </p>
     <br>
     
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
 