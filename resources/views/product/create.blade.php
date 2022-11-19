@extends('index')

@section('content')
    <!-- Main content -->

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">{{$title}}</h3>
        </div>
        <div class="box-body ">
            {!! Form::open(['url'=>url('product'),'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('product_name') !!}
                {!! Form::text('product_name',old('product_name'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group ">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::label('product image') !!}
                    </div>
                    <div class="col-lg-12">
                        {!! Form::file('product_image',['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('product description')!!}
                {!! Form::text('product_description',old('product_description'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('product price')!!}
                {!! Form::text('product_price',old('product_price'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('product quantity')!!}
                {!! Form::text('product_quantity',old('product_quantity'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category name')!!}
                <select class="selectpicker form-control" name="category_id" id="number" data-live-search="true">
                    <option>Select category</option>
                    @foreach($category as $categoryinfo)
                        <option value="{{$categoryinfo->id}}">{{$categoryinfo->category_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    {!! Form::submit('save',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
    </div>
    <!-- /.row -->
@endsection
