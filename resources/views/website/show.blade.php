@include('website.header')
 <!-- Main content -->
    <section class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="align-content-center">
                            <h3 style="text-align: center"><span style="color: chocolate" class="uppercase">{{$about->first()->siteName}}</span> <span style="color: darkslateblue">=></span> <span style="color: orangered" class="uppercase">{{$categoryinfo->category_name}}</span></h3>
                        </div>
                        <table id="example2" class="table table-hover">
                            <tbody>
                            <tr>
                                <td style="margin-top: 20px">
                                    <div class="word-rtl">
                                        <h1 class="uppercase" style="color: orangered;">{{$categoryinfo->category_name}}</h1>
                                        <p>{{$categoryinfo->category_description}}</p>
                                    </div>
                                </td>
                                <td style="margin-top: 20px; width: 200px;">
                                    <div  style="width: 200px ; height: 200px">
                                        @if(!empty($categoryinfo->category_image))
                                            <img src="{{asset('storage/'.$categoryinfo->category_image)}}" style="width: 100%;height: 100%;">
                                        @endif
                                    </div>
                                </td>


                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
        @if($categoryinfo->products->count() != 0)
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-hover">
                            <thead>
                            <tr >
                                <th> {{trans('admin.price')}} </th>
                                <th>{{trans('admin.quantity')}} </th>
                                <th style="text-align: center;">{{trans('admin.products')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryinfo->products()->get() as $productinfo)
                                <tr style="text-align: center;">
                                    <td >{{$productinfo->product_price}}</td>
                                    <td>{{$productinfo->product_quantity}}</td>
                                    <td style="margin-top: 20px; width: 100%;">

                                        <div style="width: 70% ;display: inline-block; margin:0px 4% ">
                                        <h1 class="uppercase" style="color: orangered;">{{$productinfo->product_name}}</h1>
                                        <p>{{$productinfo->product_description}}</p>
                                        </div>
                                        <div  style="width: 200px ; height: 200px ;display:inline-block">
                                            @if(!empty($productinfo->product_image))
                                                <img src="{{asset('storage/'.$productinfo->product_image)}}" style="width: 100%;height: 100%;">
                                            @endif

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
            @else
            <div class="alert alert-danger ">
                <h2 style="text-align: center"> {{trans('admin.This_Category_Is_Empty')}} </h2>
            </div>
        @endif
        <!-- /.row -->
    </section>
@include('website.footer')

