@include('website.header')
<div class="sub">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="list-info">
                    <h3 class=" stsandered-head head-border"> {{trans('admin.about_us')}} </h3>
                    <p class="sublist-disc">
                        {{$about->first()->sitDescription}}
                    </p>
                </div>
                <div class="social-auth-links" style="margin-top: 100px;float: left;">
                        <a href="{{$about->first()->facebook}}"> <i class="fa fa-facebook fa-3x fa-fw"></i></a>
                        <a href="{{$about->first()->tweeter}}">  <i class="fa fa-twitter fa-3x fa-fw" ></i></a>
                        <a href="{{$about->first()->linkin}}">   <i class="fa fa-linkedin fa-3x fa-fw"></i></a>
                </div>
                <div class="social-auth-links" style="margin-top: 100px;float: right;">
                        <a href="{{$about->first()->facebook}}"> <i class="fa fa-facebook fa-3x fa-fw"></i></a>
                        <a href="{{$about->first()->tweeter}}">  <i class="fa fa-twitter fa-3x fa-fw" ></i></a>
                        <a href="{{$about->first()->linkin}}">   <i class="fa fa-linkedin fa-3x fa-fw"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive center-block sub-img" src="{{asset('storage/public/'.$about->first()->sitImage)}}">
            </div>
        </div>
    </div>
</div>

@include('website.footer')
