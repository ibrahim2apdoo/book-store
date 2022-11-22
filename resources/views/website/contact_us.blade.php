@include('website.header')

<!-- start contact us  -->
<div class="contact-us">
    <div class="container">
        @include('layouts.massage')
        <h2 class="contact-hesd text-center h1 head-border-center uppercase">contact us </h2>
        <div class="row">
            <div class="col-md-12 mb-md-0 mb-5">
                {!! Form::open(['url'=>'/contact' , 'method'=>'post']) !!}
                <!--Grid row-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text"  name="contact_name" placeholder="Enter Your Name" value="{{Auth::user() ? Auth::user()->name : ""}}">
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text"  name="contact_email"placeholder="Enter Your E-mail" value="{{Auth::user() ? Auth::user()->email : ""}}">
                        </div>
                    </div>
                    <!--Grid column-->

                <!--Grid row-->
                <!--Grid row-->

                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input class="form-control input-lg" type="text" name="contact_subject" placeholder="Enter Your Subject">
                        </div>
                    </div>

                <!--Grid row-->
                <!--Grid row-->

                    <!--Grid column-->
                    <div class="col-md-12" style="margin-bottom: 20px;margin-top: 30px;">
                        <div class="md-form">
                            <textarea class="form-control input-lg" type="text" name="contact_massage" placeholder="Enter Your Massage" rows="10"></textarea>
                        </div>
                    </div>

                <!--Grid row-->
                <div class="form-group">
                    {!! Form::submit('Send',['class'=>'contact-btn' ]) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
<!-- end contact us  -->
@include('website.footer')
