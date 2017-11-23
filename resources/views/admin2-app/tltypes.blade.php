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
                        <a href="/admin2/show/tltype">
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
                                <th>内容名称</th>
                                <th>内容标识</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($tltypes as $tltype)
                                <tr>
                                    <td>
                                        <a href="/admin2/show/tltype/{{base64_encode($tltype->id)}}">{{$tltype->name}}</a>
                                    </td>
                                    <td>{{$tltype->tag}}</td>
                                    <td>{{$tltype->updated_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/admin2/show/tltype/{{base64_encode($tltype->id)}}">
                                                <button type="button" class="btn btn-sm bg-blue btn-flat margin">编辑
                                                </button>
                                            </a>
                                            <button type="button"
                                                    class="btn btn-sm bg-maroon btn-flat margin oper-del-role"
                                                    data-toggle="modal" data-target="#modal-danger"
                                                    data-id="{{base64_encode($tltype->id)}}"
                                                    data-name="{{$tltype->name}}">删除
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

    <div class="modal modal-danger fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">温馨提示！- 警告急</h4>
                </div>
                <div class="modal-body">
                    <p>你确定删除以下内容类型信息吗？</p>
                    <p>
                        内容类型名称：<span id="delInfo"></span>
                        <input type="hidden" value="" id="operId">
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline op-modal-danger" data-url="/admin2/destroy/tltype">Save
                        changes
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

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

        $(".oper-del-role").click(function () {
            var me = this;
            $("#delInfo").html($(me).attr('data-name'));
            $("#operId").attr('value' , $(me).attr('data-id'))
        });
    </script>

    　　
    <script src="/admin2-app/assets/vendor/require.js"
            data-main="/admin2-app/assets/app/controller/op-role-ctrl"></script>

@endsection