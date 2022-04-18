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
                                    <table id="order-listing" class="table" style="font-size:15px;">
                                        <thead>
                                            <tr>
                                                <th>S #</th>
                                                <th>User Name</th>
                                                <th>Post</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user_posts as $user_posts)
                                            <tr>
                                                <td>{{$user_posts->id}}</td>
                                                <td>{{$user_posts->user_id}}</td>
                                                <td>{{$user_posts->post_text}}</td>
                                                
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