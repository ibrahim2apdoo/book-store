<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="header">
    <div class="overlay">
        <div class="container">
            <div class="row center-vh">
                <div class="col-md-12">
                    <div class="word-rtl">
                    <h1 class="uppercase "><?php echo e(trans('admin.book_store')); ?></h1>
                    <p class="uppercase">
                        <?php echo e($about->first()->sitDescription); ?>

                    </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end header-->
<!-- start price section -->
<div class="price-option text-center">
    <div class="container">
        <h2 class=" price-head h1 uppercase head-border-center text-center"><?php echo e(trans('admin.our_categories')); ?> </h2>
        <p class="price-disc">
            <?php echo e($about->first()->sitDescription); ?>

        </p>
        <div class="row">
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryDesc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="price-box one">
                    <h2 class="plan-head "> <?php echo e($categoryDesc->category_name); ?></h2>
                    <div class="option-price" style="height: 359px">
                  <span class="price" style="width: 100% ; height: 100%">
                      <img src="<?php echo e(asset('storage/'.$categoryDesc->category_image)); ?>" style="width: 100%; height: 100%">
                  </span>
                    </div>
                    <ul class="list-unstyled confgration" >
                        <li style="height: 180px;"><?php echo e($categoryDesc->category_description); ?></li>
                    </ul>
                    <h4> <a class="lead uppercase btn btn-primary" href="show_product/<?php echo e($categoryDesc->id); ?>"><?php echo e($categoryDesc->category_name); ?> </a></h4>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="clearfix"></div>
            <div class="align-content-center" style="text-align: center">
                <?php echo e($category->render()); ?>

            </div>

        </div>
    </div>
</div>
<!-- end price section -->

<!-- start footer-->
<?php echo $__env->make('website.footer',$about, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\Users\pc\Desktop\book-store-master\book-store\resources\views/website/index.blade.php ENDPATH**/ ?>