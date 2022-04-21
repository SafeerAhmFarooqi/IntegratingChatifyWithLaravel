    <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo" >
                <a href="index.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5uP5R1Nl8JEsI0ncCLnXWnRtkGtgk7BU4FMfnh55BQqI5dYEs1gC1DAJ5D4ACiAzf37A&usqp=CAU" alt="Logo" style="height:50%"></a>
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
                <a href="{{route('Shop.dashboard')}}" class='sidebar-link'>
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
                <a href="vouchers" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span> vouchers </span>
                </a>
            </li>


             <li
                class="sidebar-item ">
                <a href="check" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Chech Voucher</span>
                </a>
            </li>

            <li
                class="sidebar-item ">
                <a href="{{route('Shop.use_vouchers')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Use Voucher List</span>
                </a>
            </li>

            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>