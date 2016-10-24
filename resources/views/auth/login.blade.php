<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentellela Alela! | </title>
    <!-- Bootstrap -->
    <link href="resources/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="resources/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="resources/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="resources/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="resources/build/css/custom.min.css" rel="stylesheet"> </head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="">
                <section class="login_content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}"> {{ csrf_field() }}
                        <h1>Login Form</h1>
                        <div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"> @if ($errors->has('email')) <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif </div>
                        <div>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password"> @if ($errors->has('password')) <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif </div>
                        <div>
                            <button type="submit" class="btn btn-default submit"> Login </button> <a class="reset_pass" href="{{ url('/password/reset') }}">Forgot Your Password?</a> </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">New to site? <a href="{{ url('/register') }}"> Create Account </a> </p>
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>