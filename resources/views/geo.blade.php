<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The More Loving One</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/admin2-app/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin2-app/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/admin2-app/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/admin2-app/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/admin2-app/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-boxed sidebar-mini"
      style="background: lightyellow !important;padding: 50px 0px 50px 0px;">
<div class="wrapper" style="background: pink">
    <section class="content-header">
        <h1>
            The More Loving One
        </h1>
    </section>
    <section class="content">
        <div class="input-group">
            <input type="text" class="form-control" id="address">
            <span class="input-group-addon op-geo-danger"><i class="fa fa-check"></i></span>
        </div>
    </section>
</div>
{{--<!-- jQuery 3 -->--}}
<script src="/admin2-app/bower_components/jquery/dist/jquery.min.js"></script>
{{--<!-- Bootstrap 3.3.7 -->--}}
<script src="/admin2-app/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
{{--<!-- SlimScroll -->--}}
<script src="/admin2-app/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
{{--<!-- FastClick -->--}}

<script src="/admin2-app/assets/vendor/require.js"
        data-main="/admin2-app/assets/app/controller/op-geo-ctrl"></script>

</body>
</html>
