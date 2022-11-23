

<?php $__env->startSection('content'); ?>
    <!-- Main content -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title" style="text-align: center"><?php echo e($title); ?></h3>
        </div>
        <div class="box-body ">
            <?php echo Form::open(['url'=>url('product'),'files'=>true]); ?>

            <div class="form-group">
                <?php echo Form::label('product_name'); ?>

                <?php echo Form::text('product_name',old('product_name'),['class'=>'form-control']); ?>

            </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo Form::label('product image'); ?>

                    </div>
                    <div class="col-lg-12">
                        <?php echo Form::file('product_image',['class'=>'form-control']); ?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('product description'); ?>

                <?php echo Form::text('product_description',old('product_description'),['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('product price'); ?>

                <?php echo Form::text('product_price',old('product_price'),['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('product quantity'); ?>

                <?php echo Form::text('product_quantity',old('product_quantity'),['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('category name'); ?>

                <select class="selectpicker form-control" name="category_id" id="number" data-live-search="true">
                    <option value="disabled selected hidden">Select category</option>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categoryinfo->id); ?>"><?php echo e($categoryinfo->category_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
    <?php echo Form::submit('save',['class'=>'btn btn-primary form-control']); ?>

    <?php echo Form::close(); ?>

    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\New folder\book-store\resources\views/product/create.blade.php ENDPATH**/ ?>