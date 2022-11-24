@include('website.header')

<!-- start contact us  -->
<div class="contact-us">
    <div class="container">
        @include('layouts.massage')
        <h2 class="contact-hesd text-center h1 head-border-center uppercase">{{trans('admin.Contact')}} </h2>
        <div class="row">
            <div class="col-md-12 mb-md-0 mb-5">
                {!! Form::open(['url'=>'/contact' , 'method'=>'post']) !!}
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text"  name="contact_name" placeholder="{{trans('admin.Enter_Your_Name')}}" value="{{Auth::user() ? Auth::user()->name : ""}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text"  name="contact_email"placeholder="{{trans('admin.Enter_Your_E-mail')}}" value="{{Auth::user() ? Auth::user()->email : ""}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text" name="contact_subject" placeholder="{{trans('admin.Enter_Your_Subject')}}">
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 20px;margin-top: 30px;">
                        <div class="md-form">
                            <textarea class="form-control input-lg" type="text" name="contact_massage" placeholder="{{trans('admin.Massage')}}" rows="10"></textarea>
                        </div>
                    </div>
                <div class="form-group">
                    {!! Form::submit(trans('admin.send'),['class'=>'contact-btn' ]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
<!-- end contact us  -->
@include('website.footer')
