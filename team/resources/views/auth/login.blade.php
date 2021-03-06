<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Team | Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{Config::get('app.url')}}/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{Config::get('app.url')}}/public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{Config::get('app.url')}}/public/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="{{Config::get('app.url')}}/public/css/mytheme.css" rel="stylesheet" type="text/css" />
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><img src="{{Config::get('app.url')}}/public/images/logo_tr_small.png"></a>
    </div><!-- /.login-logo -->

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div style="color: #f00000; font-size: 12px; text-align: center;">{{ $error }}</div>
        @endforeach
    @endif

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form  role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" checked> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat btn-black">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="{{ url(Config::get('url.register')) }}" class="text-center">Register a new membership</a><br>
        <a href="/" class="text-center">MatchDayHero Home</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<script>
    var appUrl = "{{Config::get('app.url')}}";
</script>
<!-- jQuery 2.1.4 -->
<script src="{{Config::get('app.url')}}/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{Config::get('app.url')}}/public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{Config::get('app.url')}}/public/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="https://code.createjs.com/preloadjs-0.6.1.min.js" type="text/javascript"></script>
<script src="{{ asset('public/js/preloader.js') }}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>