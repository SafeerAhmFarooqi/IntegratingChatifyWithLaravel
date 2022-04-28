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
                            <h4>Locations</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-2">
                                    <a href="{{route('locations.create')}}" class="btn btn-primary">Add</a>
                            </div>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S #</th>
                                                <th>Location</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($location as $location)
                                            <tr>
                                                <td>{{$location->id}}</td>
                                                <td>{{$location->location}}</td>
                                                <td>
                                                    <a href="{{route('locations.edit',$location->id)}}" class="btn btn-secondary">Edit</a>

                                                    <form method="POST" action="{{route('locations.destroy',$location->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                
                                                   <button class="btn btn-danger">Delete</button>
                                                  </form>

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
</script>