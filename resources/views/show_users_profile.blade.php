
 @include('layouts.templatefrontend.header');

 <div id="page-contents">
   <div class="container">
     <div class="row">
 
       <!-- Newsfeed Common Side Bar Left
       ================================================= -->
 @include('layouts.templatefrontend.leftsidebar');
 <div id="newsfeed">
 
 <div class="col-md-7">
 <div class="edit-profile-container">
 <div class="block-title">
 <h4 class="grey"><i class="icon ion-ios-book-outline"></i>User Information</h4>
 <div class="line"></div>
 <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p> -->
 <!-- <div class="line"></div> -->
 </div>
 <div class="edit-block">
 <form name="education" id="education" class="form-inline" style="margin-top:30px" action="" method="POST">
 <div class="row">
 <div class="form-group col-xs-6">
 <label for="date-from">Username</label>
 <input id="date-from" class="form-control input-group-lg" type="text" name="username"  value="{{$user->email}}" disabled="">
 </div>
 </div>
 <div class="row">
 <div class="form-group col-xs-6">
 <label for="date-from">First Name</label>
 <input id="date-from" class="form-control input-group-lg" type="text" name="firstname"  value="{{$user->name}}" disabled="">
 </div>
 <div class="form-group col-xs-6">
 <label for="date-to" class="">Last Name</label>
 <input id="date-to" class="form-control input-group-lg" type="text" name="lastname"   value="{{$user->last_name}}" disabled="">
 </div>
 </div>
 <div class="row">
 <div class="form-group col-xs-12">
 <label for="school">Geburtsdatum</label>
 <input id="school" class="form-control input-group-lg" type="text" name="dateofbirth" placeholder="12-10-2012"  value="{{$user->dob}}" disabled="">
 </div>
 </div>
 <div class="row">
 <div class="form-group col-xs-12">
 <label for="school">Address</label>
 <input id="school" class="form-control input-group-lg" type="text" name="residence" placeholder="house 54"  value="{{$user->address}}" disabled="">
 </div>
 </div>
 <div class="row">
 <div class="form-group col-xs-12">
 <label for="school">Phone</label>
 <input id="school" class="form-control input-group-lg" type="text" name="phone" placeholder="+923244218660"  value="{{$user->phone}}" disabled="">
 </div>
 </div>
 <div class="row">
 <div class="form-group col-xs-12">
 <label for="edu-description">Info</label>
 <textarea id="edu-description" name="about" class="form-control" rows="4" cols="400" disabled="">{{$user->info}}</textarea>
 </div>
 </div>
 
 </form>
 </div>
 </div>
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
 