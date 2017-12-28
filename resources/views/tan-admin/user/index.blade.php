@extends('tan-admin.layout')

@section('tan-main')
    <section class="wrapper">
        <section class="scrollable">
            {{--<header class="header bg-light dk">--}}
            {{--<p>用户列表</p>--}}
            {{--</header>--}}
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
                            <th style="width:20px;"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label>
                            </th>
                            <th>Project</th>
                            <th>Task</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td><span class="label bg-primary">正常</span></td>
                            <td>
                                <a href="/demo/auth/users/1/edit">
                                    <i class="fa fa-edit text-primary-lter"></i>
                                </a>
                                <a href="javascript:void(0);" data-id="2" class="oper-del">
                                    <i class="fa  fa-trash-o text-primary-lter"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td><span class="label bg-danger">禁用</span></td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa  fa-trash-o text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="checkbox m-n i-checks"><input type="checkbox"
                                                                            name="post[]"><i></i></label></td>
                            <td>Idrawfast</td>
                            <td>4c</td>
                            <td>Jul 25, 2013</td>
                            <td>
                                <a href="#" class="active" data-toggle="class"><i
                                            class="fa fa-check text-success text-active"></i><i
                                            class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
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
            <!-- Modal -->
            @include('tan-admin.user.filter')
        </section>
    </section>
@endsection

@section('tan-js')
    <script src="/tan-admin/assets/vendor/require.js"
            data-main="/tan-admin/assets/app/controller/op-user-ctrl"></script>
@endsection