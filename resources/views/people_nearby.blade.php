
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
 
 
  <div class="create-post">
               <form  id="postform"  enctype="multipart/form-data">
               @csrf
               <div class="row">
                 <div class="col-md-8">
               
                     <input type="text" id="long" name="long" value="">
                     <input type="text" id="lat" name="lat" value="">
                     <input type="submit" name="submit" id="post_sub_btn" class="btn btn-primary pull-right" value="Publish">
 
                 </div>
               </div>
             </form>
             <div class="alert alert-success" id="message" style="display:none">
   <strong>Success!</strong> Post Submitted Successfully ! 
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
  <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
 
 <script>
 var x = document.getElementById("demo");
 
  window.onload = function(e){ 
     
        if (navigator.geolocation) {
     navigator.geolocation.getCurrentPosition(showPosition);
   } else { 
     x.innerHTML = "Geolocation is not supported by this browser.";
   }
 }
 
 function showPosition(position) {
   document.getElementById("long").value= position.coords.longitude;
   document.getElementById("lat").value=position.coords.latitude;
 
   
     }
 
 </script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
 <script
     src=//code.jquery.com/jquery-3.5.1.min.js
     integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
     crossorigin=anonymous></script>
     
      <script type="text/javascript">
 
       $(document).ready(function() {
 
     
 
   
       //jQuery('#message').html('disabled', true);
       $("#postform").submit(function(e){
       
           e.preventDefault();
           jQuery('#post_sub_btn').attr('disabled', true);
         jQuery.ajax({
           url:"{{route('people_nearby.update',1)}}",
           headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
           data:jQuery('#postform').serialize(),
           type:'PUT',
           success:function(result){
             jQuery('#message').html(result.msg);
             jQuery('#post_sub_btn').attr('disabled', false);
            // jQuery('#message').attr('disabled', true);
            $("#message").show();
            $("#message").delay(10000).hide(0);
            
 
             fetchpost();
 
           }
 
           });
 
 
       });
 
       });
 
 
   
 
 
       
 </script>
 
 