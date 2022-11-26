<div class="tabs">

<div class="container">
    <h1 class="text-center head-border-center "><?php echo e(trans('admin.Our_Product')); ?></h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $productinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>" style="width: 100% ;height: 400px">
                    <img src="<?php echo e(asset('storage/'.$productinfo->product_image)); ?>" style="height:100%;width: 100%">
                    <div class="carousel-caption">
                        <h1 style="color: orange"><?php echo e($productinfo->product_name); ?></h1>
                        <h3 style="color: black"><?php echo e($productinfo->product_description); ?></h3>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true" >     </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
</div>
<?php /**PATH E:\project book-store\book-store\resources\views/website/ourProduct/ourproduct.blade.php ENDPATH**/ ?>