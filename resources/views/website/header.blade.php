<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/website/website/css/font-awesome.min.css">

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
            <a class="navbar-brand" href="{{url('/home')}}">{{$about->first()->siteName}}</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/home')}}">{{trans('admin.home')}}</a></li>
                <li><a href="{{url('about_us')}}">{{trans('admin.about_us')}}</a></li>
                <li><a href="{{url('contact')}}">{{trans('admin.Contact')}}</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ LaravelLocalization::getCurrentLocaleNative() }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <!-- Message Start -->
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            <i class="fa fa-flag"></i>
                                            {{ $properties['native'] }}
                                        </h3>

                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                        @endforeach
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-inverse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- start header -->
