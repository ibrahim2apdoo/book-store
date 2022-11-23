<?php $__env->startSection('content'); ?>
    <!-- Main content -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?php echo e($title); ?></h3>
        </div>
        <div class="box-body ">
            <!-- 'route'=>['admin.update',$admin->id] function or url aurl('admin/'.$admin->id) this header for store function  -->
            <?php echo Form::open(['url'=>url('users/'.$user->id),'method'=>'put']); ?>

            <div class="form-group">
                <?php echo Form::label('name',trans('admin.name')); ?>

                <?php echo Form::text('name',$user->name,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('email',trans('admin.email')); ?>

                <?php echo Form::email('email',$user->email,['class'=>'form-control']); ?>

            </div>
            <div class="form-group ">
                <?php echo Form::label('password',trans('admin.password')); ?>

                <?php echo Form::password('password',['class'=>'form-control']); ?>

            </div>
            <div class="form-group ">
                <?php echo Form::label('role',trans('admin.role')); ?>

                <?php echo Form::select('role',['user'=>trans('admin.user'),'admin'=>trans('admin.admins')],$user->Level,['class'=>'form-control','placeholder'=>trans('admin.role')]); ?>

            </div>
        <?php echo Form::submit(trans('admin.edit_admin'),['class'=>'btn btn-primary form-control']); ?>

        <?php echo Form::close(); ?>

        <!-- route admin.store function or url aurl('admin') this header for store function  -->

        </div>
        <!-- /.card-body -->
        <!-- /.card -->
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\New folder\book-store\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>