@include('website.header')

<div class="header">
    <div class="overlay">
        <div class="container">
            <div class="row center-vh">
                <div class="col-md-12">
                    <h1 class="uppercase">{{trans('admin.book_store')}}</h1>
                    <p class="uppercase">
                        {{$about->first()->sitDescription}}
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end header-->
<!-- start price section -->
<div class="price-option text-center">
    <div class="container">
        <h2 class=" price-head h1 uppercase head-border-center text-center">{{trans('admin.our_categories')}} </h2>
        <p class="price-disc">
            {{$about->first()->sitDescription}}
        </p>
        <div class="row">
        @foreach($category as $categoryDesc)
            <div class="col-md-4">
                <div class="price-box one">
                    <h2 class="plan-head "> {{$categoryDesc->category_name}}</h2>
                    <div class="option-price" style="height: 359px">
                  <span class="price" style="width: 100% ; height: 100%">
                      <img src="{{asset('storage/'.$categoryDesc->category_image)}}" style="width: 100%; height: 100%">
                  </span>
                    </div>
                    <ul class="list-unstyled confgration" >
                        <li style="height: 180px;">{{$categoryDesc->category_description}}</li>
                    </ul>
                    <h4> <a class="lead uppercase btn btn-primary" href="show_product/{{$categoryDesc->id}}">{{$categoryDesc->category_name}} </a></h4>
                </div>
            </div>
        @endforeach
            <div class="clearfix"></div>
            <div class="align-content-center" style="text-align: center">
                {{$category->render()}}
            </div>

        </div>
    </div>
</div>
<!-- end price section -->

<!-- start footer-->
@include('website.footer',$about)

