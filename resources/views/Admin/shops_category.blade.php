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
                            <h4>Categories</h4>
                        </div>
                        <div class="card-body">
                            <div class="col-2">
                                    <a href="{{route('shops_category.create')}}" class="btn btn-primary">Add</a>
                            </div>
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table id="order-listing" class="table" style="font-size:15px;">
                                        <thead>
                                            <tr>
                                                <th>S #</th>
                                                <th>Category</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($shops_cat as $shops_cat)
                                            <tr>
                                                <td>{{$shops_cat->id}}</td>
                                                <td>{{$shops_cat->category}}</td>
                                                <td>
                                                    <a href="{{route('shops_category.edit',$shops_cat->id)}}" class="btn btn-secondary">Edit</a>
                                                    <form method="POST" action="{{route('shops_category.destroy',$shops_cat->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                
                                                   <button class="btn btn-danger">Delete</button>
                                                  </form>
                                                   
                                                                                                         
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