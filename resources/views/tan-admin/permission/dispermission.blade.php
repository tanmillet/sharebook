@extends('tan-admin.layout')

@section('tan-css')
    <link rel="stylesheet" href="/tan-admin/js/nestable/nestable.css" type="text/css"/>
@endsection

@section('tan-main')
    <section class="scrollable wrapper">
        <div class="row m-b">
            <div class="col-sm-4">
                <a href="#" class="btn btn-default btn-block"><i class="fa fa-bars pull-left"></i> 可分配权限</a>
                <div class="dd" id="nestable3">
                    <ol class="dd-list">
                        @foreach($perms as $key=>$perm)
                            <li class="dd-item dd3-item">
                                <div class="dd-handle dd3-handle text-primary-lter">Drag</div>
                                <div class="dd3-content">{{parserMenuTypes()[$key]}}
                                    <a href="javascript:void(0);" data-id="{{$key}}" data-role-id="{{$roleId}}"
                                       data-name="{{parserMenuTypes()[$key]}}" data-url="/ad/disall/auth"
                                       class="oper-dispatch-all"> <i
                                                class="icon icon-action-redo text-primary-lter pull-right"> 指派</i></a>
                                </div>
                                <ol class="dd-list">
                                    @foreach($perm as $k=>$p)
                                        <li class="dd-item dd3-item" data-id="{{$p->id}}">
                                            <div class="dd-handle dd3-handle">Drag</div>
                                            <div class="dd3-content">
                                                <i class="fa fa-link text-primary-lter"></i>
                                                <strong>{{$p->guard_name}}</strong>
                                                <a href="javascript:void (0)" class="dd-nodrag">{{$p->name}}</a>
                                                @if($p->is_type == "POST")
                                                    <span class="badge bg-primary">POST</span>
                                                @elseif($p->is_type == "GET")
                                                    <span class="badge bg-success">GET</span>
                                                @elseif($p->is_type == "ANY")
                                                    <span class="badge bg-info">ANY</span>
                                                @else
                                                @endif
                                                <span class="pull-right dd-nodrag">
                                                       <a href="javascript:void(0);" data-id="{{base64_encode($p->id)}}"
                                                          data-name="{{$p->guard_name}}" data-role-id="{{$roleId}}"
                                                          data-url="/ad/dispatch/auth"
                                                          class="oper-dispatch"> <i
                                                                   class="icon icon-action-redo text-primary-lter"> 指派</i></a>
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
            <div class="col-sm-4">
                <a href="#" class="btn btn-default btn-block"><i class="fa fa-bars pull-left"></i> 已拥有权限</a>
                <div class="dd" id="nestable4">
                    <ol class="dd-list">
                        @foreach($rolePerms as $roleKey=>$rolePerm)
                            <li class="dd-item dd3-item">
                                <div class="dd-handle dd3-handle text-primary-lter">Drag</div>
                                <div class="dd3-content">{{parserMenuTypes()[$roleKey]}}</div>
                                <ol class="dd-list">
                                    @foreach($rolePerm as $rk=>$rp)
                                        <li class="dd-item dd3-item" data-id="{{"10".$rp->id}}">
                                            <div class="dd-handle dd3-handle">Drag</div>
                                            <div class="dd3-content">
                                                <i class="fa fa-link text-primary-lter"></i>
                                                <strong>{{$rp->guard_name}}</strong>
                                                <a href="/{{$rp->name}}" class="dd-nodrag">{{$rp->name}}</a>
                                                @if($rp->is_type == "POST")
                                                    <span class="badge bg-primary">POST</span>
                                                @elseif($rp->is_type == "GET")
                                                    <span class="badge bg-success">GET</span>
                                                @elseif($rp->is_type == "ANY")
                                                    <span class="badge bg-info">ANY</span>
                                                @else
                                                @endif
                                            </div>
                                        </li>
                                    @endforeach
                                </ol>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/js/sortable/jquery.sortable.js"></script>
    <script src="/tan-admin/js/nestable/jquery.nestable.js"></script>
    <script src="/tan-admin/js/nestable/demo.js"></script>

    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-permission-ctrl"></script>
@endsection