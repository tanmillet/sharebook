@extends('tan-admin.layout')

@section('tan-main')
    <section class="scrollable wrapper-lg">
        <div class="row">
            <form data-validate="parsley" action="/ad/store/auth" method="post">
                {{csrf_field()}}
                <input type="hidden" name="opid" value="{{base64_encode($profile->id)}}">
                <section class="panel panel-default">
                    <header class="panel-heading">
                                    <span class="h4">
                                         <a href="/ad/profile">
                                      <i class="fa fa-mail-reply text-white-lter"></i>
                                    </a>
                                        完善个人信息
                                    </span>
                    </header>
                    <div class="panel-body">

                        @include('tan-admin.error')

                        <div class="form-group">
                            <label>中文名称</label>
                            <input type="text" class="form-control" data-required="true"
                                   value="{{$profile->nike_name}}" name="nike_name">
                        </div>
                        <div class="form-group">
                            <label>职位名称</label>
                            <input type="text" class="form-control" data-required="true"
                                   value="{{$profile->job_title}}" name="job_title">
                        </div>
                        <div class="form-group">
                            <label>电话号码</label>
                            <input type="text" class="form-control" data-required="true"
                                   value="{{$profile->phone}}" name="phone">
                        </div>
                        <div class="form-group">
                            <label>QQ号码</label>
                            <input type="text" class="form-control" data-required="true"
                                   value="{{$profile->qq}}" name="qq">
                        </div>
                        <div class="form-group">
                            <label>wechat账号</label>
                            <input type="text" class="form-control" data-required="true"
                                   value="{{$profile->wechat}}" name="wechat">
                        </div>

                        <div class="form-group">
                            <label>性别</label>
                            <select data-required="true" class="form-control parsley-validated"
                                    name="auth_method">
                                <option value="">选择性别</option>
                                <option value="1" @if($profile->gender == '1') selected @endif>男性</option>
                                <option value="2" @if($profile->gender == '2') selected @endif>女性</option>
                                <option value="0" @if($profile->gender == '0') selected @endif>未知</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>个人简介</label>
                            <textarea class="form-control parsley-validated" rows="6" data-minwords="6" data-required="true" placeholder="个人简介">{{$profile->intro}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>居住地址</label>
                            <div class="row">
                                    <div class="col-md-4">
                                        <select data-required="true" class="form-control parsley-validated"
                                                name="is_menu">
                                            <option value="1" @if($profile->is_menu == '1') selected @endif>是</option>
                                            <option value="2" @if($profile->is_menu == '2') selected @endif>否</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select data-required="true" class="form-control parsley-validated"
                                                name="is_menu">
                                            <option value="1" @if($profile->is_menu == '1') selected @endif>是</option>
                                            <option value="2" @if($profile->is_menu == '2') selected @endif>否</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select data-required="true" class="form-control parsley-validated"
                                                name="is_menu">
                                            <option value="1" @if($profile->is_menu == '1') selected @endif>是</option>
                                            <option value="2" @if($profile->is_menu == '2') selected @endif>否</option>
                                        </select>
                                    </div>
                            </div>
                            <input type="text" class="form-control" data-required="true" placeholder="详细地址"
                                   value="{{$profile->detail_address}}" name="detail_address">
                        </div>
                    </div>
                    <footer class="panel-footer text-right bg-light lter">
                        <button type="submit" class="btn btn-sm btn-primary btn-s-xs">确定</button>
                    </footer>
                </section>
            </form>
        </div>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-profile-ctrl"></script>
@endsection