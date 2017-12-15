@extends('progress-app.layout')

@section('tan-main')
    <!-- DataTables -->
    <link rel="stylesheet" href="/admin2-app/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="/pro/show/task">
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
                                <th>任务标题</th>
                                <th>任务标识</th>
                                <th>任务优先度</th>
                                <th>任务进度</th>
                                <th>任务创建人</th>
                                <th>任务开始时间</th>
                                <th>任务完成时间</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>
                                        <a href="/admin2/show/role/{{base64_encode($role->id)}}">{{$role->display_name}}</a>
                                    </td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->updated_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/admin2/show/role/{{base64_encode($role->id)}}">
                                                <button type="button" class="btn btn-sm bg-blue btn-flat margin">编辑
                                                </button>
                                            </a>

                                            <a href="/admin2/dispatch/permission/{{base64_encode($role->id)}}">
                                                <button type="button" class="btn btn-sm bg-blue btn-flat margin">权限分配
                                                </button>
                                            </a>

                                            <button type="button"
                                                    class="btn btn-sm bg-maroon btn-flat margin oper-del" data-id="{{base64_encode($role->id)}}"
                                                    data-name="{{$role->display_name}}" data-url="/admin2/destroy/role">删除
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


@section('tan-js')
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
            data-main="/admin2-app/assets/app/controller/op-role-ctrl"></script>

@endsection