<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="header">
    <div class="overlay">
        <div class="container">
            <div class="row center-vh">
                <div class="col-md-6 " style="float: left">
                    <div class="word-rtl word-rtl-category">
                        <div class="button">
                        <span>
                            <?php echo e(trans('admin.BEST_AVAILABLE')); ?>

                        </span>
                        </div>
                    <h1 class="uppercase "><?php echo e(trans('admin.book_store')); ?></h1>
                    <p class=" uppercase">
                        <?php echo e($about->first()->sitDescription); ?>

                    </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end header-->
<!--start services-->
<?php echo $__env->make('website.our-Services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end our services-->

<!--start our-product-->
<?php echo $__env->make('website.our-product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--end our our-product-->
<!--end banner-section-->
<?php echo $__env->make('website.banner-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--start banner-section-->
<!-- start price section -->
<?php echo $__env->make('website.ourCategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end price section -->

<!-- start footer-->
<?php echo $__env->make('website.footer',$about, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\Users\pc\Desktop\book-store-master\book-store\resources\views/website/index.blade.php ENDPATH**/ ?>