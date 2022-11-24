<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                            <h3 style="text-align: center">Book Store => <?php echo e($categoryinfo->category_name); ?></h3>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td><?php echo e($categoryinfo->category_name); ?></td>
                                <td><?php echo e($categoryinfo->category_description); ?></td>
                                <td>
                                    <?php if(!empty($categoryinfo->category_image)): ?>
                                        <img src="<?php echo e(asset('storage/public/'.$categoryinfo->category_image)); ?>" style="width: 100px;height: 100px;">
                                    <?php endif; ?>
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
        <?php if($categoryinfo->products->count() != 0): ?>
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
                            <?php $__currentLoopData = $categoryinfo->products()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($productinfo->product_name); ?></td>
                                    <td>
                                        <?php if(!empty($productinfo->product_image)): ?>
                                            <img src="<?php echo e(asset('storage/public/'.$productinfo->product_image)); ?>" style="width: 100px;height: 100px;">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($productinfo->product_description); ?></td>
                                    <td><?php echo e($productinfo->product_price); ?></td>
                                    <td><?php echo e($productinfo->product_quantity); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
            <?php else: ?>
            <div class="alert alert-danger ">
                <h2 style="text-align: center"> This Category Is Empty </h2>
            </div>
        <?php endif; ?>
        <!-- /.row -->
    </section>
<?php echo $__env->make('website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\Users\pc\Desktop\New folder\book-store\resources\views/website/show.blade.php ENDPATH**/ ?>