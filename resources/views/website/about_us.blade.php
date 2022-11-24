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
                <div class="social-auth-links">
                    <div class="col-lg-6 ">
                            <h4> {{trans('admin.ourOffice')}} </h4>
                            <p>{{$about->first()->siteName}}</p>
                        <br>
                                <i class="fa fa-map-marker fa-2x" ></i>
                        <br>
                                <hp>{{$about->first()->address}}</hp>

                    </div>
                    <div class="col-md-6">
                        <i class=" mt-4 fa-2x fa fa-mobile-phone" ></i>
                        <br>
                        <p>{{$about->first()->phone}}</p>
                        <br>
                        <i class=" fa fa-envelope mt-4 fa-2x"></i>
                        <br>
                        <hp>{{$about->first()->email}}</hp>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive center-block sub-img" src="{{asset('storage/public/'.$about->first()->sitImage)}}">
            </div>
        </div>
    </div>
</div>

@include('website.footer')
