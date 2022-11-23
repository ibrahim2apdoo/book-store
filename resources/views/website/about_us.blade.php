@include('website.header')
<div class="sub">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="list-info">
                    <h3 class=" stsandered-head head-border"> About Us </h3>
                    <p class="sublist-disc">
                        {{$about->first()->sitDescription}}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive center-block sub-img" src="{{asset('storage/public/'.$about->first()->sitImage)}}">
            </div>
        </div>
    </div>
</div>

@include('website.footer')
