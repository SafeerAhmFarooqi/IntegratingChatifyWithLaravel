@include('Shop.shop_layouts.header');

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
 @include('Shop.shop_layouts.sidebar');
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

 @include('Shop.shop_layouts.topbar');

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Use Voucher List</h4>
                        </div>
                        <div class="card-body">
                          
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="order-listing" class="table" style="font-size:15px;">
                                        <thead>
                                            <tr>
                                                <th>S #</th>
                                                <th>Title</th>
                                                <th>Code</th>
                                                <th>Discount</th>
                                                 <th>User email</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($use_vouchers as $use_vouchers)
                                            <tr>
                                                <td>{{$use_vouchers->id}}</td>
                                                <td>{{$use_vouchers->title}}</td>
                                                <td>{{$use_vouchers->code}}</td>
                                                <td>{{$use_vouchers->discount}}  €</td>
                                                 <td>{{$use_vouchers->user_email}}</td>
                                                
                                            </tr>
                                            @endforeach       
                                        </tbody>
                                    </table>
                                </div>
            </div>
                            <div style="margin-top:50px" class="col-sm-12">
                                <canvas id="myChart" style="width:100%; "></canvas>
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

 @include('Shop.shop_layouts.footer'); 