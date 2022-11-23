@include('website.header')
 <!-- Main content -->
    <section class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="align-content-center">
                            <h3 style="text-align: center">Book Store => {{$categoryinfo->category_name}}</h3>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>{{$categoryinfo->category_name}}</td>
                                <td>{{$categoryinfo->category_description}}</td>
                                <td>
                                    @if(!empty($categoryinfo->category_image))
                                        <img src="{{asset('storage/public/'.$categoryinfo->category_image)}}" style="width: 100px;height: 100px;">
                                    @endif
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>name </th>
                                <th>image </th>
                                <th>description </th>
                                <th>price </th>
                                <th>quantity </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryinfo->products()->get() as $productinfo)
                                <tr>
                                    <td>{{$productinfo->product_name}}</td>
                                    <td>
                                        @if(!empty($productinfo->product_image))
                                            <img src="{{asset('storage/public/'.$productinfo->product_image)}}" style="width: 100px;height: 100px;">
                                        @endif
                                    </td>
                                    <td>{{$productinfo->product_description}}</td>
                                    <td>{{$productinfo->product_price}}</td>
                                    <td>{{$productinfo->product_quantity}}</td>
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
                <h2 style="text-align: center"> This Category Is Empty </h2>
            </div>
        @endif
        <!-- /.row -->
    </section>
@include('website.footer')

