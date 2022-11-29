<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- start contact us  -->
<div class="contact-us">
    <div class="container">
        <?php echo $__env->make('layouts.massage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h2 class="contact-hesd text-center h1 head-border-center uppercase"><?php echo e(trans('admin.Contact')); ?> </h2>
        <div class="row mb-4">
            <div class="col-md-4 text-center">
                <ul class="list-unstyled mb-0">
                    <h1><?php echo e(trans('admin.ourOffice')); ?> </h1>
                    <h4><?php echo e($about->first()->siteName); ?></h4>

                    <hr>

                    <li  ><i class="fa fa-map-marker fa-2x" ></i>
                        <h4><?php echo e($about->first()->address); ?></h4>
                    </li>
                    <hr>
                    <li ><i class=" mt-4 fa-2x fa fa-mobile-phone" ></i>
                        <h4><?php echo e($about->first()->phone); ?></h4>
                    </li>
                    <hr>
                    <li ><i class=" fa fa-envelope mt-4 fa-2x"></i>
                        <h4><?php echo e($about->first()->email); ?></h4>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 mb-md-0 mb-5">
                <?php echo Form::open(['url'=>'/contact' , 'method'=>'post']); ?>

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text"  name="contact_name" placeholder="<?php echo e(trans('admin.Enter_Your_Name')); ?>" value="<?php echo e(Auth::user() ? Auth::user()->name : ""); ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text"  name="contact_email"placeholder="<?php echo e(trans('admin.Enter_Your_E-mail')); ?>" value="<?php echo e(Auth::user() ? Auth::user()->email : ""); ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text" name="contact_subject" placeholder="<?php echo e(trans('admin.Enter_Your_Subject')); ?>">
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 20px;margin-top: 30px;">
                        <div class="md-form">
                            <textarea class="form-control input-lg" type="text" name="contact_massage" placeholder="<?php echo e(trans('admin.Massage')); ?>" rows="10"></textarea>
                        </div>
                    </div>
                <div class="form-group">
                    <?php echo Form::submit(trans('admin.send'),['class'=>'contact-btn' ]); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>

    </div>
</div>
<!-- end contact us  -->
<?php echo $__env->make('website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\pc\Desktop\book-store-master\book-store\resources\views/website/contact_us.blade.php ENDPATH**/ ?>