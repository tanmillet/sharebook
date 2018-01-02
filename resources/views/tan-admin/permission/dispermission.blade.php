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
            <div class="col-sm-6">
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
                                                          data-name="{{$p->guard_name}}" data-url="/ad/dispatch/auth"
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
            <div class="col-sm-6">
                <div class="dd" id="nestable4">
                    <ol class="dd-list">
                        @foreach($perms as $key=>$perm)
                            <li class="dd-item dd3-item">
                                <div class="dd-handle dd3-handle text-primary-lter">Drag</div>
                                <div class="dd3-content">{{parserMenuTypes()[$key]}}</div>
                                <ol class="dd-list">
                                    @foreach($perm as $k=>$p)
                                        <li class="dd-item dd3-item" data-id="{{"9".$p->id}}">
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