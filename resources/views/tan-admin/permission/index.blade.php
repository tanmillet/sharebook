@extends('tan-admin.layout')

@section('tan-css')
    <link rel="stylesheet" href="/tan-admin/js/nestable/nestable.css" type="text/css"/>
@endsection

@section('tan-main')
    <section class="wrapper">
        <section class="scrollable">
            <header class="header bg-light dk">
                <p>权限列表</p>
            </header>
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
                                <li class="dd-item dd3-item" data-id="13">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 13</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="14">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">Item 14</div>
                                </li>
                                <li class="dd-item dd3-item" data-id="15">
                                    <div class="dd-handle dd3-handle text-primary-lter">Drag</div>
                                    <div class="dd3-content">用户管理</div>
                                    <ol class="dd-list">
                                        <li class="dd-item dd3-item" data-id="16">
                                            <div class="dd-handle dd3-handle">Drag</div>
                                            <div class="dd3-content">
                                                <i class="fa fa-users text-primary-lter"></i>
                                                <strong>Users</strong>
                                                <a href="/demo/auth/users" class="dd-nodrag">/demo/auth/users</a>
                                                <span class="badge bg-primary">POST</span>
                                                <span class="badge bg-success">GET</span>
                                                <span class="badge bg-info">ANY</span>
                                                <span class="pull-right dd-nodrag">
                                                        <a href="/demo/auth/menu/3/edit"><i class="fa fa-edit text-primary-lter"></i></a>
                                                       <a href="javascript:void(0);" data-id="3" class="tree_branch_delete oper-del"><i class="fa fa-minus-square text-primary-lter"></i></a>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="17">
                                            <div class="dd-handle dd3-handle">Drag</div>
                                            <div class="dd3-content">Item 17</div>
                                        </li>
                                        <li class="dd-item dd3-item" data-id="18">
                                            <div class="dd-handle dd3-handle">Drag</div>
                                            <div class="dd3-content">Item 18</div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <form data-validate="parsley">
                            <section class="panel panel-default">
                                <header class="panel-heading">
                                    <span class="h4">Register</span>
                                </header>
                                <div class="panel-body">
                                    <p class="text-muted">Please fill the information to continue</p>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" data-required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" data-type="email" data-required="true">
                                    </div>

                                    <div class="form-group pull-in clearfix">

                                        <div class="col-sm-6">

                                            <label>Enter password</label>

                                            <input type="password" class="form-control" data-required="true" id="pwd">

                                        </div>

                                        <div class="col-sm-6">

                                            <label>Confirm password</label>

                                            <input type="password" class="form-control" data-equalto="#pwd" data-required="true">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label>Phone</label>

                                        <input type="text" class="form-control" data-type="phone" placeholder="(XXX) XXXX XXX" data-required="true">

                                    </div>

                                    <div class="checkbox i-checks">

                                        <label>

                                            <input type="checkbox" name="check" checked data-required="true"><i></i> I agree to the <a href="#" class="text-info">Terms of Service</a>

                                        </label>

                                    </div>

                                </div>

                                <footer class="panel-footer text-right bg-light lter">

                                    <button type="submit" class="btn btn-sm btn-primary btn-s-xs">确定</button>
                                    <button type="reset" class="btn btn-sm btn-danger btn-s-xs pull-left">取消</button>

                                </footer>

                            </section>

                        </form>
                    </div>
                </div>
            </section>
        </section>
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