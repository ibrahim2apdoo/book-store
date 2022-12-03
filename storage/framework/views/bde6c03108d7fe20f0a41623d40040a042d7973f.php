

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                        </div>
                            <table id="example2" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
                                <th> <?php echo e(trans('admin.edit')); ?> </th>
                                <th> <?php echo e(trans('admin.category_name')); ?> </th>
                                <th><?php echo e(trans('admin.category_image')); ?></th>
                                <th><?php echo e(trans('admin.category_description')); ?></th>
                                <th><?php echo e(trans('admin.price')); ?> </th>
                                <th><?php echo e(trans('admin.quantity')); ?> </th>
                                <th><?php echo e(trans('admin.category_name_of_product')); ?> </th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo Form::open(['id'=>'form_delete','url'=>url('product/'.$productinfo->id),'method'=>'delete']); ?>

                                        <?php echo Form::submit(trans('admin.delete'),['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo e(url ('product/'.$productinfo->id .'/edit')); ?> "> <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td><?php echo e($productinfo->product_name); ?></td>
                                    <td>
                                    <?php if(!empty($productinfo->product_image)): ?>
                                        <img src="<?php echo e(asset('storage/'.$productinfo->product_image)); ?>" style="width: 100px;height: 100px;">
                                    <?php endif; ?>
                                    </td>
                                    <td><?php echo e($productinfo->product_description); ?></td>
                                    <td><?php echo e($productinfo->product_price); ?></td>
                                    <td><?php echo e($productinfo->product_quantity); ?></td>
                                    <td><?php echo e($productinfo->products->category_name); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
                                <th> <?php echo e(trans('admin.edit')); ?> </th>
                                <th> <?php echo e(trans('admin.product_name')); ?> </th>
                                <th><?php echo e(trans('admin.product_image')); ?></th>
                                <th><?php echo e(trans('admin.product_description')); ?></th>
                                <th><?php echo e(trans('admin.price')); ?> </th>
                                <th><?php echo e(trans('admin.quantity')); ?> </th>
                                <th><?php echo e(trans('admin.category_name_of_product')); ?> </th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>

    <script src="<?php echo e(url('/design/adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(url('/design/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(url('/design/adminlte/plugins/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(url('/design/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>
    <script src="<?php echo e(url('/design/adminlte/dist/js/adminlte.min.js')); ?>"></script>
    <script src="<?php echo e(url('/design/adminlte/dist/js/demo.js')); ?>"></script>

    <script type="text/javascript">
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        })
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Apdoo\Desktop\New folder\New folder\book-store\resources\views/admin/product/index.blade.php ENDPATH**/ ?>