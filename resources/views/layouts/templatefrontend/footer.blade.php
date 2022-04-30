 <!-- Footer
    ================================================= -->
    <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="footer-wrapper">
              <div class="col-md-3 col-sm-3">
                <a href="#"><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
                <ul class="list-inline social-icons">
                  <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
                  <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-2">
                <h5>For individuals</h5>
                <ul class="footer-links">
                  <li><a href="#">Signup</a></li>
                  <li><a href="#">login</a></li>
                  <li><a href="#">Explore</a></li>
                  <li><a href="#">Finder app</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Language settings</a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-2">
                <h5>For businesses</h5>
                <ul class="footer-links">
                  <li><a href="#">Business signup</a></li>
                  <li><a href="#">Business login</a></li>
                  <li><a href="#">Benefits</a></li>
                  <li><a href="#">Resources</a></li>
                  <li><a href="#">Advertise</a></li>
                  <li><a href="#">Setup</a></li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-2">
                <h5>About</h5>
                <ul class="footer-links">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-3">
                <h5>Contact Us</h5>
                <ul class="contact">
                  <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                  <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                  <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>Thunder Team © 2016. All rights reserved</p>
        </div>
      </footer>
      
      <!--preloader-->
      <div id="spinner-wrapper">
        <div class="spinner"></div>
      </div>
       
      
      <!-- Scripts
      ================================================= -->
      
      <script src="{{asset('user_frontend/js/jquery-3.1.1.min.js')}}"></script>
      <script src="{{asset('user_frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('user_frontend/js/jquery.sticky-kit.min.js')}}"></script>
      <script src="{{asset('user_frontend/js/jquery.scrollbar.min.js')}}"></script>
      <script src="{{asset('user_frontend/js/script.js')}}"></script>
  
  
  
  
  <script>
      function newsfeedsectionLoad(){
          $.ajax({
              type: 'post',
                url: "newsfeedsection.php",
              success: function(data) {
                  $("#newsfeed").html(data); // or ondiv, didn't get it
              }
          });
      }
      $(document).ready(function(){
       setInterval(function(){
          newsfeedsectionLoad();
       }, 30000);
  });
  
  
  </script>
  
  <script type="text/javascript">
    $(document).ready(function(){
      //Uplaod Image
      $("#submit_form").on("submit", function(e){
        e.preventDefault();
           $("#spinner-wrapper").show().delay( 90000 ).hide();
  
         var formData = new FormData(this);
  
        $.ajax({
          url : "post.php",
          type : "POST",
          data : formData,
  
          contentType : false,
          processData: false,
            success: function(data){
  
          //  document.getElementById("#posttext").reset();
         // $("#table").load(location.href+" #table","");
  
  
  
   
            // $("#blah").hide();
            // $("#preview").show();
            // $("#image_preview").html(data);
            // $("#upload_file").val('');
            newsfeedsectionLoad();
          }
        });
      });
  
      //Delete Image
      $(document).on("click","#delete_btn", function(){
        if(confirm("Are you sure you want to remove this image?")){
          var path = $("#delete_btn").data("path");
  
          $.ajax({
            url:'deletepost.php',
            type : "POST",
            data : {path : path},
            success: function(data){
              if(data != ""){
                $("#preview").hide();
                $("#image_preview").html('');
              }
            }
          });
        }
      });
    });
  </script>   
  
  
  
  
  <script type="text/javascript">
    $(document).ready(function(){
      //Uplaod Image
      $("#submit_formgroup").on("submit", function(e){
        e.preventDefault();
           $("#spinner-wrapper").show().delay( 90000 ).hide();
  
         var formData = new FormData(this);
  
        $.ajax({
          url : "postgroup.php",
          type : "POST",
          data : formData,
  
          contentType : false,
          processData: false,
            success: function(data){
  
          //  document.getElementById("#posttext").reset();
         // $("#table").load(location.href+" #table","");
  
  
  
   
            // $("#blah").hide();
            // $("#preview").show();
            // $("#image_preview").html(data);
            // $("#upload_file").val('');
          }
        });
      });
  
    
    });
  </script>        
     
    </body> 
  </html>
  