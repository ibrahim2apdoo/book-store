<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if(app()->getLocale() == "ar"): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/styleAr.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/bootstrapAr.css">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/style.css">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/font-awesome.min.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-inverse navbar-inverse navbar-fixed-top shadow-sm navbar-expand-md">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

        <a class="navbar-brand" href="<?php echo e(url('/home')); ?>"><?php echo e($about->first()->siteName); ?></a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <?php if(auth()->user()->role=='admin'): ?>
                    <li><a href="<?php echo e(url('/adminpanel')); ?>"><?php echo e(trans('admin.adminpanel')); ?></a></li>
                <?php endif; ?>
                <li><a href="<?php echo e(url('/home')); ?>"><?php echo e(trans('admin.home')); ?></a></li>
                <li><a href="<?php echo e(url('about_us')); ?>"><?php echo e(trans('admin.about_us')); ?></a></li>
                <li><a href="<?php echo e(url('contact')); ?>"><?php echo e(trans('admin.Contact')); ?></a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(LaravelLocalization::getCurrentLocaleNative()); ?>

                    </a>
                    <div class="dropdown-menu dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
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
<?php /**PATH E:\project book-store\book-store\resources\views/website/header.blade.php ENDPATH**/ ?>