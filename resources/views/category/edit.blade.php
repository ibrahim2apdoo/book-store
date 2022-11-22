@extends('index')

@section('content')
    <!-- Main content -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title" style="text-align: center">{{$title}}</h3>
        </div>
        <div class="box-body ">
            {!! Form::open(['url'=>url('category/'.$category->id),'method'=>'put','files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('category_name') !!}
                {!! Form::text('category_name',$category->category_name,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category description')!!}
                {!! Form::text('category_description',$category->category_description,['class'=>'form-control']) !!}
            </div>
            <div class="form-group ">
                @if(!empty($category->category_image))
                    <img src="{{Storage::url( $category->category_image)}}" style="width: 50px;height: 50px;">
                @endif
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
        {!! Form::submit('Edit',['class'=>'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
        <!-- /.card-body -->
        <!-- /.card -->
    </div>
    <!-- /.row -->
@endsection
