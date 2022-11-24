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
                <div class="social-auth-links" style="margin-top: 100px;float: left;">
                        <a href="<?php echo e($about->first()->facebook); ?>"> <i class="fa fa-facebook fa-3x fa-fw"></i></a>
                        <a href="<?php echo e($about->first()->tweeter); ?>">  <i class="fa fa-twitter fa-3x fa-fw" ></i></a>
                        <a href="<?php echo e($about->first()->linkin); ?>">   <i class="fa fa-linkedin fa-3x fa-fw"></i></a>
                </div>
                <div class="social-auth-links" style="margin-top: 100px;float: right;">
                        <a href="<?php echo e($about->first()->facebook); ?>"> <i class="fa fa-facebook fa-3x fa-fw"></i></a>
                        <a href="<?php echo e($about->first()->tweeter); ?>">  <i class="fa fa-twitter fa-3x fa-fw" ></i></a>
                        <a href="<?php echo e($about->first()->linkin); ?>">   <i class="fa fa-linkedin fa-3x fa-fw"></i></a>
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