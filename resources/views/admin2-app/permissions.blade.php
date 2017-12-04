@extends('admin2-app.layout')

@section('lucas-css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/admin2-app/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="/admin2/show/permission">
                            <button type="button" class="btn btn-sm bg-blue btn-flat margin"><i class="fa fa-plus"></i>
                                新加
                            </button>
                        </a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>菜单标识</th>
                                <th>菜单名称</th>
                                <th>菜单类型</th>
                                <th>菜单归属</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($permissions as $permission)
                                <tr>
                                    <td>
                                        <a href="/admin2/show/permission/{{base64_encode($permission->id)}}">{{$permission->name}}</a>
                                    </td>
                                    <td>{{$permission->guard_name}}</td>
                                    <td>{{$permission->is_type}}</td>
                                    <td>{{$permission->is_parent}}</td>
                                    <td>{{$permission->updated_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/admin2/show/permission/{{base64_encode($permission->id)}}">
                                                <button type="button" class="btn btn-sm bg-blue btn-flat margin">编辑
                                                </button>
                                            </a>
                                            <button type="button"
                                                    class="btn btn-sm bg-maroon btn-flat margin oper-del" data-id="{{base64_encode($permission->id)}}"
                                                    data-name="{{$permission->guard_name}}" data-url="/admin2/destroy/permission">删除
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('lucas-js')
    <!-- DataTables -->
    <script src="/admin2-app/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/admin2-app/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- page script -->
    <script>
        $(function () {
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

    　　
    <script src="/admin2-app/assets/vendor/require.js"
            data-main="/admin2-app/assets/app/controller/op-auth-ctrl"></script>

@endsection