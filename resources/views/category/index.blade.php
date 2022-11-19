@extends('index')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            {{--
                                                        <!--
                                                        {!! Form::open(['id'=>'form_delete','url'=>aurl('admin/destroy/all'),'method'=>'delete']) !!}
                                                        {!! Form::submit(trans('admin.delete_all') ,['class'=>'btn btn-danger','name'=>'delete_all']) !!}
                                                        {!! Form::close() !!}
                                                        -->
                            --}}
                        </div>
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
                                            <img src="{{Storage::url($categoryinfo->category_image)}}" style="width: 100px;height: 100px;">
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


