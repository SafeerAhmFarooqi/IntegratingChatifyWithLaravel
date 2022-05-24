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
                            <h4>Edit Sub Category</h4>
                        </div>
                        <div class="card-body" style="font-size: 15px;">

                            <form method="post" action="{{route('sub_category.update',$sub_category->id)}}" class="form-sample" enctype="multipart/form-data">
                             @csrf
                             @method('PUT')
                               <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                       <label class="col-sm-3 col-form-label">Category</label>
                                      <div class="col-sm-9">
                                         <select class="form-control form-control-xl" name="shop_category" >
                                            <option value="">Select Category</option>
                                            @foreach($shop_category as $shop_category)
                                            <option value="{{$shop_category->id}}">{{$shop_category->category}}</option>
                                            @endforeach
                                         </select>
                                      </div>
                                    </div>
                                  </div>

                                   <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sub Category</label>
                                      <div class="col-sm-9">
                                        <input type="text" name="sub_category" class="form-control" value="{{$sub_category->sub_category}}">
                                      </div>
                                    </div>
                                  </div>
                                  
                                </div>

                                 <input type="submit" class="float-right btn btn-dark" value="Update">
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