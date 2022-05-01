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
            <div class="row">
                
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>User PDF List</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>User Id #</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>PDF Status</th>
                                                <th>Password</th>
                                                <th>User Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->firstname.' '.$user->lastname}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->file_path?'Present': 'Deleted'}}</td>
                                                <td>{{$user->file_path?$user->pdf_password: 'Deleted'}}</td>
                                                <td>{{$user->active_status?'Active' : 'De-active'}}</td>
                                                <td>
                                                   
                                                    <a href="user_status/active/{{$user->id}}" class="btn btn-success">Active</a>
                                                    <a href="user_status/de_active/{{$user->id}}" class="btn btn-danger">De-Active</a>
                                                    @if ($user->file_path)
                                                    <a href="{{route('user-document.download',[$user->id])}}" class="btn btn-success">Download Pdf</a>
                                                    <a href="{{route('user-document.delete',[$user->id])}}" class="btn btn-danger">Delete Pdf</a>    
                                                    @endif
                                                    
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