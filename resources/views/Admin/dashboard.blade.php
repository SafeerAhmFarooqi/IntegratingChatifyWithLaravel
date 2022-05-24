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

        
<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://cdn-icons-png.flaticon.com/512/146/146031.png" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"> <a href="{{route('Admin.users_list')}}">Users</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$userCount}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/GNOME_Documents_icon.svg/1200px-GNOME_Documents_icon.svg.png" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><a href="{{route('admin.user-document')}}">Documents</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$documentCount}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE3ZiLfUvnOL1xtA0C3QepRLL89GRlNq6iVA&usqp=CAU" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"> <a href="{{route('Admin.users_list')}}">Active User</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$activeUserCount}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbpjX3DXs_1RadLC1iMJE-NhZ90cV-q83SnQ&usqp=CAU" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"> <a href="{{route('Admin.users_list')}}">Block Users</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$blockUserCount}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://icon-library.com/images/icon-groups/icon-groups-22.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"> <a href="{{route('Admin.groups_list')}}">Groups</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$groupCount}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://icons.iconarchive.com/icons/custom-icon-design/flatastic-11/512/Shop-icon.png" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"> <a href="{{route('Admin.shops_list')}}">Shops</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$shopCount}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
</div>
<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJoxuX-cI64JKEt1CsSav2nbZzwuWkBcn6mzWzfun3G8xHrvolH9MrNys-sorunDGmo1Q&usqp=CAU" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"> <a href="{{route('locations.index')}}">Locations</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$locationCount}}</a></h6>
                        </div>
                    </div>
                </div>
            </div>
</div>


<div class="col-12 col-lg-3">
            <div class="card">
                        <div class="card-body px-3 py-4-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="https://png.pngtree.com/png-vector/20190227/ourlarge/pngtree-vector-voucher-icon-png-image_708692.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"> <a href="{{route('Admin.vouchers_list')}}">Vouchers</a> </h5>
                            <h6 class="text-muted mb-0"><a href="#"> {{$voucherCount}}</a></h6>
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