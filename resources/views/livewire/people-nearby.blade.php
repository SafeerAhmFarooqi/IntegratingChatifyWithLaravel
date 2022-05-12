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
                <small class="fs-16 fw-300 ls-1" style="font-size:12px !important;font-weight: bold;"><i class="fa fa-map-marker pr-1" style="color:#27aae1"></i> {{$this->getKmAway($user->longitude,$user->latitude)}} KM Away</small>
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
                 <a class="btn btn-xs fs-10 btn-bold btn-primary"   href="#" onclick="openForm({{$user->id}})"> <i class="fa fa-comments-o pr-1"></i>  Chat</a> 
              </div>
            </footer>
          </div>     
          
            <div class="chat-popup" id="myForm_{{$user->id}}" wire:ignore.self>
              <div style="height: 100%;">
                {{-- <iframe style="height: 100%;" src="{{!! config('app.url').'/'.config('chatify.routes.prefix').'/'.$user->id !!}}" title="YouTube video" allowfullscreen></iframe> --}}
                
                <iframe style="height: 100%;" src="{{config('app.url').'/'.config('chatify.routes.prefix').'/'.$user->id}}" title="YouTube video" allowfullscreen></iframe>
              </div>
              <a href="#" class="btn btn-primary" style="margin: 10px 20px;" onclick="closeForm({{$user->id}})">Close Chat</a>
            </div>  
          
          <script>
            function openForm(id) {
              polls = document.querySelectorAll('[id ^= "myForm_"]');
              Array.prototype.forEach.call(polls, callback);
              function callback(element, iterator) {
                document.getElementById(element.id).style.display = "none";
          }
              // if(document.getElementByClassName("chat-popup").style.display = "none")
              // {
              //   alert('open');
              // }
              if(document.getElementById('myForm_'+id).style.display = "none")
              {
                document.getElementById('myForm_'+id).style.display = "block";
              }
              else
              {
                document.getElementById('myForm_'+id).style.display = "none";
              }
            }
            
            function closeForm(id) {
              document.getElementById('myForm_'+id).style.display = "none";
            }
            </script>  
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

<style>
  .chat-popup {
  display: none;
  position: fixed;
  bottom: 50px;
  right: 25px;
  border: 3px solid #f1f1f1;
  height: 50%;
  z-index: 9;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}
     </style>
