<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/')); ?>/website/website/css/font-awesome.min.css">

</head>
<body>
<!-- start nav bar-->
<nav class="navbar navbar-inverse navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Axit" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e($about->first()->siteName); ?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('about_us')); ?>">About Us</a></li>
                <li><a href="<?php echo e(url('contact')); ?>">Contact Us</a></li>
            </ul>
        </div><!-- /.navbar-inverse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- start header -->
<?php /**PATH C:\Users\pc\Desktop\book-store-master\resources\views/website/header.blade.php ENDPATH**/ ?>