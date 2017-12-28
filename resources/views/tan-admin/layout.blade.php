<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>KooBooK | 最好的 Web 读书分享平台</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="_token" content="{{ csrf_token() }}"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="/tan-admin/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/simple-line-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/font.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/app.css" type="text/css"/>

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
            <a href="/fr/kbk" class="navbar-brand text-lt">
                <i class=" icon-book-open icon"></i>
                <img src="/tan-admin/images/logo.png" alt="." class="hide">
                <span class="hidden-nav-xs m-l-sm">KooBooK</span>
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
<!-- Bootstrap -->
<script src="/tan-admin/js/bootstrap.js"></script>
<!-- App -->
<script src="/tan-admin/js/app.js"></script>
<script src="/tan-admin/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/tan-admin/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="/tan-admin/js/app.plugin.js"></script>
{{--<script type="text/javascript" src="/tan-admin/js/jPlayer/jquery.jplayer.min.js"></script>--}}
{{--<script type="text/javascript" src="/tan-admin/js/jPlayer/add-on/jplayer.playlist.min.js"></script>--}}
{{--<script type="text/javascript" src="/tan-admin/js/jPlayer/demo.js"></script>--}}

@yield('tan-js')

</body>
</html>