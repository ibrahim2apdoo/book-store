<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- Main content -->
    <section class="container" style="margin-top: 150px;">
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