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
 @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Users List</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="order-listing" class="table" style="font-size:15px;">
                                        <thead>
                                            <tr>
                                                <th>S #</th>
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
                                                <td>{{$user->firstname}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>
                                                    @if($user->status == 1)
                                                        Active
                                                    @else
                                                        De-Active    
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="user_status/active/{{$user->id}}" class="btn btn-success">Active</a>
                                                    <a href="user_status/de_active/{{$user->id}}" class="btn btn-danger">De-Active</a>
                                                    <a href="user_delete/{{$user->id}}" class="btn btn-danger">Delete</a>
                                                    <a href="{{route('send-mail',['userEmail'=>$user->email])}}" class="btn btn-success">Send Email</a>
                                                </td>
                                            </tr>
                                            @endforeach       
                                        </tbody>
                                    </table>
                                </div>
            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header">
                            <h4>Graphical Views Center 2</h4>
                        </div>
                        <div class="card-body">
                            <div style="margin-top:50px" class="col-sm-12">
                                <canvas id="myChart1" style="width:100%; "></canvas>
                            </div> 
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header">
                            <h4>Graphical Views Center 3</h4>
                        </div>
                        <div class="card-body">
                            <div style="margin-top:50px" class="col-sm-12">
                                <canvas id="myChart2" style="width:100%; "></canvas>
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