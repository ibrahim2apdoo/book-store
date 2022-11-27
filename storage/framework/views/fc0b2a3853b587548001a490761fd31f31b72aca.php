

<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover table-responsive">
                            <thead>
                            <tr>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
                                <th> <?php echo e(trans('admin.User_Name')); ?> </th>
                                <th><?php echo e(trans('admin.User_E-mail')); ?></th>
                                <th><?php echo e(trans('admin.Subject')); ?></th>
                                <th><?php echo e(trans('admin.Massage')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo Form::open(['id'=>'form_delete','url'=>url('contact/'.$contactInfo->id),'method'=>'delete']); ?>

                                        <?php echo Form::submit(trans('admin.delete'),['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

                                        <?php echo Form::close(); ?>

                                    </td>
                                    <td><?php echo e($contactInfo->contact_name); ?></td>
                                    <td><?php echo e($contactInfo->contact_email); ?></td>
                                    <td><?php echo e($contactInfo->contact_subject); ?></td>
                                    <td><?php echo e($contactInfo->contact_massage); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> <?php echo e(trans('admin.delete')); ?> </th>
                                <th> <?php echo e(trans('admin.User_Name')); ?> </th>
                                <th><?php echo e(trans('admin.User_E-mail')); ?></th>
                                <th><?php echo e(trans('admin.Subject')); ?></th>
                                <th><?php echo e(trans('admin.Massage')); ?></th>
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



<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\book-store-master\book-store\resources\views/admin/contact/index.blade.php ENDPATH**/ ?>