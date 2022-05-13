<div>
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
    
     
                
     <div class="form-group col-sm-3">
       <label for="sel1">Select City :</label>
       <select class="form-control" id="sel1" name="location" wire:model='selectCity'>
         <option value="">Select</option>
         @foreach($location as $location)
         <option value="{{$location->location}}">{{$location->location}}</option> 
         @endforeach
       </select>
     </div>
     
     
     <div class="form-group col-sm-3">
       <label for="sel1">Select Category :</label>
       <select class="form-control" id="sel1" name="shop_category" wire:model='selectCategory'>
         <option value="">Select</option> 
         @foreach($category as $category)
         <option value="{{$category->category}}">{{$category->category}}</option> 
         @endforeach
       </select>
     </div>
     
     
     <div class="form-group col-sm-3">
       <label for="sel1">Select Sub Category :</label>
       <select class="form-control" id="sel1" name="sub_category" wire:model='selectSubCategory'>
         <option value="">Select</option> 
         @foreach($sub_category as $sub_category)
         <option value="{{$sub_category->sub_category}}">{{$sub_category->sub_category}}</option> 
         @endforeach
       </select>
     </div>
    
    
     
     
    
     
       <section class="col-sm-12 " style="margin-top:50px">
         <h1>Vouchers List </h1>
         @if (count($vouchers)>0)
         <h5>Showing Results ({{count($vouchers)}})</h5>    
         @endif
         
         <div class="row">
           @if (count($vouchers)>0)
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
               <p>{{$vouchers->location}}</p>
               <a href="#" class="card-cont1">{{$vouchers->code}}</a>
               
             </section>
           </article>
           <div class="clearfix"></div>
         @endforeach     
           @else
               <h5>No Results Found.</h5>
           @endif
           
         
     
     
     
        
      
     
      </div>
      </div>  
      
      
          </div>
      
            <!-- Newsfeed Common Side Bar Right
            ================================================= -->
           </div>
        </div>
      </div>
    </div>
</div>
