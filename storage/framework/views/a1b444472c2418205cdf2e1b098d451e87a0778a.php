

<?php $__env->startSection('content'); ?>
    <!-- Main content -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title" style="text-align: center"><?php echo e($title); ?></h3>
        </div>
        <div class="box-body ">
            <!-- 'route'=>['admin.update',$admin->id] function or url aurl('admin/'.$admin->id) this header for store function  -->
            <?php echo Form::open(['url'=>url('product/'.$product->id),'method'=>'put','files'=>true]); ?>

            <div class="form-group">
                <?php echo Form::label('product_name'); ?>

                <?php echo Form::text('product_name',$product->product_name,['class'=>'form-control']); ?>

            </div>
            <div class="form-group ">
                <?php if(!empty($product->product_image)): ?>
                    <img src="<?php echo e(asset('storage/public/'.$product->product_image)); ?>" style="width: 50px;height: 50px;">
                <?php endif; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo Form::label('product_image'); ?>

                    </div>
                    <div class="col-lg-12">
                        <?php echo Form::file('product_image',['class'=>'form-control']); ?>

                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('product_description'); ?>

                <?php echo Form::text('product_description',$product->product_description,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('product_price'); ?>

                <?php echo Form::text('product_price',$product->product_price,['class'=>'form-control']); ?>

            </div>
            <div class="form-group ">
                <?php echo Form::label('product_quantity'); ?>

                <?php echo Form::text('product_quantity',$product->product_quantity,['class'=>'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('category name'); ?>

                <select class="selectpicker form-control" name="category_id" id="number" data-live-search="true">
                    <option value="<?php echo e($product->products->id); ?>"><?php echo e($product->products->category_name); ?></option>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categoryinfo->id); ?>"><?php echo e($categoryinfo->category_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <?php echo Form::submit('Edit',['class'=>'btn btn-primary form-control']); ?>

        <?php echo Form::close(); ?>

        <!-- /.card-body -->
        <!-- /.card -->
    </div>
    <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\project book-store\book-store\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>