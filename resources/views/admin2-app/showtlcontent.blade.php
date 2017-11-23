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
                        <h3 class="box-title">新加内容</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="/admin2/store/tlcontent">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="role-display-name">内容标题</label>
                                <input type="text" class="form-control" name="title" placeholder="输入内容类型名称"
                                       value="{{$tlcontent->name}}">
                            </div>
                            <div class="form-group">
                                <label for="role-display-name">内容摘要</label>
                                <input type="text" class="form-control" name="digest" placeholder="输入内容类型名称"
                                       value="{{$tlcontent->name}}">
                            </div>
                            <div class="form-group">
                                <label>内容类型</label>
                                <select class="form-control" name="type_tag">
                                    @foreach($tltypes as $tltype)
                                        <option value="{{$tltype->tag}}">{{$tltype->name}}</option>
                                    @endforeach
                                </select>
                                <a href="http://sbook.io/aetherupload" target="_blank">选择图片或者视频点击上传资源</a>
                            </div>
                            <div class="form-group">
                                <label>内容信息</label>
                                <textarea name="text" class="form-control" rows="3" placeholder="Enter ...">{{$tlcontent->name}}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn bg-blue btn-flat margin">确定</button>
                            <a href="/admin2/tltypes">
                                <button type="button" class="btn btn-default btn-flat margin">返回</button>
                            </a>
                        </div>
                        <input type="hidden" name="tlcontent_id" value="{{base64_encode($tlcontent->id)}}">
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <div class="modal fade" id="modal-default" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection
