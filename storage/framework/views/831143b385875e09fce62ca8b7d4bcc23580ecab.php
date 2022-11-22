<?php echo $__env->make('website.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <a class="navbar-brand" href="#">Axit</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#Axit">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!-- /.navbar-inverse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- start header -->

<div class="header">
    <div class="overlay">
        <div class="container">
            <div class="row center-vh">
                <div class="col-md-6">
                    <h1 class="uppercase">Ax<span>it</span></h1>
                    <p class="lead uppercase">
                        Family law consists of a wide body of laws related to domestic relations and family related issues
                    </p>
                    <p>Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage, civil unions, and domestic partnership; issues arising during marriage; legitimacy; adoption; surrogacy; child abuse;, child abduction; divorce; annulment; paternity and many more</p>
                    <button>Download</button>
                </div>
                <div class="col-md-6">
                    <form class="center-block">
                        <h2 class="text-center">Tray Your <span>Free</span> Trial Today</h2>
                        <input class="form-control" type="text" name="username" placeholder="Name">
                        <input class="form-control" type="password" name="password" placeholder="password">
                        <input class="form-control" type="email" name="email" placeholder="E-mail">
                        <input class="btn btn-block"  type="submit" name="Get Started" value="Get Started">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end header-->
<!-- start social medea-->
<div class="sociall">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4> Sociale Media </h4>
                <p>Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,</p>

            </div>
            <div class="col-md-8">
                <i class="fa fa-facebook fa-3x fa-fw" href="https://www.facebook.com/ibrahim2apdoo"></i>
                <i class="fa fa-twitter fa-3x fa-fw"></i>
                <i class="fa fa-google-plus fa-3x fa-fw"></i>
                <i class="fa fa-pinterest fa-3x fa-fw"></i>
                <i class="fa fa-instagram fa-3x fa-fw"></i>
                <i class="fa fa-stumbleupon fa-3x fa-fw"></i>
                <i class="fa fa-rss fa-3x fa-fw"></i>
            </div>
        </div>
    </div>
</div>

<!--end social medea-->
<!--start tabs -->

<div class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ul class="list-unstyled tab-switch">
                    <li class="selected" data-class= tab-one>Tab 1</li>
                    <li data-class= tab-tow>Tab 2</li>
                    <li data-class= tab-three>Tab 3</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="tab-content">
                    <div class="tab-one">
                        <h2>laws related to domestic  one</h2>
                        <p class="lead">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,
                            Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage</p>
                        <button class="btn btn-lg"> Download </button>
                    </div>
                    <div class="tab-tow">
                        <h2>laws related to domestic  tow</h2>
                        <p class="lead">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,
                            Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage</p>
                        <button class="btn btn-lg"> Download </button>
                    </div>
                    <div class="tab-three">
                        <h2>laws related to domestic three </h2>
                        <p class="lead">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,
                            Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage</p>
                        <button class="btn btn-lg"> Download </button>
                    </div>
                </div>

            </div>
            <div class="tab-content">
                <div class=" img-r tab-one  col-md-4" data-class="tab-one">

                    <img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 100px;height: 100px;">


                </div>
                <div class="img-r tab-tow col-md-4" data-class="tab-tow">

                    <img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 100px;height: 100px;">


                </div>
                <div class="img-r tab-three col-md-4" data-class="tab-three">

                    <img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 100px;height: 100px;">


                </div>
            </div>
        </div>
    </div>
</div>
<!--end tabs-->
<!-- start sublist-->
<div class="sublist">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 100px;height: 100px;">
            </div>
            <div class="col-md-6">
                <div class="list-info">
                    <h3 class="head-border"> sub list section </h3>
                    <p class="sublist-disc">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,</p>
                    <div class="list-icon ">
                        <i class="fa fa-cloud-download fa-lg pull-left "></i>
                        <div class="text-info pull-left">
                            <h4> Download </h4>
                            <p class="sublist-disc">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,</p>
                        </div>
                    </div>
                    <div class="clearfi"></div>
                    <div class="list-icon ">
                        <i class="fa fa-cloud-upload fa-lg pull-left "></i>
                        <div class="text-info pull-left">
                            <h4> Upload </h4>
                            <p class="sublist-disc">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end sublist-->

<div class="sub">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="list-info">
                    <h3 class=" stsandered-head head-border"> Standered picteure </h3>
                    <p class="sublist-disc">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,
                        Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage,Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 100px;height: 100px;">

            </div>
        </div>
    </div>
</div>

<!-- start this awesome -->
<div class="awesome text-center">
    <div class="container">
        <h2 class=" awesome-head h1 uppercase head-border-center">Why This Is Awesome </h2>
        <p class="awesome-disc">
            Family law consists of a wide body of laws related to domestic
        </p>
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-lightbulb-o fa-3x"></i>
                <h3 class="feet-head">Thoughtful Desgin</h3>
                <p class="feet-info">Family law consists of a wide body of laws related to domestic relations and family related issues</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-keyboard-o fa-3x"></i>
                <h3 class="feet-head">Well Crafted</h3>
                <p class="feet-info">Family law consists of a wide body of laws related to domestic relations and family related issues</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-flash fa-3x"></i>
                <h3 class="feet-head">Easy  To Customeze</h3>
                <p class="feet-info">Family law consists of a wide body of laws related to domestic relations and family related issues</p>
            </div>
        </div>
    </div>
</div>
<!-- end this awesome -->
<!-- start price section -->
<div class="price-option text-center">
    <div class="container">
        <h2 class=" price-head h1 uppercase head-border-center">price option </h2>
        <p class="price-disc">
            Family law consists of a wide body of laws related to domestic
        </p>
        <div class="row">
            <div class="col-md-4">
                <div class="price-box one">
                    <h2 class="plan-head "> Basic</h2>
                    <div class="option-price">
                  <span class="price">
                    <span class="usd">$</span>0
                  </span>
                        <span class="period">Free For Life</span>
                    </div>
                    <ul class="list-unstyled confgration" >
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-box">
                    <h2 class="plan-head"> Basic</h2>
                    <div class="option-price">
                  <span class="price">
                    <span class="usd">$</span>19
                  </span>
                        <span class="period">Free For Life</span>
                    </div>
                    <p class="our-pop">our most puprlar</p>
                    <ul class="list-unstyled confgration" >
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-box three">
                    <h2 class="plan-head"> Basic</h2>
                    <div class="option-price">
                  <span class="price">
                    <span class="usd">$</span>70
                  </span>
                        <span class="period">Free For Life</span>
                    </div>
                    <ul class="list-unstyled confgration" >
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                        <li>1 GP for Space</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end price section -->

<!-- start this testimonials -->
<div class="testimonials">
    <div class="container">
        <h2 class=" tes-head h1  text-center uppercase head-border-center">What our customer are saying</h2>
        <p class="tes-disc  text-center">
            Family law consists of a wide body of laws related to domestic
        </p>
        <div class="row">
            <div class="col-md-4">
                <p class="cleint-say">Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic</p>
                <!--start media colomne 4-->
                <div class="media">
                    <div class="media-left">
                        <img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 150px; height: 150px;
              border-radius: 50%; border: 3px solid #F7F1F1;"">

                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">ibrahim .h</h4>
                        <p class="media-p">manager</p>
                    </div>
                </div>
                <!--start media colomne 4-->
            </div>
            <div class="col-md-4">
                <p class="cleint-say">Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic</p>
                <!--start media colomne 4-->
                <div class="media">
                    <div class="media-left">
                        <img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 150px; height: 150px;
              border-radius: 50%; border: 3px solid #F7F1F1;"">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">ibrahim .h</h4>
                        <p  class="media-p">manager</p>
                    </div>
                </div>
                <!--start media colomne 4-->
            </div>
            <div class="col-md-4">
                <p class="cleint-say">Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic Family law consists of a wide body of laws related to domestic</p>
                <!--start media colomne 4-->
                <div class="media">
                    <div class="media-left"><img src="<?php echo e(Storage::url($about->sitImage)); ?>" style="width: 150px; height: 150px;
              border-radius: 50%; border: 3px solid #F7F1F1;""> <img style="width: 150px; height: 150px;
              border-radius: 50%; border: 3px solid #F7F1F1;" src="img/11.jpg">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">ibrahim .h</h4>
                        <p  class="media-p">manager</p>
                    </div>
                </div>
                <!--start media colomne 4-->
            </div>
        </div>
    </div>
</div>
<!-- end testimonials-->
<div class="stylish">
    <div class="overlay">
        <div class="container">
            <h2 class="stylish-hesd text-center h1 head-border-center uppercase"> Family law consists of a wide body of laws</h2>
            <p class="stylish-disc">Family law consists of a wide body of laws related to domestic relations and family related issues. Marriage, civil unions, and domestic partnership; issues arising during marriage; legitimacy; adoption; surrogacy; child abuse;, child abduction; divorce; annulment; paternity and many more</p>
            <button class="stylish-btn">Download</button>
        </div>
    </div>
</div>
<!-- start contact us  -->
<?php echo $__env->make('website.contact_us', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end contact us  -->
<!-- start footer-->
<?php echo $__env->make('website.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\pc\Desktop\book-store-master\resources\views/website/home.blade.php ENDPATH**/ ?>