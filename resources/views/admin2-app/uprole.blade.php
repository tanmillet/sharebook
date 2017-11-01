@extends('admin2-app.layout')

@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">新加角色</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="/admin2/store/role">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="role-display-name">角色名称</label>
                                <input type="text" class="form-control" name="role_display_name" placeholder="输入角色名称" value="{{$role->display_name}}">
                            </div>
                            <div class="form-group">
                                <label for="role-name">角色标识</label>
                                <input type="text" class="form-control" name="role_name" placeholder="输入角色标识" value="{{$role->name}}">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn bg-blue btn-flat margin">确定</button>
                            <a href="/admin2/roles"><button type="button" class="btn btn-default btn-flat margin">返回</button></a>
                        </div>
                        <input type="hidden" name="role_id" value="{{base64_encode($role->id)}}">
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
