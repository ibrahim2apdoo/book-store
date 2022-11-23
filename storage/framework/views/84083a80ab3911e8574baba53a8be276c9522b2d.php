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
                                <th> delete </th>
                                <th> edit </th>
                                <th> created at </th>
                                <th> updated at </th>
                                <th> category name </th>
                                <th>category description</th>
                                <th>added by</th>
                                <th> number of product </th>
                                <th>category image</th>
                                <th>category id </th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo Form::open(['id'=>'form_delete','url'=>url('category/'.$categoryinfo->id),'method'=>'delete']); ?>

                                        <?php echo Form::submit('Delete',['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="<?php echo e(url ('category/'.$categoryinfo->id .'/edit')); ?> "> <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td><?php echo e($categoryinfo->created_at); ?></td>
                                    <td><?php echo e($categoryinfo->updated_at); ?></td>
                                    <td><a href="category/<?php echo e($categoryinfo->id); ?>"><?php echo e($categoryinfo->category_name); ?></a></td>
                                    <td><?php echo e($categoryinfo->category_description); ?></td>
                                    <td><?php echo e($categoryinfo->categories->name); ?></td>
                                    <td><?php echo e($categoryinfo->products()->count()); ?></td>
                                    <td>
                                        <?php if(!empty($categoryinfo->category_image)): ?>
                                            <img src="<?php echo e(asset('storage/public/'.$categoryinfo->category_image)); ?>" style="width: 100px;height: 100px;">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($categoryinfo->id); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> category name </th>
                                <th> delete </th>
                                <th> edit </th>
                                <th> created at </th>
                                <th> updated at </th>
                                <th>category description</th>
                                <th>added by</th>
                                <th> number of product </th>
                                <th>category image</th>
                                <th>category id </th>
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



<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\New folder\book-store\resources\views/category/index.blade.php ENDPATH**/ ?>