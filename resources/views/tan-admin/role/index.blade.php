@extends('tan-admin.layout')

@section('tan-main')
    <section class="scrollable wrapper">
        <section class="panel panel-default">
            <div class="row wrapper">
                <div class="col-sm-12 m-b-xs">
                    <a href="/ad/show/role" class="btn btn-sm btn-primary"><i class="fa fa-plus text"></i> 新建</a>
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
                        <a href="/ad/roles" class="btn btn-sm btn-info"><i class="fa fa-refresh"></i> 刷新</a>
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
                                    <a href="/ad/show/role/{{base64_encode($role->id)}}">
                                        <i class="fa fa-edit text-primary-lter"> 编辑</i>
                                    </a>
                                    <a href="#" class="oper-del" data-id="{{base64_encode($role->id)}}"
                                       data-name="{{$role->display_name}}" data-url="/ad/destroy/role"><i
                                                class="fa fa-trash-o text-primary-lter"> 删除</i></a>
                                    <a href="/ad/dispatch/auth/{{base64_encode($role->id)}}">
                                        <i class="fa fa fa-link text-primary-lter"> 权限</i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                       <td colspan="5"> 查无数据!</td>
                    @endforelse
                    </tbody>
                </table>
            </div>
            @include('tan-admin.partials.pagination' , ['paginator' => $roles])
        </section>
        @include('tan-admin.role.filter')
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-role-ctrl"></script>
@endsection