<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>Tan Millet | Web Application</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>

    <meta name="_token" content="{{ csrf_token() }}"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="/tan-admin/js/jPlayer/jplayer.flat.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/simple-line-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/font.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/app.css" type="text/css"/>

    <link rel="stylesheet" href="/tan-admin/css/sweetalert.css">

    @yield('tan-css')
    <!--[if lt IE 9]>
    <script src="/tan-admin/js/ie/html5shiv.js"></script>
    <script src="/tan-admin/js/ie/respond.min.js"></script>
    <script src="/tan-admin/js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section class="vbox">

    <header class="bg-primary lter header header-md navbar navbar-fixed-top-xs">
        <div class="navbar-header aside dker">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="icon-list"></i>
            </a>
            <a href="index.html" class="navbar-brand text-lt">
                <i class="icon-drop"></i>
                <img src="/tan-admin/images/logo.png" alt="." class="hide">
                <span class="hidden-nav-xs m-l-sm">AP</span>
            </a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                <i class="icon-settings"></i>
            </a>
        </div>
        <ul class="nav navbar-nav hidden-xs">
            <li>
                <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
                    <i class="fa fa-indent text"></i>
                    <i class="fa fa-dedent text-active"></i>
                </a>
            </li>
        </ul>
        <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
            <div class="form-group" style="width: 230px;">
                <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
                    <input type="text" class="form-control input-sm no-border rounded"
                           placeholder="Search songs, albums...">
                </div>
            </div>
        </form>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-black dk aside hidden-print" id="nav">
                <section class="vbox">
                    <section class="w-f-md scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                             data-size="10px" data-railOpacity="0.2">
                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <ul class="nav" data-ride="collapse">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        菜单
                                    </li>
                                    <li class="">
                                        <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="fa fa-angle-left text"></i>
                          <i class="fa fa-angle-down text-active"></i>
                        </span>
                                            <i class="icon-grid icon">
                                            </i>
                                            <span>示例页面</span>
                                        </a>
                                        <ul class="nav dk text-sm">
                                            <li class="">
                                                <a href="/template/profile" class="auto">
                                                    <i class="fa fa-angle-right text-xs"></i>
                                                    <span>个人信息</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/template/blog" class="auto">
                                                    <i class="fa fa-angle-right text-xs"></i>

                                                    <span>Blog</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/template/form" class="auto">
                                                    <i class="fa fa-angle-right text-xs"></i>

                                                    <span>示例表单</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/template/table" class="auto">
                                                    <i class="fa fa-angle-right text-xs"></i>
                                                    <span>示例表格</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="fa fa-angle-left text"></i>
                          <i class="fa fa-angle-down text-active"></i>
                        </span>
                                            <i class="fa fa-tasks icon text-primary-lter">
                                            </i>
                                            <span>后台管理</span>
                                        </a>
                                        <ul class="nav dk text-sm">
                                            <li class="">
                                                <a href="/ad/users" class="auto">
                                                    <i class="fa fa-users text-xs text-primary-lter"></i>
                                                    <span>用户列表</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/template/blog" class="auto">
                                                    <i class="fa fa-user text-xs text-primary-lter"></i>
                                                    <span>角色列表</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/template/form" class="auto">
                                                    <i class="fa fa-ban text-xs text-primary-lter"></i>
                                                    <span>权限列表</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/template/table" class="auto">
                                                    <i class="fa fa-list text-xs text-primary-lter"></i>
                                                    <span>菜单列表</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/template/table" class="auto">
                                                    <i class="fa fa-book text-xs text-primary-lter"></i>
                                                    <span>操作日志</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>
                    <footer class="footer hidden-xs no-padder text-center-nav-xs">
                        <div class="bg hidden-xs ">
                            <div class="dropdown dropup wrapper-sm clearfix">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">
                        <img src="/tan-admin/images/a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                                    <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt">谭重涛</strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">研发工程师</span>
                      </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight aside text-left">
                                    <li>
                                        <span class="arrow bottom hidden-nav-xs"></span>
                                        <a href="#">个人设置</a>
                                    </li>
                                    <li>
                                        <a href="profile.html">个人信息</a>
                                    </li>
                                    <li>
                                        <a href="profile.html">短信消息</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="modal.lockme.html" data-toggle="ajaxModal">退出</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                @yield('tan-main')
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open"
                   data-target="#nav,html"></a>
            </section>
        </section>
    </section>
</section>

<script src="/tan-admin/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/tan-admin/js/bootstrap.js"></script>
<!-- App -->
<script src="/tan-admin/js/app.js"></script>
<script src="/tan-admin/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/tan-admin/js/app.plugin.js"></script>
<script type="text/javascript" src="/tan-admin/js/jPlayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/tan-admin/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="/tan-admin/js/jPlayer/demo.js"></script>

@yield('tan-js')

</body>
</html>