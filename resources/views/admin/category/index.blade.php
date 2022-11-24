@extends('admin.index')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> {{trans('admin.delete')}} </th>
                                <th> {{trans('admin.edit')}} </th>
                                <th>{{trans('admin.created_at')}}</th>
                                <th>{{trans('admin.updated_at')}}</th>
                                <th> {{trans('admin.category_name')}} </th>
                                <th>{{trans('admin.category_description')}}</th>
                                <th>{{trans('admin.added_by')}}</th>
                                <th>{{trans('admin.number_of_product')}}  </th>
                                <th>{{trans('admin.category_image')}}</th>
                                <th>{{trans('admin.category_id')}} </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $categoryinfo)
                                <tr>
                                    <td>
                                        {!! Form::open(['id'=>'form_delete','url'=>url('category/'.$categoryinfo->id),'method'=>'delete']) !!}
                                        {!! Form::submit(trans('admin.delete'),['class'=>'btn btn-danger fa fa-trash' ,'style'=>'inline']) !!}
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
                                <th> {{trans('admin.delete')}} </th>
                                <th> {{trans('admin.edit')}} </th>
                                <th>{{trans('admin.created_at')}}</th>
                                <th>{{trans('admin.updated_at')}}</th>
                                <th> {{trans('admin.category_name')}} </th>
                                <th>{{trans('admin.category_description')}}</th>
                                <th>{{trans('admin.added_by')}}</th>
                                <th>{{trans('admin.number_of_product')}}  </th>
                                <th>{{trans('admin.category_image')}}</th>
                                <th>{{trans('admin.category_id')}} </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </section>
@endsection
@section('footer')

    <script src="{{url('/design/adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('/design/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('/design/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('/design/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{url('/design/adminlte/dist/js/adminlte.min.js')}}"></script>
    <script src="{{url('/design/adminlte/dist/js/demo.js')}}"></script>

    <script type="text/javascript">
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
        })
    </script>
@endsection


