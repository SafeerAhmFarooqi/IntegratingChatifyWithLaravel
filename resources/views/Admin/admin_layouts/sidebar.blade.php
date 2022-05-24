<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo" >
                <a href="/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5uP5R1Nl8JEsI0ncCLnXWnRtkGtgk7BU4FMfnh55BQqI5dYEs1gC1DAJ5D4ACiAzf37A&usqp=CAU" alt="Logo" style="height:50%"></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu"> 
            
            <li
                class="sidebar-item ">
                <a href="{{route('Admin.dashboard')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
           <!--  <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Appointment</span>
                </a>
                <ul class="submenu "> 

                        <li class="submenu-item ">
                            <a   href="alldata.php">All Data</a>
                        </li>
                        <li class="submenu-item ">
                            <a   href="datesearch.php">Date Search</a>
                        </li>
                        
                        
                        <li class="submenu-item ">
                            <a   href="center_1_negativ.php">Neagtiv </a>
                        </li>
                        <li class="submenu-item ">
                            <a   href="center_1_positiv.php">Positive </a>
                        </li>
                        <li class="submenu-item ">
                            <a   href="center_1_wait.php">Waiting Result </a>
                        </li>
                        <li class="submenu-item ">
                            <a   href="center_1_unsuccessfull.php">Un Successfull </a>
                        </li>
                </ul>
            </li> -->


            <li
                class="sidebar-item ">
                <a href="{{route('Admin.users_list')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>users</span>
                </a>
            </li>

             <li
                class="sidebar-item ">
                <a href="{{route('admin.user-document')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Documents</span>
                </a>
            </li>
            


            <li
                class="sidebar-item ">
                <a href="{{route('Admin.groups_list')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>groups</span>
                </a>
            </li>
            
              <li
                class="sidebar-item ">
                <a href="{{route('Admin.shops_list')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>shops</span>
                </a>
            </li>

              <li
                class="sidebar-item ">
                <a href="{{route('shops_category.index')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span> shops categories</span>
                </a>
            </li>

             <li
                class="sidebar-item ">
                <a href="{{route('sub_category.index')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span> sub categories</span>
                </a>
            </li>

             <li
                class="sidebar-item ">
                <a href="{{route('locations.index')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span> locations</span>
                </a>
            </li>

             <li
                class="sidebar-item ">
                <a href="{{route('Admin.vouchers_list')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span> vouchers </span>
                </a>
            </li>

             <li
                class="sidebar-item ">
                <a href="dashboard.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span> voucher status </span>
                </a>
            </li>

             <li
                class="sidebar-item ">
                <a href="{{route('Admin.users_posts')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Users Posts</span>
                </a>
            </li>

             {{-- <li
                class="sidebar-item ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span> Groups Posts</span>
                </a>
            </li> --}}

             <li
                class="sidebar-item ">
                <a href="{{route('Admin.active_users')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Active Users</span>
                </a>
            </li>

             <li
                class="sidebar-item ">
                <a href="{{route('Admin.block_users')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Block Users</span>
                </a>
            </li>



        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
