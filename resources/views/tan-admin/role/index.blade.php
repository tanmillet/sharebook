@extends('tan-admin.layout')

@section('tan-main')
    <section class="scrollable wrapper">
        <section class="panel panel-default">
            <div class="row wrapper">
                <div class="col-sm-12 m-b-xs">
                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-plus text"></i> 新建</a>
                    <div class="btn-group">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-download"></i> 导出</button>
                        <button class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="btn-group" data-toggle="buttons">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#filterUser"><i class="fa fa-filter"></i> 过滤
                        </button>
                        <button type="button" class="btn btn-sm btn-info"><i class="fa fa-refresh"></i> 刷新</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;"><label class="checkbox m-n i-checks"><input
                                        type="checkbox"><i></i></label>
                        </th>
                        <th>角色名称</th>
                        <th>角色标签</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($roles as $role)
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>
                                <a href="/ad/show/role/{{base64_encode($role->id)}}">{{$role->display_name}}</a>
                            </td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->updated_at}}</td>
                            <td>
                                <div class="doc-buttons">
                                    <a href="/ad/show/role/{{base64_encode($role->id)}}"
                                       class="btn  btn-sm btn-info">Edit</a>
                                    <a href="#" class="btn  btn-sm btn-danger oper-del"
                                       data-id="{{base64_encode($role->id)}}"
                                       data-name="{{$role->display_name}}" data-url="/ad/destroy/role">Del</a>
                                    <a href="/ad/dispatch/permission/{{base64_encode($role->id)}}"
                                       class="btn  btn-sm btn-dark">Dispatch</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        empty!
                    @endforelse
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-4 text-center">
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </section>
        @include('tan-admin.role.filter')
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-user-ctrl"></script>
@endsection