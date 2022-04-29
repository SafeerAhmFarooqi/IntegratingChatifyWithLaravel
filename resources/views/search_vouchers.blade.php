
 @include('layouts.templatefrontend.header');
 <style>
   @import url('https://fonts.googleapis.com/css?family=Oswald');
  
 
  
 
 .fl-left {
     float: left
 }
 
 .fl-right {
     float: right
 }
 
 h1 {
     text-transform: uppercase;
     font-weight: 900;
     border-left: 10px solid #27aae1;
     padding-left: 10px;
     margin-bottom: 30px
 }
 
 .row {
     overflow: hidden
 }
 
 .card {
     display: table-row;
     width: 100%;/*
     background-color: #ccc;
     color: #989898;*/
     margin-bottom: 10px;
     font-family: 'Oswald', sans-serif;
     text-transform: uppercase;
     border-radius: 4px;
     position: relative;
     border: 2px solid #27aae1;
 }
 
 .card+.card {
     margin-left: 2%
 }
 
 .date {
     display: table-cell;
     width: 40%;
     position: relative;
     text-align: center;
     border-right: 2px dashed #dadde6
 }
 
 .date:before,
 .date:after {
     content: "";
     display: block;
     width: 30px;
     height: 30px;
     background-color: #27aae1;
     position: absolute;
     top: -15px;
     right: -15px;
     z-index: 1;
     border-radius: 50%
 }
 
 .date:after {
     top: auto;
     bottom: -15px
 }
 
 .date time {
     display: block;
     position: absolute;
     top: 50%;
     left: 50%;
     -webkit-transform: translate(-50%, -50%);
     -ms-transform: translate(-50%, -50%);
     transform: translate(-50%, -50%);
     color: #27aae1;
 }
 
 .date time span {
     display: block
 }
 
 .date time span:first-child {
     color: #27aae1;
     font-weight: 600;
     font-size: 250%
 }
 
 .date time span:last-child {
     text-transform: uppercase;
     font-weight: 600;
     margin-top: 5px
 }
 
 .card-cont {
     display: table-cell;
     width: 75%;
     font-size: 85%;
     padding: 10px 10px 30px 50px
 }
 
 .card-cont h3 {
     color: #3C3C3C;
     font-size: 130%
 }
 .card-cont h2 {
     font-size: 20px;
     font-weight: bold;
 }
 
 .row:last-child .card:last-of-type .card-cont h3 {
     text-decoration: line-through
 }
 
 .card-cont>div {
     display: table-row
 }
 
  
 .card-cont .even-date time,
 .card-cont .even-info p {
     display: table-cell
 }
  
 
 .card-cont .even-info p {
     padding: 30px 50px 0 0
 }
 
 .card-cont .even-date time span {
     display: block
 }
 
 .card-cont1   {
     display: block;
     text-decoration: none;
     width: 80px;
     height: 30px;
     background-color:  #27aae1;
     color: #fff;
     text-align: center;
     line-height: 30px;
     border-radius: 2px;
     position: absolute;
     right: 10px;
     bottom: 10px
 }
 
  
 @media screen and (max-width: 860px) {
     .card {
         display: block;
         float: none;
         width: 100%;
         margin-bottom: 10px
     }
     .card+.card {
         margin-left: 0
     }
     .card-cont .even-date,
     .card-cont .even-info {
         font-size: 75%
     }
 }
 </style>
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

   <section class="col-sm-12 " style="margin-top:50px">
     <h1>Vouchers List </h1>
     <div class="row">
      @foreach($vouchers as $vouchers)
       <article class="card fl-left">
         <section class="date">
           <time datetime="23th feb"><span>{{$vouchers->discount}}</span><span>€</span></time>
         </section>
         <section class="card-cont">
            
           <h2>{{$vouchers->title}}  </h2>
           <p>
             <i class="fa fa-calendar"></i> {{$vouchers->created_at}}
           </p>
            <div class="clearfix"></div>
           <div class="even-info">
             <p>
              <a href="{{route('user_voucher.show',$vouchers->shop_id)}}"><i class="fa fa-shopping-cart"></i> &nbsp; {{$vouchers->shop_name}}</a> 
           </p>
            <div class="clearfix"></div>
           </div>
           <a href="#" class="card-cont1">{{$vouchers->code}}</a>
         </section>
       </article>
       <div class="clearfix"></div>
     @endforeach 
     </div>
   </section>
 
 
 
    
  
 
  </div>
  </div>  
  
  
      </div>
  
        <!-- Newsfeed Common Side Bar Right
        ================================================= -->
       </div>
    </div>
  </div>
  
  @include('layouts.templatefrontend.footer');
  