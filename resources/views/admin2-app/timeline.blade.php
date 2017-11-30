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
{{--<body class="hold-transition skin-blue fixed sidebar-mini">--}}
<!-- Site wrapper -->
<div class="wrapper" style="background: pink">
    <section class="content-header">
        <h1>
            The More Loving One
            <small>Do one thing at a time, and do well.</small>
        </h1>
    </section>
    <section class="content">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    @foreach($timelines as $key=>$timeline)
                        <li class="time-label">
                  <span class="bg-red">
                    {{$key}}
                  </span>
                        </li>
                        @foreach($timeline as $item)
                            <li>
                                @if($item['type_tag'] == 'TEXT')
                                    <i class="fa fa-comments bg-yellow"></i>
                                @elseif($item['type_tag'] == 'IMG')
                                    <i class="fa fa-camera bg-purple"></i>
                                @elseif($item['type_tag'] == 'VIDEO')
                                    <i class="fa fa-video-camera bg-maroon"></i>
                                @else
                                    <i class="fa fa-envelope bg-blue"></i>
                                @endif
                                <div class="timeline-item">
                                    {{--days ago--}}
                                    <span class="time"><i class="fa fa-clock-o"></i> {{$item['created_at']}} </span>
                                    <h3 class="timeline-header"><a href="#">{{$item['title']}}</a> {{$item['digest']}}</h3>
                                    <div class="timeline-body">
                                        @if($item['type_tag'] == 'TEXT')
                                            {{$item['text']}}
                                        @elseif($item['type_tag'] == 'IMG')
                                            @foreach($item['text'] as $img)
                                                <img src="{{$img}}"
                                                     alt="..." class="margin" width="150" height="100">
                                            @endforeach
                                        @elseif($item['type_tag'] == 'VIDEO')
                                            @foreach($item['text'] as $video)
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item"
                                                            src="{{$video}}"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            @endforeach
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>
<!-- ./wrapper -->

{{--<!-- jQuery 3 -->--}}
<script src="/admin2-app/bower_components/jquery/dist/jquery.min.js"></script>
{{--<!-- Bootstrap 3.3.7 -->--}}
<script src="/admin2-app/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
{{--<!-- SlimScroll -->--}}
<script src="/admin2-app/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
{{--<!-- FastClick -->--}}
<script src="/admin2-app/bower_components/fastclick/lib/fastclick.js"></script>
{{--<!-- AdminLTE App -->--}}
<script src="/admin2-app/dist/js/adminlte.min.js"></script>
{{--<!-- AdminLTE for demo purposes -->--}}
<script src="/admin2-app/dist/js/demo.js"></script>
</body>
</html>
