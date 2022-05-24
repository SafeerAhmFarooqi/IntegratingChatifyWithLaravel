@include('Admin.admin_layouts.header');

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
 @include('Admin.admin_layouts.sidebar');
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">

 @include('Admin.admin_layouts.topbar');
 <div class="row">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
   @endif
</div>

@foreach ($posts as $post)
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Users Post View</h4>
                <h4>Post Id : {{$post->id}}</h4>
                <h4>User Name : {{$post->user->firstname.' '.$post->user->lastname}}</h4>
                <h4>Email : {{$post->user->email}}</h4>
                @if ($post->user->profile_pic)
                <h4>Profile Pic :</h4>
                <img src="{{$post->user->profile_pic ?asset('storage/user_profile_pics/'.$post->user->profile_pic) : asset('storage/user_profile_pics/photoicon.jpg') }}" style="width: 30%">
                @endif
                <h4>Post Text :</h4>
                <h6>{{$post->post_text}}</h6>
                <h4>Post Image : {{$post->post_image?'Yes' : 'No'}}</h4>
                <h4>No of Comments : {{$post->comments->count()}}</h4>
                @if ($post->post_image)
                <img src="{{asset('storage/user_post_pics/'.$post->post_image)}}" style="width: 50%">    
                @endif
                
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table  id="example_{{$post->id}}" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id #</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Comment Text</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($post->comments as $comment)
                                <tr>
                                    <td>{{$comment->id}}</td>
                                    <td>{{$comment->user->firstname.' '.$comment->user->lastname}}</td>
                                    <td>{{$comment->user->email}}</td>
                                    <td><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="{{$comment->comment}}" title="View Full Comment">{{substr($comment->comment,0,20)."..."}}</a></td>
                                    <td>
                                       

                                        <a href="{{route('Admin.user-comment.delete',$comment->id)}}" class="btn btn-danger">Delete</a>

                                        
                                        
                                    </td>
                                </tr>
                                @endforeach
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form>
                                            {{-- <div class="mb-3">
                                              <label for="recipient-name" class="col-form-label">Comment :</label>
                                              <input type="text" class="form-control" id="recipient-name">
                                            </div> --}}
                                            <div class="mb-3">
                                              <label for="message-text" class="col-form-label">Comment Text :</label>
                                              <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          {{-- <button type="button" class="btn btn-primary">Send message</button> --}}
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div>
                                      <script>
                                          var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
// Button that triggered the modal
var button = event.relatedTarget
// Extract info from data-bs-* attributes
var recipient = button.getAttribute('data-bs-whatever')
// If necessary, you could initiate an AJAX request here
// and then do the updating in a callback.
//
// Update the modal's content.
var modalTitle = exampleModal.querySelector('.modal-title')
var modalBodyInput = exampleModal.querySelector('.modal-body input')
var modalBodyText = exampleModal.querySelector('.modal-body textarea')

modalTitle.textContent = 'Comment Text'
// modalBodyInput.value = recipient
modalBodyText.innerText = recipient
})
                                      </script>
                                  </div>
                            </tbody>
                        </table>
                    </div>
</div>
            </div>
        </div>





    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example_<?php echo $post->id ;?>').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
@endforeach
            
         







        </div>
   <?php //@include('rightside.php');?>   
    </section>
</div>

 @include('Admin.admin_layouts.footer'); 





    
