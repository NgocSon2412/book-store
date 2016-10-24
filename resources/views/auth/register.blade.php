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
            <div id="register" class="">
                <section class="login_content">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}"> {{ csrf_field() }}
                        <h1>Create Account</h1>
                        <div>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username"> @if ($errors->has('name')) <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span> @endif </div>
                        <div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"> @if ($errors->has('email')) <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span> @endif </div>
                        <div>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password"> @if ($errors->has('password')) <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> @endif </div>
                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="ConfirmPassword"> @if ($errors->has('password_confirmation')) <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span> @endif </div>
                        <div>
                            <button type="submit" class="btn btn-default submit"> Register </button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <p class="change_link">Already a member ? <a href="{{ url('/login') }}"> Log in </a> </p>
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