<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>YoBlog | 最好的 Blog 分享平台</title>
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
<body class="container">
<section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
        <div class="navbar-header aside bg-primary">
            <a href="/yo/blogs" class="navbar-brand text-lt">
                <i class="icon-eyeglasses"></i>
                {{--<img src="/tan-admin/images/logo_white.png" alt="." class="hide">--}}
                <span class="hidden-nav-xs m-l-sm">YoBlog</span>
            </a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                <i class="icon-settings"></i>
            </a>
        </div>
        <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
            <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
                <input type="text" class="form-control input-sm no-border rounded"
                       placeholder="Search blog title, keyword...">
            </div>
        </form>

        <div class="navbar-right ">
            <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="/tan-admin/images/a0.png" alt="...">
              </span>
                        谭 小米 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li>
                            <span class="arrow top"></span>
                            <a href="#">深圳市 . 广东省</a>
                        </li>
                        <li>
                            <a href="profile.html">软件研发工程师</a>
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

@yield('tan-js')

</body>
</html>