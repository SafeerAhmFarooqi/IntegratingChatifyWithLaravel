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
                            <h4>Vouchers List</h4>
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
                                                <th>Code</th>
                                                <th>Discount</th>
                                                <th>Shop</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($vouchers as $vouchers)
                                            <tr>
                                                <td>{{$vouchers->id}}</td>
                                                <td>{{$vouchers->title}}</td>
                                                <td>{{$vouchers->code}}</td>
                                                <td>{{$vouchers->discount}} €</td>
                                                <td>shop emal id here</td>
                                                
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