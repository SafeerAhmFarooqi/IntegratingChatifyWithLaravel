
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
 <div class="friend-card">
 <h3>Total Savings: {{$t_savings}}</h3>
 <table border="1" width="100%">
   <tr>
     <td>Title</td>
     <td>Code</td>
     <td>Discount</td>
     <td>Shop ID</td>
   </tr>
 
  @foreach($use_vouchers as $use_vouchers) 
   <tr>
     <td>{{$use_vouchers->title}}</td>
     <td>{{$use_vouchers->code}}</td>
     <td>{{$use_vouchers->discount}}</td>
     <td>{{$use_vouchers->shop_id}}</td>
   </tr>
  @endforeach
 
 </table>
 </div>
 </div>
 
 
 
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
 