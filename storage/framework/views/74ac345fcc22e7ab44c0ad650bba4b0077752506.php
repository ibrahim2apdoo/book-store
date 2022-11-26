<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- Main content -->
    <section class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="align-content-center">
                            <h3 style="text-align: center"><span style="color: chocolate" class="uppercase"><?php echo e($about->first()->siteName); ?></span> <span style="color: darkslateblue">=></span> <span style="color: orangered" class="uppercase"><?php echo e($categoryinfo->category_name); ?></span></h3>
                        </div>
                        <table id="example2" class="table table-hover">
                            <tbody>
                            <tr>
                                <td style="margin-top: 20px">
                                    <div class="word-rtl">
                                        <h1 class="uppercase" style="color: orangered;"><?php echo e($categoryinfo->category_name); ?></h1>
                                        <p><?php echo e($categoryinfo->category_description); ?></p>
                                    </div>
                                </td>
                                <td style="margin-top: 20px; width: 200px;">
                                    <div  style="width: 200px ; height: 200px">
                                        <?php if(!empty($categoryinfo->category_image)): ?>
                                            <img src="<?php echo e(asset('storage/'.$categoryinfo->category_image)); ?>" style="width: 100%;height: 100%;">
                                        <?php endif; ?>
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
        <?php if($categoryinfo->products->count() != 0): ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-hover">
                            <thead>
                            <tr >
                                <th> <?php echo e(trans('admin.price')); ?> </th>
                                <th><?php echo e(trans('admin.quantity')); ?> </th>
                                <th style="text-align: center;"><?php echo e(trans('admin.products')); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $categoryinfo->products()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr style="text-align: center;">
                                    <td ><?php echo e($productinfo->product_price); ?></td>
                                    <td><?php echo e($productinfo->product_quantity); ?></td>
                                    <td style="margin-top: 20px; width: 100%;">

                                        <div style="width: 70% ;display: inline-block; margin:0px 4% ">
                                        <h1 class="uppercase" style="color: orangered;"><?php echo e($productinfo->product_name); ?></h1>
                                        <p><?php echo e($productinfo->product_description); ?></p>
                                        </div>
                                        <div  style="width: 200px ; height: 200px ;display:inline-block">
                                            <?php if(!empty($productinfo->product_image)): ?>
                                                <img src="<?php echo e(asset('storage/'.$productinfo->product_image)); ?>" style="width: 100%;height: 100%;">
                                            <?php endif; ?>

                                        </div>
                                    </td>

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
                <h2 style="text-align: center"> <?php echo e(trans('admin.This_Category_Is_Empty')); ?> </h2>
            </div>
        <?php endif; ?>
        <!-- /.row -->
    </section>
<?php echo $__env->make('website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH E:\project book-store\book-store\resources\views/website/show.blade.php ENDPATH**/ ?>