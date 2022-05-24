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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Groups List</h4>
                        </div>
                        <br><br>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S #</th>
                                                <th>Title</th>
                                                <th>Location</th>
                                                <th>Current Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($groups as $group)
                                            <tr>
                                                <td>{{$group->id}}</td>
                                                <td>{{$group->group_title}}</td>
                                                <td>{{$group->location}}</td>
                                                <td>
                                                     @if($group->status == 1)
                                                       Active
                                                   @else
                                                       De-Active    
                                                   @endif
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-success smallbtn">Group Members</a>
                                                    <a href="group_status/active/{{$group->id}}" class="btn btn-success smallbtn">Active</a>
                                                   <a href="group_status/de_active/{{$group->id}}" class="btn btn-danger smallbtn">De-Active</a>
                                                 
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