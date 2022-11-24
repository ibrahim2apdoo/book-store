@include('website.header')
 <!-- Main content -->
    <section class="container" style="margin-top: 150px;">
        <div class="row pt-5">
            <div class="col-12 col-md-12  cart_table wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <div class="table-responsive">
                    <table class="table table-bordered border-radius">
                        <thead>
                        <tr>
                            <th class="darkcolor">Product</th>
                            <th class="darkcolor">Price</th>
                            <th class="darkcolor">Quantity</th>
                            <th class="darkcolor">Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-table product-detail-cart">

                                    <div class="media">
                                        <div class="row no-gutters">

                                            <div class="col-12 col-lg-2 product-detail-cart-image">
                                                <a class="shopping-product" href="javascript:void(0)"><img src="img/shopcart-1.jpg" alt="Generic placeholder image"></a>
                                            </div>

                                            <div class="col-12 col-lg-10 mt-auto product-detail-cart-data">
                                                <div class="media-body ml-lg-3">
                                                    <h4 class="product-name"><a href="product-detail.html">Love Does</a></h4>
                                                    <p class="product-des">We offer the most complete in the country</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h4 class="text-center amount">$130.00</h4>
                            </td>
                            <td class="text-center">
                                <div class="quote text-center mt-1">
                                    <input type="number" placeholder="1" class="quote" min="1" max="100">
                                </div>
                            </td>
                            <td>
                                <h4 class="text-center amount">$136.00</h4>
                            </td>
                            <td class="text-center"><a class="btn-close" href="javascript:void(0)"><i class="lni-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-table product-detail-cart">

                                    <div class="media">
                                        <div class="row no-gutters">

                                            <div class="col-12 col-lg-2 product-detail-cart-image">
                                                <a class="shopping-product" href="javascript:void(0)"><img src="img/shopcart-2.jpg" alt="Generic placeholder image"></a>
                                            </div>

                                            <div class="col-12 col-lg-10 mt-auto product-detail-cart-data">
                                                <div class="media-body ml-lg-3">
                                                    <h4 class="product-name"><a href="product-detail.html">The Last Stand</a></h4>
                                                    <p class="product-des">We offer the most complete in the country</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h4 class="text-center d-table-price amount">$100.00</h4>
                            </td>
                            <td class="text-center">
                                <div class="quote text-center mt-1">
                                    <input type="number" placeholder="1" class="quote" min="1" max="100">
                                </div>
                            </td>
                            <td>
                                <h4 class="text-center amount">$106.00</h4>
                            </td>
                            <td class="text-center"><a class="btn-close" href="javascript:void(0)"><i class="lni-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-table product-detail-cart">

                                    <div class="media">
                                        <div class="row no-gutters">

                                            <div class="col-12 col-lg-2 product-detail-cart-image">
                                                <a class="shopping-product" href="javascript:void(0)"><img src="img/shopcart-1.jpg" alt="Generic placeholder image"></a>
                                            </div>

                                            <div class="col-12 col-lg-10 mt-auto product-detail-cart-data">
                                                <div class="media-body ml-lg-3">
                                                    <h4 class="product-name"><a href="product-detail.html">The Road</a></h4>
                                                    <p class="product-des">We offer the most complete in the country</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h4 class="text-center d-table-price amount">$150.00</h4>
                            </td>
                            <td class="text-center">
                                <div class="quote text-center mt-1">
                                    <input type="number" placeholder="1" class="quote" min="1" max="100">
                                </div>
                            </td>
                            <td>
                                <h4 class="text-center amount">$150.00</h4>
                            </td>
                            <td class="text-center"><a class="btn-close" href="javascript:void(0)"><i class="lni-trash"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="apply_coupon">
                    <div class="row">
                        <div class="col-12 text-left">
                            <a href="shop-cart.html" class="btn yellow-color-green-gradient-btn">UPDATE</a>
                            <a href="shop-cart.html" class="btn green-color-yellow-gradient-btn ">CHECKOUT</a>
                        </div>
                        <!--                            <div class="col-6  coupon text-left">-->
                        <!--                                <a href="shop-cart.html" class="btn pink-color-black-gradient-btn ">CHECKOUT</a>-->
                        <!--                            </div>-->
                    </div>
                </div>
            </div>
        </div>
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

