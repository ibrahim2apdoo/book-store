<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if(app()->getLocale() == "ar"): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/styleAr.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/bootstrapAr.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/wow.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/rtl/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="<?php echo e(url('/')); ?>/design/adminlte/dist/css/rtl/rtl.css">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/style.css">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/wow.css">

</head>
<body>
<nav class="navbar navbar-inverse navbar-inverse navbar-fixed-top shadow-sm navbar-expand-md">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="logo">
            <a class="navbar-brand" href="<?php echo e(url('/home')); ?>"><img class="image-logo"
                                                                 src="<?php echo e(asset('storage/image/log1.png')); ?>"></a>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li><a href="<?php echo e(url('/home')); ?>"><?php echo e(trans('admin.home')); ?></a></li>
                <li><a href="<?php echo e(url('about_us')); ?>"><?php echo e(trans('admin.about_us')); ?></a></li>
                <li><a href="<?php echo e(url('contact')); ?>"><?php echo e(trans('admin.Contact')); ?></a></li>
                <li><a href="<?php echo e(route('cart.list')); ?>" class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <?php echo e(Cart::getTotalQuantity()); ?>

                    </a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(trans('admin.logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(LaravelLocalization::getCurrentLocaleNative()); ?>

                    </a>
                    <div class="dropdown-menu dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                               href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <!-- Message Start -->
                                <div class="media">
                                    <div class="media-body">
                                        <P class="dropdown-item-title">
                                            <i class="fa fa-flag"></i>
                                            <?php echo e($properties['native']); ?>

                                        </P>

                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </li>
            </ul>
        </div><!-- /.navbar-inverse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- start header -->
<?php /**PATH C:\Users\Apdoo\Desktop\New folder\New folder\book-store\resources\views/website/header.blade.php ENDPATH**/ ?>