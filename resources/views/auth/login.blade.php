@extends('auth.app')

@section('title')
    Login |
@endsection

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}"> 
        {{ csrf_field() }}
        <h1>Login Form</h1>
        <div>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"> 
            @if ($errors->has('email')) 
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span> 
            @endif
        </div>
        <div>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif 
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>
        </br>
        <div>
            <button type="submit" class="btn btn-default submit"> Login </button> 
            <a class="reset_pass" href="{{ url('/password/reset') }}">Forgot Your Password?</a> 
        </div>
        <div class="clearfix"></div>
        <div class="separator">
            <p class="change_link">New to site? <a href="{{ url('/register') }}"> Create Account </a> </p>
            <div class="clearfix"></div>
            <br />
            <div>
                <a href="{{ url('/') }}"><h1><i class="fa fa-paw"></i> Book Store!</h1></a>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
            </div>
        </div>
    </form>
@endsection
