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
                                <th> Delete </th>
                                <th> User Name </th>
                                <th>User E-mail</th>
                                <th>Subject</th>
                                <th>Massage</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contactInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo Form::open(['id'=>'form_delete','url'=>url('contact/'.$contactInfo->id),'method'=>'delete']); ?>

                                        <?php echo Form::submit('Delete',['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']); ?>

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
                                <th> Delete </th>
                                <th> User Name </th>
                                <th>User E-mail</th>
                                <th>Subject</th>
                                <th>Massage</th>
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



<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\book-store-master\resources\views/contact/index.blade.php ENDPATH**/ ?>