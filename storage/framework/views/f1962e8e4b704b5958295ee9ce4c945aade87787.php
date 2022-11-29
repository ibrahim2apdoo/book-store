<div class="price-option text-center">
    <div class="container">
        <h2 class=" price-head h1 uppercase head-border-center text-center"><?php echo e(trans('admin.our_categories')); ?> </h2>
        <p class="price-disc">
            <?php echo e($about->first()->sitDescription); ?>

        </p>
        <div class="row">
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryDesc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="price-box">
                        <h2 class="plan-head "> <?php echo e($categoryDesc->category_name); ?></h2>
                        <div class="option-price">
                  <span class="price">
                      <img src="<?php echo e(asset('storage/'.$categoryDesc->category_image)); ?>">
                  </span>
                        </div>
                        <ul class="list-unstyled confgration" >
                            <li>
                                <p><?php echo e($categoryDesc->category_description); ?></p>
                            </li>
                        </ul>
                        <h4> <a class=" uppercase btn btn-primary" href="show_product/<?php echo e($categoryDesc->id); ?>"><?php echo e($categoryDesc->category_name); ?> </a></h4>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="clearfix"></div>
            <div class="align-content-center" style="text-align: center">

            </div>

        </div>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="align-content-center text-center">
                    <?php echo e($category->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\pc\Desktop\book-store-master\book-store\resources\views/website/ourCategory.blade.php ENDPATH**/ ?>