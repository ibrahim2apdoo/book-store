

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> <?php echo e(trans('admin.category_name')); ?> </th>
                                <th><?php echo e(trans('admin.category_description')); ?></th>
                                <th><?php echo e(trans('admin.added_by')); ?></th>
                                <th><?php echo e(trans('admin.number_of_product')); ?>  </th>
                                <th><?php echo e(trans('admin.category_image')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo e($categoryinfo->category_name); ?></td>
                                    <td><?php echo e($categoryinfo->category_description); ?></td>
                                    <td><?php echo e($categoryinfo->categories->name); ?></td>
                                    <td><?php echo e($categoryinfo->products()->count()); ?></td>
                                    <td>
                                        <?php if(!empty($categoryinfo->category_image)): ?>
                                            <img src="<?php echo e(asset('storage/public/'.$categoryinfo->category_image)); ?>" style="width: 100px;height: 100px;">
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> <?php echo e(trans('admin.category_name')); ?> </th>
                                <th><?php echo e(trans('admin.category_description')); ?></th>
                                <th><?php echo e(trans('admin.added_by')); ?></th>
                                <th><?php echo e(trans('admin.number_of_product')); ?>  </th>
                                <th><?php echo e(trans('admin.category_image')); ?></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 style="text-align: center"><?php echo e(trans('admin.products')); ?>  </h1>
                        <div>
                        </div>
                        <table id="example2" class="table table-bordered table-hover">
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
                            <?php $__currentLoopData = $categoryinfo->products()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo Form::open(['id'=>'form_delete','url'=>url('product/'.$productinfo->id),'method'=>'delete']); ?>

                                        <?php echo Form::submit('delete',['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo e(url ('product/'.$productinfo->id .'/edit')); ?> "> <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td><?php echo e($productinfo->product_name); ?></td>
                                    <td>
                                        <?php if(!empty($productinfo->product_image)): ?>
                                            <img src="<?php echo e(asset('storage/public/'.$productinfo->product_image)); ?>" style="width: 100px;height: 100px;">
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
                                <th> <?php echo e(trans('admin.category_name')); ?> </th>
                                <th><?php echo e(trans('admin.category_image')); ?></th>
                                <th><?php echo e(trans('admin.category_description')); ?></th>
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
    <div class="box">
        <div class="box-body ">
            <div class="align-content-center"><h1 style="text-align: center">Add product</h1 st></div>
            <?php echo Form::open(['url'=>url('add_product/'.$categoryinfo->id),'files'=>true]); ?>

            <div class="form-group">
                <?php echo Form::label(trans('admin.product_name')); ?>

                <?php echo Form::text('product_name',old('product_name'),['class'=>'form-control']); ?>

            </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo Form::label(trans('admin.product_image')); ?>

                    </div>
                    <div class="col-lg-12">
                        <?php echo Form::file('product_image',['class'=>'form-control']); ?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label(trans('admin.product_description')); ?>

                <?php echo Form::text('product_description',old('product_description'),['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label(trans('admin.price')); ?>

                <?php echo Form::text('product_price',old('product_price'),['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label(trans('admin.quantity')); ?>

                <?php echo Form::text('product_quantity',old('product_quantity'),['class'=>'form-control']); ?>

            </div>
        </div>
        <?php echo Form::submit(trans('admin.save'),['class'=>'btn btn-primary form-control']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.row -->
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



<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\project book-store\book-store\resources\views/admin/category/show.blade.php ENDPATH**/ ?>