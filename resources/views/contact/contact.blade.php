@extends('index')

@section('content')

    <br>

    <div class="container">
        <section class="mb-4">
            <div class="col-md-9 mb-md-0 mb-5">
                <h1 style="text-align: center"> Contact Us </h1>
            </div>
            <!--Section heading-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">

                    {!! Form::open(['url'=>'/contact' , 'method'=>'post']) !!}

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Name </label>
                                <br>
                                <input type="text"  name="contact_name" class="form-control" value="{{Auth::user() ? Auth::user()->name : ""}}">

                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">Email </label>
                                <br>
                                <input type="text"  name="contact_email" class="form-control" value="{{Auth::user() ? Auth::user()->email : ""}}">

                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Subject </label>
                                <br>
                                <input type="text" name="contact_subject" style="height: 50px;" class="form-control">

                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="message"> Yore Massage</label>
                                <br>
                                <textarea type="text" name="contact_massage" rows="10" class="form-control md-textarea"></textarea>

                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="form-group">
                        {!! Form::submit('Send',['class'=>'btn btn-primary' ,'style'=>"float: right; margin-right: 349px;margin-top: 13px;"]) !!}
                    </div>

                    {!! Form::close() !!}

                </div>

            </div>

        </section>
    </div>
    <br>
@endsection
