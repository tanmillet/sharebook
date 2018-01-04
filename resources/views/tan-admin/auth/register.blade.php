<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>Musik | Web Application</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    {{--<link rel="stylesheet" href="/tan-admin/js/jPlayer/jplayer.flat.css" type="text/css"/>--}}
    <link rel="stylesheet" href="/tan-admin/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/simple-line-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/font.css" type="text/css"/>
    <link rel="stylesheet" href="/tan-admin/css/app.css" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="/tan-admin/js/ie/html5shiv.js"></script>
    <script src="/tan-admin/js/ie/respond.min.js"></script>
    <script src="/tan-admin/js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="bg-info dker">
<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl">
        <a class="navbar-brand block" href="/fr/kbk"><span class="h1 font-bold">KooBooK</span></a>
        <section class="m-b-lg">
            <header class="wrapper text-center">
                <strong>Sign up to find interesting thing</strong>
            </header>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" placeholder="Name" type="text"
                           class="form-control rounded input-lg text-center no-border" name="name"
                           value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" placeholder="Email" type="email"
                           class="form-control rounded input-lg text-center no-border" name="email"
                           value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" placeholder="Password" type="password"
                           class="form-control rounded input-lg text-center no-border" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input id="password-confirm" placeholder="Password-Confirm" type="password"
                           class="form-control rounded input-lg text-center no-border" name="password_confirmation"
                           required>
                </div>
                <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i
                            class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center">
                    <small>Already have an account?</small>
                </p>
                <a href="/login" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>`AP` backend app designed by terry lucas<br>&copy; 2018</small>
        </p>
    </div>
</footer>
</body>

</html>