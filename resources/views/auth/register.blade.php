@extends('auth.app')

@section('title')
    Register |
@endsection

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}"> 
        {{ csrf_field() }}
        <h1>Create Account</h1>
        <div>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username"> 
            @if ($errors->has('name')) 
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif 
        </div>
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
        <div>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="ConfirmPassword"> 
            @if ($errors->has('password_confirmation')) 
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span> 
            @endif
        </div>
        <div>
            <button type="submit" class="btn btn-default submit"> Register </button>
        </div>
        <div class="clearfix"></div>
        <div class="separator">
            <p class="change_link">Already a member ? <a href="{{ url('/login') }}"> Log in </a> </p>
            <div class="clearfix"></div>
            <br />
            <div>
                <a href="{{ url('/') }}"><h1><i class="fa fa-paw"></i> Book Store!</h1></a>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
            </div>
        </div>
    </form>
@endsection