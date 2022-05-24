@include('Admin.admin_layouts.header');



<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
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
        
           <div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header">
                           <h4>Users List</h4>

                       </div><br><br>
                       <div class="card-body">
                           <div class="row">
                               <div class="col-12 table-responsive">
                                   <table id="example" class="display" style="width:100%">
                                       <thead>
                                           <tr>
                                               <th>Id #</th>
                                               <th>User Name</th>
                                               <th>Email</th>
                                               <th>Phone</th>
                                               <th>Current Status</th>
                                               <th>Actions</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach($users as $user)
                                           <tr>
                                               <td>{{$user->id}}</td>
                                               <td>{{$user->firstname.' '.$user->lastname}}</td>
                                               <td>{{$user->email}}</td>
                                               <td>{{$user->phone}}</td>
                                               <td>
                                                   @if($user->active_status == 1)
                                                       Active
                                                   @else
                                                       De-Active    
                                                   @endif
                                               </td>
                                               <td>
                                                   
                                                   <a href="user_delete/{{$user->id}}" class="btn btn-danger smallbtn">Delete</a>
                                               </td>
                                           </tr>
                                           @endforeach       
                                       </tbody>
                                   </table>
                               </div>
           </div>
                       </div>
                   </div>



                  


                  

               </div>
           </div>
        
       </div>
  <?php //@include('rightside.php');?>   
   </section>
</div>

@include('Admin.admin_layouts.footer'); 




<script type="text/javascript">
   

   $(document).ready(function() {
   $('#example').DataTable( {
       dom: 'Bfrtip',
       buttons: [
           'copyHtml5',
           'excelHtml5',
           'csvHtml5',
           'pdfHtml5'
       ]
   } );
} );
</script>>












