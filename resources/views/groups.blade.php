
 @include('layouts.templatefrontend.header');
 <style>
   .pr-12 {
     padding-right: 12px !important;
 }
 
 .mb-20 {
     margin-bottom: 20px !important;
 }
 
 .b-1 {
     border: 1px solid #ebebeb !important;
 }
 
 .card {
     border: 0;
     border-radius: 0;
     margin-bottom: 30px;
     -webkit-transition: .5s;
     transition: .5s;
 }
 
 .card {
     position: relative;
     display: -ms-flexbox;
     display: flex;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0,0,0,.125);
     border-radius: .25rem;
 }
 
 .media {
     padding: 16px 12px;
     -webkit-transition: background-color .2s linear;
     transition: background-color .2s linear;
 }
 
 .media {
     display: -ms-flexbox;
     display: flex;
     -ms-flex-align: start;
     align-items: flex-start;
 }
 
 .card-body {
     -ms-flex: 1 1 auto;
     flex: 1 1 auto;
     padding: 1.25rem;
 }
 
 .media .avatar {
     flex-shrink: 0;
 }
 
 .no-radius {
     border-radius: 0 !important;
 }
 
 .avatar-xl {
     width: 64px;
     height: 64px;
     line-height: 64px;
     font-size: 1.25rem;
 }
 
 .avatar {
     position: relative;
     display: inline-block;
     width: 36px;
     height: 36px;
     line-height: 36px;
     text-align: center;
     border-radius: 100%;
     background-color: #f5f6f7;
     color: #8b95a5;
     text-transform: uppercase;
 }
 
 img {
     max-width: 100%;
 }
 
 img {
     vertical-align: middle;
     border-style: none;
 }
 
 .mb-2 {
     margin-bottom: .5rem!important;
 }
 
 .fs-20 {
     font-size: 20px !important;
 }
 
 .pr-16 {
     padding-right: 16px !important;
 }
 
 .ls-1 {
     letter-spacing: 1px !important;
 }
 
 .fw-300 {
     font-weight: 300 !important;
 }
 
 .fs-16 {
     font-size: 16px !important;
 }
 
 .media-body>* {
     margin-bottom: 0;
 }
 
 small, time, .small {
     font-family: Roboto,sans-serif;
     font-weight: 400;
     font-size: 11px;
     color: #8b95a5;
 }
 
 .fs-14 {
     font-size: 14px !important;
 }
 
 .mb-12 {
     margin-bottom: 12px !important;
 }
 
 .text-fade {
     color: rgba(77,82,89,0.7) !important;
 }
 
 .card-footer:last-child {
     border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px);
 }
 
 .card-footer {
     background-color: #fcfdfe;
     border-top: 1px solid rgba(77,82,89,0.07);
     color: #8b95a5;
     padding: 10px 20px;
 }
 
 .flexbox {
     display: -webkit-box;
     display: flex;
     -webkit-box-pack: justify;
     justify-content: space-between;
 }
 
 .align-items-center {
     -ms-flex-align: center!important;
     align-items: center!important;
 }
 
 .card-footer {
     padding: .75rem 1.25rem;
     background-color: rgba(0,0,0,.03);
     border-top: 1px solid rgba(0,0,0,.125);
 }
 
 
 .card-footer {
     background-color: #fcfdfe;
     border-top: 1px solid rgba(77, 82, 89, 0.07);
     color: #8b95a5;
     padding: 10px 20px
 }
 
 .card-footer>*:last-child {
     margin-bottom: 0
 }
 
 .hover-shadow {
     -webkit-box-shadow: 0 0 35px rgba(0, 0, 0, 0.11);
     box-shadow: 0 0 35px rgba(0, 0, 0, 0.11)
 }
 
 .fs-10 {
     font-size: 10px !important;
 }
 </style>
  <div id="page-contents">
    <div class="container">
      <div class="row">
  
        <!-- Newsfeed Common Side Bar Left
        ================================================= -->
        @include('layouts.templatefrontend.leftsidebar');
 
 
 
 
     <div id="newsfeed">
  
      <div >
  <div class="col-md-9">
  <button style="background:#333;color:#fff;border:none;margin:15px;border-radius: 0;" type="button" class="btn btn-primary my-example-model" data-toggle="modal" data-target="#fullHeightModalRight">
  + Create New Group
  </button>
  <br>
 
   <!-- Full Height Modal Right -->
  <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-right" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h4 class="modal-title w-100" id="myModalLabel">+ New Group</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  </div>
  <div class="modal-body">
  <form action="{{route('groups.store')}}" method="post" onsubmit="return confirm('Are you sure you want to Create This Group')">
    @csrf
  <div class="form-group">
  <label for="usr">Group Title:</label>
  <input type="text" class="form-control" name="group_title">
  </div>
  <div class="form-group">
  <label for="sel1">Group Location</label>
  <select class="form-control" name="location">
    <option value="">Select Location</option>
    @foreach($location as $location)
    <option value="{{$location->location}}">{{$location->location}}</option>
    @endforeach
  </select>
  </div>
  <div class="form-group">
  <input type="hidden" class="form-control" name="groupadmin">
  </div>
  </div>
  <div class="modal-footer justify-content-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <input type="submit" class="btn btn-primary" name="submit" value="Save changes">
  </div>
  </form>
  </div>
  </div>
  </div>
 
 
  <h2 style="background:#333;color:#fff;border:none;margin:15px;border-radius: 0;width:100%" type="button" class="btn btn-primary my-example-model"> Groups You Created </h2>
 
 @foreach($groups as $group)
 
  <?php 
      $g_members= DB::table('group_members')->where('group_id',$group->id)->first();
      $chech_member=explode(',', $g_members->member_id);
 
      $current_user=Auth::user()->id;
 
      foreach ($chech_member as $chech_member) {
        if($current_user == $chech_member ){
 
   
  ?>
 
 <div class="col-sm-12" style="padding:15px">
  <div class="card b-1 hover-shadow mb-20">
     <div class="media card-body">
       <div class="media-left pr-12"><img alt="..." class="avatar avatar-xl no-radius" src="{{asset('user_frontend/images/covers/10.jpg')}}"></div>
       <div class="col-sm-6">
         <div class="mb-2">
           <span class="fs-20 pr-16">{{$group->group_title}}</span>
         </div>
 
         <?php 
 $t_members= DB::table('group_members')->where('group_id',$group->id)->first();
 $new=explode(',',$t_members->member_id);
 $a=0;
  foreach ($new as $test) {
   $a++;
  }
 ?>
 
         <small class="fs-16 fw-300 ls-1"><i class="fa fa-user pr-1"></i> {{$a}}  </small><Br>
         
       </div>
         <div class="col-sm-6 text-right">

         <p class="fs-14 text-fade mb-12"> <a href="group_delete/{{$group->id}}"> <i class="fa fa-trash pr-1"></i> </a> </p>
          
       </div>
     </div>
     <footer class="card-footer flexbox align-items-center">
       <div>
         <strong>Created on:</strong> <span>{{$group->created_at}}</span>
       </div>
       <div class="card-hover-show">
          <a class="btn btn-xs fs-10 btn-bold btn-default"   href="#" data-toggle="modal" data-target="#groupMembers-{{$group->id}}">    Add Group Members</a> 
          <a class="btn btn-xs fs-10 btn-bold btn-warning"   href="{{route('show_group',[$group->id,$group->group_title])}}">   Enter Group</a> 
       </div>
 
       <!-- Full Height Modal Right -->
  <div class="modal fade right" id="groupMembers-{{$group->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-full-height modal-right" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h4 class="modal-title w-100" id="myModalLabel">+ Add Members</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  </div>
  <div class="modal-body">
  <form action="{{route('group_members.update',$group->id)}}" method="post" onsubmit="return confirm('Are you sure you want to Add Members')">
    @csrf
    @method('PUT')
  <div class="form-group">
  <label for="usr">Group</label>
  <input type="text" class="form-control" name="group_title" value="{{$group->group_title}}" disabled="">
  </div>
  <div class="form-group">
  <label for="sel1">Members</label>
  <select class="form-control" name="members[]" multiple="">
    <option value="">Select Members</option>
    @foreach($users as $user)
    <option value="{{$user->id}}">{{$user->firstname}}</option>
    @endforeach
  </select>
  </div>
  <div class="form-group">
  <input type="hidden" class="form-control" name="group_id" value="{{$group->id}}">
  </div>
  </div>
  <div class="modal-footer justify-content-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <input type="submit" class="btn btn-primary" name="submit" value="Add">
  </div>
  </form>
  </div>
  </div>
  </div>
 
     </footer>
   </div>
 </div>
 
  <?php }}?>
  @endforeach
 
 
 
 
  <!-- Full Height Modal Right -->
  <!-- Friend List
  ================================================= -->
  <div class="friend-list">
  <div class="row">
  
 
  
 
   <h2 style="background:#333;color:#fff;border:none;margin:15px;border-radius: 0;width:100%" type="button" class="btn btn-primary my-example-model"> Groups You Invited </h2>
 
 @foreach($groups as $group)
 
  <?php 
      $g_members= DB::table('group_members')->where('group_id',$group->id)->first();
      $chech_member=explode(',', $g_members->member_id);
 
      $current_user=Auth::user()->id;
 
      foreach ($chech_member as $chech_member) {
        if($current_user == $chech_member ){
 
   
  ?>
 
 
 <div class="col-sm-12" style="padding:15px">
  <div class="card b-1 hover-shadow mb-20">
     <div class="media card-body">
       <div class="media-left pr-12"><img alt="..." class="avatar avatar-xl no-radius" src="https://bootdey.com/img/Content/avatar/avatar1.png"></div>
       <div class="col-sm-6">
         <div class="mb-2">
           <span class="fs-20 pr-16">{{$group->group_title}}</span>
         </div>
 
                 <?php 
 $t_members= DB::table('group_members')->where('group_id',$group->id)->first();
 $new=explode(',',$t_members->member_id);
 $a=0;
  foreach ($new as $test) {
   $a++;
  }
 ?>
 
         <small class="fs-16 fw-300 ls-1"><i class="fa fa-user pr-1"></i> {{$a}} </small><Br>
         
       </div>
        
     </div>
     <footer class="card-footer flexbox align-items-center">
       <div>
         <strong>Created on:</strong> <span>{{$group->created_at}}</span>
       </div>
       <div class="card-hover-show"> 
          <a class="btn btn-xs fs-10 btn-bold btn-warning"   href="{{route('show_group',[$group->id,$group->group_title])}}">   Enter Group</a> 
       </div>
     </footer>
   </div>
 </div>
 
  <?php }}?>
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
  