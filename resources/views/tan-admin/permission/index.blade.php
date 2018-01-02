@extends('tan-admin.layout')

@section('tan-css')
    <link rel="stylesheet" href="/tan-admin/js/nestable/nestable.css" type="text/css"/>
@endsection

@section('tan-main')
    <section class="scrollable wrapper">
        <button id="nestable-menu" class="btn btn-sm btn-primary active" data-toggle="button">
            <i class="fa fa-plus text fa-fw"></i>
            <span class="text">展开全部</span>
            <i class="fa fa-minus text-active fa-fw"></i>
            <span class="text-active">折叠全部</span>
        </button>
        <div class="row m-b">
            <div class="col-sm-4">
                <div class="dd" id="nestable3">
                    <ol class="dd-list">
                        @foreach($perms as $key=>$perm)
                            <li class="dd-item dd3-item">
                                <div class="dd-handle dd3-handle text-primary-lter">Drag</div>
                                <div class="dd3-content">{{parserMenuTypes()[$key]}}</div>
                                <ol class="dd-list">
                                    @foreach($perm as $k=>$p)
                                        <li class="dd-item dd3-item" data-id="{{$p->id}}">
                                            <div class="dd-handle dd3-handle">Drag</div>
                                            <div class="dd3-content">
                                                <i class="fa fa-link text-primary-lter"></i>
                                                <strong>{{$p->guard_name}}</strong>
                                                <a href="/{{$p->name}}" class="dd-nodrag">{{$p->name}}</a>
                                                @if($p->is_type == "POST")
                                                    <span class="badge bg-primary">POST</span>
                                                @elseif($p->is_type == "GET")
                                                    <span class="badge bg-success">GET</span>
                                                @elseif($p->is_type == "ANY")
                                                    <span class="badge bg-info">ANY</span>
                                                @else
                                                @endif
                                                <span class="pull-right dd-nodrag">
                                                        <a href="/ad/show/auth/{{base64_encode($p->id)}}"><i
                                                                    class="fa fa-edit text-primary-lter"> 更新</i></a>
                                                       <a href="javascript:void(0);" data-id="{{base64_encode($p->id)}}"
                                                          data-name="{{$p->guard_name}}" data-url="/ad/destroy/auth"
                                                          class="tree_branch_delete oper-del"> <i
                                                                   class="fa fa-minus-square text-primary-lter"> 删除</i></a>
                                                </span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ol>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="col-sm-8">
                <form data-validate="parsley" action="/ad/store/auth" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="opid" value="{{base64_encode($menu->id)}}">
                    <section class="panel panel-default">
                        <header class="panel-heading">
                                    <span class="h4">
                                         <a href="/ad/perms">
                                      <i class="fa fa-mail-reply text-white-lter"></i>
                                    </a>
                                        更新角色信息
                                    </span>
                        </header>
                        <div class="panel-body">

                            @include('tan-admin.error')

                            <div class="form-group">
                                <label>权限菜单名称</label>
                                <input type="text" class="form-control" data-required="true"
                                       value="{{$menu->guard_name}}" name="auth_name">
                            </div>
                            <div class="form-group">
                                <label>权限URL</label>
                                <input type="text" class="form-control" data-required="true"
                                       value="{{$menu->name}}" name="auth_url">
                            </div>

                            <div class="form-group">
                                <label>访问方式</label>
                                <select data-required="true" class="form-control parsley-validated"
                                        name="auth_method">
                                    <option value="">选择http请求方式</option>
                                    <option value="GET" @if($menu->is_type == 'GET') selected @endif>GET</option>
                                    <option value="POST" @if($menu->is_type == 'POST') selected @endif>POST</option>
                                    <option value="ANY" @if($menu->is_type == 'ANY') selected @endif>ANY</option>
                                </select>
                            </div>

                            <div class="form-group pull-in clearfix">
                                <div class="col-sm-6">
                                    <select data-required="true" class="form-control m-t parsley-validated"
                                            name="is_menu">
                                        <option value="">是否菜单</option>
                                        <option value="1" @if($menu->is_menu == '1') selected @endif>是</option>
                                        <option value="2" @if($menu->is_menu == '2') selected @endif>否</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select data-required="true" class="form-control m-t parsley-validated"
                                            name="is_parent">
                                        <option value="">归属模块</option>
                                        @foreach(parserMenuTypes() as  $key=>$menuType)
                                            <option value="{{$key}}"
                                                    @if($menu->is_parent == $key) selected @endif>{{$menuType}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <footer class="panel-footer text-right bg-light lter">
                            <button type="submit" class="btn btn-sm btn-primary btn-s-xs">确定</button>
                        </footer>
                    </section>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('tan-js')

    <script src="/tan-admin/js/sortable/jquery.sortable.js"></script>
    <script src="/tan-admin/js/nestable/jquery.nestable.js"></script>
    <script src="/tan-admin/js/nestable/demo.js"></script>

    <script src="/tan-admin/js/parsley/parsley.min.js"></script>
    <script src="/tan-admin/js/parsley/parsley.extend.js"></script>

    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-permission-ctrl"></script>
@endsection