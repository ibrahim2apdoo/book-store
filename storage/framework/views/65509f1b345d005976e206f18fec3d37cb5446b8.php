<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="sub">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="list-info">
                    <h3 class=" stsandered-head head-border"> <?php echo e(trans('admin.about_us')); ?> </h3>
                    <p class="sublist-disc">
                        <?php echo e($about->first()->sitDescription); ?>

                    </p>
                </div>
                <div class="social-auth-links">
                    <div class="col-lg-6 ">
                            <h4> <?php echo e(trans('admin.ourOffice')); ?> </h4>
                            <p><?php echo e($about->first()->siteName); ?></p>
                        <br>
                                <i class="fa fa-map-marker fa-2x" ></i>
                        <br>
                                <hp><?php echo e($about->first()->address); ?></hp>

                    </div>
                    <div class="col-md-6">
                        <i class=" mt-4 fa-2x fa fa-mobile-phone" ></i>
                        <br>
                        <p><?php echo e($about->first()->phone); ?></p>
                        <br>
                        <i class=" fa fa-envelope mt-4 fa-2x"></i>
                        <br>
                        <hp><?php echo e($about->first()->email); ?></hp>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive center-block sub-img" src="<?php echo e(asset('storage/public/'.$about->first()->sitImage)); ?>">
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\pc\Desktop\New folder\book-store\resources\views/website/about_us.blade.php ENDPATH**/ ?>