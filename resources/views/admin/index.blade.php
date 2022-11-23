@include('admin.layouts.header')
@include('admin.layouts.navbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 259px;margin-inline-end: auto;" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <h1 class="m-0 text-dark" style="text-align: center">{{!empty($title)?$title:trans('admin.admin_control')}} </h1>

                    <div class="col-12">
                        <div class="card">
                            <div class="m-0 text-dark" style="text-align: center">Users </div>
                            <div class="card-body">
                                  <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> {{trans('admin.delete')}} </th>
                                <th> {{trans('admin.edit')}} </th>
                                <th>{{trans('admin.created_at')}}</th>
                                <th>{{trans('admin.updated_at')}}</th>
                                <th>{{trans('admin.email')}}</th>
                                <th>{{trans('admin.name')}}</th>
                                <th>{{trans('admin.role')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $userinfo)
                                <tr>
                                    <td>
                                        {!! Form::open(['id'=>'form_delete','url'=>url('users/'.$userinfo->id),'method'=>'delete']) !!}
                                        {!! Form::submit(trans('admin.delete'),['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url ('users/'.$userinfo->id .'/edit') }} "> <i class="fa fa-edit"></i> </a>
                                    </td>
                                    <td>{{$userinfo->created_at}}</td>
                                    <td>{{$userinfo->updated_at}}</td>
                                    <td>{{$userinfo->email}}</td>
                                    <td>{{ $userinfo->name }}</td>
                                    <td>{{ $userinfo->role }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th> {{trans('admin.delete')}} </th>
                                <th> {{trans('admin.edit')}} </th>
                                <th>{{trans('admin.created_at')}}</th>
                                <th>{{trans('admin.updated_at')}}</th>
                                <th>{{trans('admin.email')}}</th>
                                <th>{{trans('admin.name')}}</th>
                                <th>{{trans('admin.role')}}</th>
                            </tr>
                            </tfoot>
                        </table>

                            </div>

                            {{$user->render()}}

                        </div>

                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="m-0 text-dark" style="text-align: center">Categories </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th> delete </th>
                                            <th> edit </th>
                                            <th> created at </th>
                                            <th> updated at </th>
                                            <th> category name </th>
                                            <th>category description</th>
                                            <th>added by</th>
                                            <th> number of product </th>
                                            <th>category image</th>
                                            <th>category id </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($category as $categoryinfo)
                                            <tr>
                                                <td>
                                                    {!! Form::open(['id'=>'form_delete','url'=>url('category/'.$categoryinfo->id),'method'=>'delete']) !!}
                                                    {!! Form::submit('Delete',['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ url ('category/'.$categoryinfo->id .'/edit') }} "> <i class="fa fa-edit"></i> </a>
                                                </td>
                                                <td>{{$categoryinfo->created_at}}</td>
                                                <td>{{$categoryinfo->updated_at}}</td>
                                                <td><a href="category/{{$categoryinfo->id}}">{{$categoryinfo->category_name}}</a></td>
                                                <td>{{$categoryinfo->category_description}}</td>
                                                <td>{{$categoryinfo->categories->name}}</td>
                                                <td>{{$categoryinfo->products()->count()}}</td>
                                                <td>
                                                    @if(!empty($categoryinfo->category_image))
                                                        <img src="{{asset('storage/public/'.$categoryinfo->category_image)}}" style="width: 100px;height: 100px;">
                                                    @endif
                                                </td>
                                                <td>{{ $categoryinfo->id }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th> category name </th>
                                            <th> delete </th>
                                            <th> edit </th>
                                            <th> created at </th>
                                            <th> updated at </th>
                                            <th>category description</th>
                                            <th>added by</th>
                                            <th> number of product </th>
                                            <th>category image</th>
                                            <th>category id </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            {{$category->render()}}
                        </div>

                    </div>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @include('admin.layouts.massage')
        @yield('content')
    </section>
<!-- /.content-wrapper -->
</div>
@include('admin.layouts.footer')
