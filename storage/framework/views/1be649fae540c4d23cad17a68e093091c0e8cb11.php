

<?php $__env->startSection('content'); ?>
    <!-- Main content -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title" style="text-align: center"><?php echo e($title); ?></h3>
        </div>
        <div class="box-body ">
            <?php echo Form::open(['url'=>url('category/'.$category->id),'method'=>'put','files'=>true]); ?>

            <div class="form-group">
                <?php echo Form::label('category_name'); ?>

                <?php echo Form::text('category_name',$category->category_name,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('category description'); ?>

                <?php echo Form::text('category_description',$category->category_description,['class'=>'form-control']); ?>

            </div>
            <div class="form-group ">
                <?php if(!empty($category->category_image)): ?>
                    <img src="<?php echo e(asset('storage/public/'. $category->category_image)); ?>" style="width: 50px;height: 50px;">
                <?php endif; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo Form::label('category image'); ?>

                    </div>
                    <div class="col-lg-12">
                        <?php echo Form::file('category_image',['class'=>'form-control']); ?>

                    </div>
                </div>

            </div>
        </div>
        <?php echo Form::submit('Edit',['class'=>'btn btn-primary form-control']); ?>

        <?php echo Form::close(); ?>

        <!-- /.card-body -->
        <!-- /.card -->
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Apdoo\Desktop\New folder\New folder\book-store\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>