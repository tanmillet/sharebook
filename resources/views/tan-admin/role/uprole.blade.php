@extends('tan-admin.layout')

@section('tan-main')
    <section class="scrollable wrapper">
        <div class="row wrapper">
            <form data-validate="parsley" action="/ad/store/role" method="post">
                {{csrf_field()}}
                <input type="hidden" name="opid" value="{{base64_encode($role->id)}}">
                <section class="panel panel-default">
                    <header class="panel-heading">
                            <span class="h4">
                                 <a href="/ad/roles">
                              <i class="fa fa-mail-reply text-white-lter"></i>
                            </a>
                                更新角色信息
                            </span>
                    </header>
                    <div class="panel-body">

                        @include('tan-admin.error')

                        <div class="form-group pull-in clearfix">
                            <div class="col-sm-6">
                                <label>角色信息</label>
                                <input type="text" class="form-control parsley-validated" data-required="true"
                                       value="{{$role->display_name}}" name="role_name">
                            </div>
                            <div class="col-sm-6">
                                <label>角色标识</label>
                                <input type="text" name="role_tag" class="form-control parsley-validated"
                                       data-required="true" value="{{$role->name}}"
                                       @if(isset($role->name)) readonly @endif>
                            </div>
                        </div>
                    </div>
                    <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-success btn-s-xs">确认提交</button>
                    </footer>
                </section>
            </form>
        </div>
    </section>
@endsection

@section('tan-js')

    <script src="/tan-admin/js/parsley/parsley.min.js"></script>
    <script src="/tan-admin/js/parsley/parsley.extend.js"></script>

    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-role-ctrl"></script>
@endsection