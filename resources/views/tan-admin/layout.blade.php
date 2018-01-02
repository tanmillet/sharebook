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
        <div class="navbar-right ">

            <ul class="nav navbar-nav m-n hidden-xs nav-user user">

                <li class="hidden-xs">

                    <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">

                        <i class="icon-bell"></i>

                        <span class="badge badge-sm up bg-danger count" style="display: inline-block;">3</span>

                    </a>

                    <section class="dropdown-menu aside-xl animated fadeInUp">

                        <section class="panel bg-white">

                            <div class="panel-heading b-light bg-light">

                                <strong>You have <span class="count" style="display: inline;">3</span>
                                    notifications</strong>

                            </div>

                            <div class="list-group list-group-alt"><a href="#" class="media list-group-item"
                                                                      style="display: block;"><span
                                            class="pull-left thumb-sm text-center"><i
                                                class="fa fa-envelope-o fa-2x text-success"></i></span><span
                                            class="media-body block m-b-none">Sophi sent you a email<br><small
                                                class="text-muted">1 minutes ago</small></span></a>

                                <a href="#" class="media list-group-item">

                    <span class="pull-left thumb-sm">

                      <img src="/tan-admin/images/a0.png" alt="..." class="img-circle">

                    </span>

                                    <span class="media-body block m-b-none">

                      Use awesome animate.css<br>

                      <small class="text-muted">10 minutes ago</small>

                    </span>

                                </a>

                                <a href="#" class="media list-group-item">

                    <span class="media-body block m-b-none">

                      1.0 initial released<br>

                      <small class="text-muted">1 hour ago</small>

                    </span>

                                </a>

                            </div>

                            <div class="panel-footer text-sm">

                                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>

                                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the
                                    notifications</a>

                            </div>

                        </section>

                    </section>

                </li>

                <li class="dropdown">

                    <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">

              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">

                <img src="/tan-admin/images/a0.png" alt="...">

              </span>

                        谭小米<b class="caret"></b>

                    </a>

                    <ul class="dropdown-menu animated fadeInRight">

                        <li>

                            <span class="arrow top"></span>

                            <a href="#">Settings</a>

                        </li>

                        <li>

                            <a href="profile.html">Profile</a>

                        </li>

                        <li>

                            <a href="#">

                                <span class="badge bg-danger pull-right">3</span>

                                Notifications

                            </a>

                        </li>

                        <li>

                            <a href="docs.html">Help</a>

                        </li>

                        <li class="divider"></li>

                        <li>

                            <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a>

                        </li>

                    </ul>

                </li>

            </ul>

        </div>
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
                                <ul class="nav bg clearfix">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        个人中心
                                    </li>
                                    <li>
                                        <a href="/ad/profile">
                                            <i class="icon-home icon text-primary"></i>
                                            <span class="font-bold">首页门户</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ad/profile">
                                            <i class="icon-user icon text-success"></i>
                                            <span class="font-bold">个人信息</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="genres.html">
                                            <i class="icon-ban icon text-info"></i>
                                            <span class="font-bold">我的权限</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ad/msg">
                                            <i class="icon-envelope icon text-primary-lter"></i>
                                            <b class="badge bg-primary pull-right">6</b>
                                            <span class="font-bold">我的消息</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ad/userpass">
                                            <i class="fa  fa-warning text-primary-lter"></i>
                                            <span class="font-bold">修改密码</span>
                                        </a>
                                    </li>
                                    <li class="m-b hidden-nav-xs"></li>
                                </ul>
                                <ul class="nav" data-ride="collapse">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        菜单
                                    </li>
                                    <li class="active">
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
                                            <li class="active">
                                                <a href="/ad/users" class="auto">
                                                    <i class="fa fa-users text-xs text-primary-lter"></i>
                                                    <span>用户列表</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/ad/roles" class="auto">
                                                    <i class="fa fa-user text-xs text-primary-lter"></i>
                                                    <span>角色列表</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/ad/perms" class="auto">
                                                    <i class="fa fa-ban text-xs text-primary-lter"></i>
                                                    <span>权限列表</span>
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
                                <ul class="nav bg clearfix">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        操作中心
                                    </li>
                                    <li>
                                        <a href="/ad/profile">
                                            <i class="fa fa-exchange text-danger"></i>
                                            <span class="font-bold">接口测试</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="genres.html">
                                            <i class="icon-speedometer icon text-info"></i>
                                            <span class="font-bold">计划任务</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ad/logger">
                                            <i class="fa  fa-file-text-o text-info-dker"></i>
                                            <span class="font-bold">日志消息</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ad/media">
                                            <i class="fa  fa-video-camera text-primary-lter"></i>
                                            <span class="font-bold">影像管理</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="genres.html">
                                            <i class="fa   fa-adjust text-success-lter"></i>
                                            <span class="font-bold">配置管理</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="genres.html">
                                            <i class="fa  fa-bug text-danger-dker"></i>
                                            <span class="font-bold">异常报告</span>
                                        </a>
                                    </li>
                                    <li class="m-b hidden-nav-xs"></li>
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
                          <strong class="font-bold text-lt">谭小米</strong>
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
                <section class="vbox">
                    @yield('tan-main')
                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open"
                   data-target="#nav,html"></a>
            </section>

        </section>
    </section>
</section>

<script src="/tan-admin/js/jquery.min.js"></script>
<script src="/tan-admin/js/bootstrap.js"></script>
<!-- App -->
<script src="/tan-admin/js/app.js"></script>
<script src="/tan-admin/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/tan-admin/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="/tan-admin/js/app.plugin.js"></script>

@yield('tan-js')
</body>
</html>