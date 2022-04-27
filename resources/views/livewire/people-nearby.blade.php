<div wire:poll>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
    <div>
        @foreach ($users as $user)
        <div class="card b-1 hover-shadow mb-20">
            <div class="media card-body">
              <div class="media-left pr-12"><img alt="..." class="avatar avatar-xl no-radius" src="https://bootdey.com/img/Content/avatar/avatar1.png"></div>
              <div class="col-sm-6">
                <div class="mb-2">
                  <span class="fs-20 pr-16">{{$user->firstname.' '.$user->lastname}}</span>
                </div>
                {{-- <small class="fs-16 fw-300 ls-1"><i class="fa fa-map-marker pr-1"></i> Islamabad , Pakistan </small><Br> --}}
                <small class="fs-16 fw-300 ls-1" style="font-size:12px !important;font-weight: bold;"><i class="fa fa-map-marker pr-1" style="color:#27aae1"></i> {{$this->getKmAway($user->long,$user->lat)}} KM Away</small>
              </div>
              <div class="col-sm-6 text-right">
                <p class="fs-14 text-fade mb-12"> <i class="fa fa-calendar pr-1"></i> {{\Carbon\Carbon::parse($user->dob)->format('F d, Y')}}</p>
                @if ($user->phone)
                <span class="text-fade"><i class="fa fa-mobile pr-1"></i> {{$user->phone}}</span>    
                @endif
                
              </div>
            </div>
            <footer class="card-footer flexbox align-items-center">
              <div>
                <strong>Created on:</strong> <span>{{\Carbon\Carbon::parse($user->created_at)->format('F d, Y')}}</span>
              </div>
              <div class="card-hover-show">
                 <a class="btn btn-xs fs-10 btn-bold btn-primary"   href="{{config('chatify.routes.prefix')}}/{{$user->id}}"> <i class="fa fa-comments-o pr-1"></i>  Chat</a> 
              </div>
            </footer>
          </div>        
        @endforeach
    </div>   
    <div>
    </div> 




    <div>
        <script>
            window.onload = function(e){ 
     
     if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else { 
  x.innerHTML = "Geolocation is not supported by this browser.";
}
}

function showPosition(position) {
    @this.currentUserLongitude= position.coords.longitude;
    @this.currentUserLatiitude=position.coords.latitude;
 
   
     }
})
        </script>
    </div>





    <div>
    <script>
        // $(document).ready(function(){
        //     @this.name="Farooqi";
        // });

      


     window.addEventListener('getLocation', event => {
          //alert("Hello! I am an alert box!");
     
     if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
} else { 
  x.innerHTML = "Geolocation is not supported by this browser.";
}

function showPosition(position) {
    @this.currentUserLongitude= position.coords.longitude;
    @this.currentUserLatiitude=position.coords.latitude;
 
   
     }
})
</script>     
    </div>  
</div>
