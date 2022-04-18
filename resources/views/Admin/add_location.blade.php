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
                            <h4>Add Location</h4>
                        </div>
                        <div class="card-body" style="font-size: 15px;">

                            <form method="POST" action="{{route('locations.store')}}" class="form-sample" enctype="multipart/form-data">
                             @csrf
                               <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                       <label class="col-sm-3 col-form-label">Location</label>
                                      <div class="col-sm-9">
                                        <input type="text" name="location" class="form-control" value="{{old('location')}}">
                                      </div>
                                    </div>
                                  </div>
                                  
                                </div>

                                 <input type="submit" class="float-right btn btn-dark" value="Add">
                            </form>     
                            

                            <div style="margin-top:50px" class="col-sm-12">
                                <canvas id="myChart" style="width:100%; "></canvas>
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