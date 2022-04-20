<div class="col-md-6">

  <!-- Post Create Box
  ================================================= -->
  <div class="create-post">
    <form  id="postform"  enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-8">
        <div class="form-group" style="width:100%">
          <!-- <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" /> -->

                                      
                @if(Auth::user()->profile_pic)
                <img src="{{asset('images/user_profile_pics/'.Auth::user()->profile_pic)}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px"" class="profile-photo-md">
                @else
                <img src="{{asset('images/user_profile_pics/photoicon.jpg')}}" alt="logo" style="width:60px;border-radius:50%;margin-top:-10px"" class="profile-photo-md">
                @endif
             
            
          <textarea name="post_text" rows="2" placeholder="What are you thinking?" id="post_text" class="form-control" required></textarea>
        </div>
      </div>
      <div class="col-md-4">
        <div class="tools">
          <ul class="publishing-tools list-inline">

<div class="image-upload">
<label for="file-input">
<img src="https://www.freeiconspng.com/thumbs/no-image-icon/no-image-icon-13.png" style="pointer-events: none;width:30px">
</label>

<input id="file-input" type="file" name="post_image">
</div>

<input type="hidden" name="category" value="police">
<input type="hidden" name="privacy" value="public">
            
          </ul>

          <input type="submit" name="submit" id="post_sub_btn" class="btn btn-primary pull-right" value="Publish">
           
        </div>
      </div>
    </div>
  </form>
  <div class="alert alert-success" id="message" style="display:none">
<strong>Success!</strong> Post Submitted Successfully ! 
</div>
<br><br><br>

<div id="post-list">


</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script
src=//code.jquery.com/jquery-3.5.1.min.js
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin=anonymous></script>

<script type="text/javascript">

$(document).ready(function() {
  $("#post-list").empty();
fetchpost();
function fetchpost()
{

$.ajax({  
type: "GET",
url: "{{route('post.index')}}",       
success: function (response) {
 console.log(response);

 $.each(response.posts, function(key,item){

  var name = item.name;
//  var date= item.created_at;
 // var time= item.created_at;
  var user_img= "{{asset('images/user_profile_pics/')}}/"+item.profile_pic;
  var post_text= item.post_text;
  var post_img= item.post_img;
  
  $("#post-list").append('<div class="post-content"><div class="post-container"><img src="'+user_img+'" style="min-width: 50px;border-radius: 50%;max-width: 40px;max-height: 50px;min-height: 40px;" class="profile-photo-md pull-left"><div class="post-detail" id="post-data"><div class="user-info"><h5><a href="" class="profile-link">'+name+'</a><p style="float:right;"><i class="icon ion-ios-calendar-outline"></i>date &nbsp; <i class="icon ion-ios-clock-outline"></i> Time </p></h5></div><div class="post-text"><p>'+post_text+' </p></div></div></div></div>');
});
}

});
}


//jQuery('#message').html('disabled', true);
$("#postform").submit(function(e){

e.preventDefault();
jQuery('#post_sub_btn').attr('disabled', true);
jQuery.ajax({
url:"{{route('post.store')}}",
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
data:jQuery('#postform').serialize(),
type:'post',
success:function(result){
  jQuery('#message').html(result.msg);
  jQuery('#post_sub_btn').attr('disabled', false);
 // jQuery('#message').attr('disabled', true);
 $("#message").show();
 $("#message").delay(10000).hide(0);
 jQuery('#postform')['0'].reset();
 $("#post-list").empty();
  fetchpost();

}

});


});

});






</script>