
 @include('layouts.templatefrontend.header');

 <div id="page-contents">
   <div class="container">
     <div class="row">
 
       <!-- Newsfeed Common Side Bar Left
       ================================================= -->
       @include('layouts.templatefrontend.leftsidebar');
    <div id="newsfeed">
 
     <div >
 <div class="col-md-9">
 <button style="background:#333;color:#fff;border:none;padding:10px;margin:15px" type="button" class="btn btn-primary my-example-model" data-toggle="modal" data-target="#fullHeightModalRight">
 + Create New Group
 </button>
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
 <!-- Full Height Modal Right -->
 <!-- Friend List
 ================================================= -->
 <div class="friend-list">
 <div class="row">
 
 @foreach($groups as $group)
   
 <div class="col-md-6 col-sm-6">
 <div class="friend-card">
 <a href="{{route('show_group',[$group->id,$group->group_title])}}">
 <img src="{{asset('user_frontend/images/covers/10.jpg')}}" alt="profile-cover" class="img-responsive cover">
 </a>
 <div class="card-info">
 <!-- <img src="images/users/user-5.jpg" alt="user" class="profile-photo-lg"> -->
 <div class="friend-info">
 <a href="groupmembers.php?group=7" class="pull-right text-green"> <i class="fa fa-map-marker" aria-hidden="true"></i>{{$group->location}}</a>
 
 
 <!-- Add Group Members -->
 <a href="#" class="pull-right text-green" data-toggle="modal" data-target="#groupMembers-{{$group->id}}">add members</a>
 
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
 
 <!-- End Group Members -->
 <h5><a href="{{route('show_group',[$group->id,$group->group_title])}}" class="profile-link">{{$group->group_title}} </a>
 <br><br>

 <?php 
$t_members= DB::table('group_members')->where('group_id',$group->id)->first();
$new=explode(',',$t_members->member_id);
$a=0;
 foreach ($new as $test) {
  $a++;
 }
?>

<i class="fa fa-user" aria-hidden="true"></i>
{{$a}} </h5>
 <!-- <p>Traveler</p> -->
 </div>
 </div>
 </div>
 </div>
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
 