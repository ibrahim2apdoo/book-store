<?php if(count($errors->all())>0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>


<?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h2>
            <?php echo e(session('success')); ?>

        </h2>
    </div>
    <?php endif; ?>
<?php /**PATH E:\project book-store\book-store\resources\views/admin/layouts/massage.blade.php ENDPATH**/ ?>