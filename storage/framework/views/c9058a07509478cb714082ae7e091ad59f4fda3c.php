<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="about_us" >
    <div class="container">
        <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="list-info">
                        <h3 class="head-border"> <?php echo e(trans('admin.about_us')); ?> </h3>
                        <p class="sublist-disc">
                            <?php echo e($about->first()->sitDescription); ?>

                        </p>
                    </div>
                    <div class="social-auth-links">
                        <div class="col-lg-6 col-md-6">
                            <br>
                                <h4> <?php echo e(trans('admin.ourOffice')); ?> </h4>
                                <p><?php echo e($about->first()->siteName); ?></p>
                            <br>
                                    <i class="fa fa-map-marker fa-2x" ></i>
                            <br>
                                    <p><?php echo e($about->first()->address); ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6 ">

                            <i class=" mt-4 fa-2x fa fa-mobile-phone" ></i>

                            <p><?php echo e($about->first()->phone); ?></p>

                            <i class=" fa fa-envelope mt-4 fa-2x"></i>

                            <p><?php echo e($about->first()->email); ?></p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive center-block sub-img" src="<?php echo e(asset('storage/'.$about->first()->sitImage)); ?>">
                </div>
            </div>
        </div>
    </div>

<?php echo $__env->make('website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\pc\Desktop\book-store-master\book-store\resources\views/website/about_us.blade.php ENDPATH**/ ?>