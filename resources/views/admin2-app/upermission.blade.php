@extends('admin2-app.layout')
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                @if(count($errors)>0)
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> 错误!</h4>
                        @foreach($errors->all() as $value)
                            {{$value}}
                        @endforeach
                    </div>
            @endif
            <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">新加菜单</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="/admin2/store/permission">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="role-display-name">菜单标识</label>
                                <input type="text" class="form-control" name="name" placeholder="输入菜单标识"
                                       value="{{$permission->name}}">
                            </div>
                            <div class="form-group">
                                <label for="role-name">菜单名称</label>
                                <input type="text" class="form-control" name="guard_name" placeholder="输入菜单名称"
                                       value="{{$permission->guard_name}}">
                            </div>
                            <div class="form-group">
                                <label>菜单归属</label>
                                <select class="form-control" name="is_parent">
                                    <option {{($permission->is_parent == '权限管理') ? 'selected' : ''}} value="AUTH">权限管理</option>
                                    <option  {{($permission->is_parent == '时间轴管理') ? 'selected' : ''}} value="TIMELINE">时间轴管理</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>菜单类型</label>
                                <select class="form-control" name="is_type">
                                    <option {{($permission->is_type == 'IsGet') ? 'selected' : ''}}>IsGet</option>
                                    <option  {{($permission->is_type == 'IsPost') ? 'selected' : ''}}>IsPost</option>
                                    <option  {{($permission->is_type == 'IsGetPost') ? 'selected' : ''}}>IsGetPost</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn bg-blue btn-flat margin">确定</button>
                            <a href="/admin2/permissions">
                                <button type="button" class="btn btn-default btn-flat margin">返回</button>
                            </a>
                        </div>
                        <input type="hidden" name="permission_id" value="{{base64_encode($permission->id)}}">
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
