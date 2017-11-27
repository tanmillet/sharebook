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

                        <li class="time-label">
                  <span class="bg-red">
                    17.11. 2017
                  </span>
                        </li>
                @foreach($timelines as $timeline)
                        <li>
                            <i class="fa fa-camera bg-purple"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                <div class="timeline-body">
                                    @foreach($timeline->text as $img)
                                        <img src="{{$img}}"
                                             alt="..." class="margin" width="150" height="100">
                                     @endforeach
                                    {{--<img src="http://sbook.io/aetherupload/display/file/201711/af6f4dcd157fdddcb85395c6b5f500dc.jpg"--}}
                                         {{--alt="..." class="margin" width="150" height="100">--}}
                                    {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                    {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                    {{--<img src="http://placehold.it/150x100" alt="..." class="margin">--}}
                                </div>
                            </div>
                        </li>
                @endforeach
                <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-red">
                    17.11. 2017
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-envelope bg-blue"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                            <div class="timeline-body">
                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                quora plaxo ideeli hulu weebly balihoo...
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-primary btn-xs">Read more</a>
                                <a class="btn btn-danger btn-xs">Delete</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-user bg-aqua"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend
                                request</h3>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-comments bg-yellow"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                            <div class="timeline-body">
                                Take me to your leader!
                                Switzerland is small and neutral!
                                We are more like Germany, ambitious and misunderstood!
                            </div>
                            <div class="timeline-footer">
                                <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li class="time-label">
                  <span class="bg-green">
                     15.11. 2017
                  </span>
                    </li>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                            <div class="timeline-body">
                                <img src="http://sbook.io/aetherupload/display/file/201711/af6f4dcd157fdddcb85395c6b5f500dc.jpg"
                                     alt="..." class="margin" width="150" height="100">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-video-camera bg-maroon"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>

                            <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

                            <div class="timeline-body">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                            src="http://sbook.io/aetherupload\display\file\201711\136159265561556a02f953b8221ef0d3.mp4"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="timeline-footer">
                                <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                    </li>
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
