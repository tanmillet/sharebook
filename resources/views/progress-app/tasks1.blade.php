@extends('progress-app.layout')

{{--@section('tan-css')--}}
    {{--<!-- DataTables -->--}}
    {{--<link rel="stylesheet" href="/admin2-app/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">--}}
{{--@endsection--}}

@section('tan-main')
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
                        <table  class="table table-bordered table-hover">
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
                            @forelse($tasks as $task)
                                <tr>
                                    <td>
                                        <a href="/admin2/show/role/{{base64_encode($task->id)}}">{{$task->task_title}}</a>
                                    </td>
                                    <td>{{$task->task_tag}}</td>
                                    <td>{{$task->task_priority}}</td>
                                    <td>{{$task->task_progress}}</td>
                                    <td>{{$task->task_creater}}</td>
                                    <td>{{$task->task_start_date}}</td>
                                    <td>{{$task->task_end_date}}</td>
                                    <td>{{$task->updated_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/admin2/show/role/{{base64_encode($task->id)}}">
                                                <button type="button" class="btn btn-sm bg-blue btn-flat margin">编辑
                                                </button>
                                            </a>

                                            <a href="/admin2/dispatch/permission/{{base64_encode($task->id)}}">
                                                <button type="button" class="btn btn-sm bg-blue btn-flat margin">权限分配
                                                </button>
                                            </a>

                                            <button type="button"
                                                    class="btn btn-sm bg-maroon btn-flat margin oper-del" data-id="{{base64_encode($task->id)}}"
                                                    data-name="{{$task->task_title}}" data-url="/admin2/destroy/role">删除
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

    　　
    <script src="/admin2-app/assets/vendor/require.js"
            data-main="/admin2-app/assets/app/controller/op-role-ctrl"></script>

@endsection