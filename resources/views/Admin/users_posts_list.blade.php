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
                            <h4>Users Posts</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table  id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id #</th>
                                                <th>User Name</th>
                                                <th>Email</th>
                                                <th>Post Text</th>
                                                <th>No of Comments</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user_posts as $user_posts)
                                            <tr>
                                                <td>{{$user_posts->id}}</td>
                                                <td>{{$user_posts->user->firstname.' '.$user_posts->user->lastname}}</td>
                                                <td>{{$user_posts->user->email}}</td>
                                                <td>{{substr($user_posts->post_text,0,20)."..."}}</td>
                                                <td>{{$user_posts->comments_count}}</td>
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