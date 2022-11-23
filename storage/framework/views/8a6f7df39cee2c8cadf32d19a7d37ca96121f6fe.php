

<?php $__env->startSection('content'); ?>
    <!-- Main content -->

        <div class="box">
            <div class="box-header">
                <h3 class="box-title" style="text-align: center"><?php echo e($title); ?></h3>
            </div>
            <div class="box-body ">
                <?php echo Form::open(['url'=>url('category'),'files'=>true]); ?>

                <div class="form-group">
                    <?php echo Form::label('category_name'); ?>

                    <?php echo Form::text('category_name',old('country_name_ar'),['class'=>'form-control']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('category description'); ?>

                    <?php echo Form::text('category_description',old('category_description'),['class'=>'form-control']); ?>

                </div>
                <div class="form-group ">
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
            <?php echo Form::submit('save',['class'=>'btn btn-primary form-control']); ?>

            <?php echo Form::close(); ?>

            <!-- route admin.store function or url aurl('admin') this header for store function  -->
        </div>
        <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\New folder\book-store\resources\views/category/create.blade.php ENDPATH**/ ?>