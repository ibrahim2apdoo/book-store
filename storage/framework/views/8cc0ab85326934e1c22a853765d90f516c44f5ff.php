

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-xm-12">
                <div class="card ">
                    <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th><?php echo e(trans('admin.category_image')); ?></th>
                                <th> <?php echo e(trans('admin.category_name')); ?> </th>
                                <th><?php echo e(trans('admin.category_description')); ?></th>
                                <th><?php echo e(trans('admin.added_by')); ?></th>
                                <th><?php echo e(trans('admin.number_of_product')); ?>  </th>
                                <th><?php echo e(trans('admin.created_at')); ?></th>
                                <th><?php echo e(trans('admin.updated_at')); ?></th>
                                <th> <?php echo e(trans('admin.edit')); ?> </th>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php if(!empty($categoryinfo->category_image)): ?>
                                            <div style="width: 100px; height: 100px">
                                            <img src="<?php echo e(asset('storage/'.$categoryinfo->category_image)); ?>" style="width: 100%;height: 100%;">
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td><a href="category/<?php echo e($categoryinfo->id); ?>"><?php echo e($categoryinfo->category_name); ?></a></td>
                                    <td><?php echo e($categoryinfo->category_description); ?></td>
                                    <td><?php echo e($categoryinfo->categories->name); ?></td>
                                    <td><?php echo e($categoryinfo->products()->count()); ?></td>
                                    <td><?php echo e($categoryinfo->created_at); ?></td>
                                    <td><?php echo e($categoryinfo->updated_at); ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo e(url ('category/'.$categoryinfo->id .'/edit')); ?> "> <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td>
                                        <?php echo Form::open(['id'=>'form_delete','url'=>url('category/'.$categoryinfo->id),'method'=>'delete']); ?>

                                        <?php echo Form::submit(trans('admin.delete'),['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th><?php echo e(trans('admin.category_image')); ?></th>
                                <th> <?php echo e(trans('admin.category_name')); ?> </th>
                                <th><?php echo e(trans('admin.category_description')); ?></th>
                                <th><?php echo e(trans('admin.added_by')); ?></th>
                                <th><?php echo e(trans('admin.number_of_product')); ?>  </th>
                                <th><?php echo e(trans('admin.created_at')); ?></th>
                                <th><?php echo e(trans('admin.updated_at')); ?></th>
                                <th> <?php echo e(trans('admin.edit')); ?> </th>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
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



<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Apdoo\Desktop\New folder\New folder\book-store\resources\views/admin/category/index.blade.php ENDPATH**/ ?>