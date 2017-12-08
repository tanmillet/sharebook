@extends('progress-app.layout')

@section('tan-main')
    <section class="vbox">
        <section class="scrollable padder">
            <div class="m-b-md">
                {{--<h3 class="m-b-none">新加项目</h3>--}}
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold">新加任务</header>
                        <div class="panel-body">
                            <form role="form" id="upshowproject">
                                <div class="form-group">
                                    <label>任务标题</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>任务标识</label>
                                    <input type="text" class="form-control" placeholder="" name="tag">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">归属项目</label>
                                    <select name="type" class="form-control m-b">
                                        <option value="0" selected>开源</option>
                                        <option value="1">私有</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">任务优先度</label>
                                    <select name="status" class="form-control m-b">
                                        <option value="5" selected>lv5</option>
                                        <option value="4">lv4</option>
                                        <option value="3">lv3</option>
                                        <option value="2">lv2</option>
                                        <option value="1">lv1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">任务进度</label>
                                    <select name="status" class="form-control m-b">
                                        <option value="5" selected>待开发</option>
                                        <option value="4">lv4</option>
                                        <option value="3">lv3</option>
                                        <option value="2">lv2</option>
                                        <option value="1">lv1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>任务开始时间</label>
                                    <input type="text" class="form-control" placeholder="" name="digest">
                                </div>
                                <div class="form-group">
                                    <label>任务完成时间</label>
                                    <input type="text" class="form-control" placeholder="" name="milestone">
                                </div>

                                <button type="button" class="btn btn-sm btn-info oper-upshow">提交</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/js/wysiwyg/jquery.hotkeys.js"></script>
    <script src="/tan-admin/js/wysiwyg/bootstrap-wysiwyg.js"></script>
    <script src="/tan-admin/js/wysiwyg/demo.js"></script>

    <script src="/admin2-app/assets/vendor/require.js"
            data-main="/admin2-app/assets/app/controller/op-project-ctrl"></script>
@endsection