@extends('admin.index')

@section('content')
    <!-- Main content -->

        <div class="box">
            <div class="box-header">
                <h3 class="box-title" style="text-align: center">{{$title}}</h3>
            </div>
            <div class="box-body ">
                {!! Form::open(['url'=>url('category'),'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('category_name') !!}
                    {!! Form::text('category_name',old('country_name_ar'),['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category description')!!}
                    {!! Form::text('category_description',old('category_description'),['class'=>'form-control']) !!}
                </div>
                <div class="form-group ">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::label('category image') !!}
                        </div>
                        <div class="col-lg-12">
                            {!! Form::file('category_image',['class'=>'form-control']) !!}
                        </div>
                    </div>

                </div>
                </div>
            {!! Form::submit('save',['class'=>'btn btn-primary form-control']) !!}
            {!! Form::close() !!}
            <!-- route admin.store function or url aurl('admin') this header for store function  -->
        </div>
        <!-- /.row -->
@endsection
