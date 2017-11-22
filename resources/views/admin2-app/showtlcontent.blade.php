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
                    <form role="form" method="post" action="/admin2/store/tltype">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="role-display-name">内容标题</label>
                                <input type="text" class="form-control" name="name" placeholder="输入内容类型名称"
                                       value="{{$tlcontent->name}}">
                            </div>
                            <div class="form-group">
                                <label for="role-display-name">内容摘要</label>
                                <input type="text" class="form-control" name="name" placeholder="输入内容类型名称"
                                       value="{{$tlcontent->name}}">
                            </div>
                            <div class="form-group">
                                <label>内容类型</label>
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>内容信息</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ...">{{$tlcontent->name}}</textarea>
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


@endsection
