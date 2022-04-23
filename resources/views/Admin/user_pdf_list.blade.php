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
                            <h4>User PDF List</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="order-listing" class="table" style="font-size:15px;">
                                        <thead>
                                            <tr>
                                                <th>User Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user_pdf as $user_pdf)
                                            <tr>
                                                <td>{{$user_pdf->id}}</td>
                                                <td>{{$user_pdf->firstname.' '.$user_pdf->lastname}}</td>
                                                <td>{{$user_pdf->email}}</td>
                                                <td>{{$user_pdf->pdf_password}}</td>
                                                <td>
                                                   
                                                    <form action="{{route('user-document.download')}}" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{$user_pdf->file_path}}" name="filePath">
                                                        <button type="submit" class="btn btn-success">Download</button>
                                                    </form>
                                                    
                                                    <a href="" class="btn btn-danger">Delete</a>
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