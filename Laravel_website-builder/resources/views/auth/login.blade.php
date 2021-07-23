<?php 
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>

@extends('layouts.admin')

@section('content')
<div class="login container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="icon"></div>
                <div class="headings">
                    <div class="panel-heading active">Sign-in</div>
                    <div class="panel-heading"><a href="/register">Register</a></div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-12 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input type="email" class="form-control input" name="email" value="{{ old('email') }}" id="email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-12 control-label">Password</label>

                            <div class="col-md-12">
                                <input type="password" class="form-control input" name="password">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label>
                                    <input type="checkbox" name="remember" id="rlabel"> Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                 <input type="submit" name="submit" value="Sign in">
                            </div>
                        </div>
                    </form>

                    <div id="altlogin">
                        <p>Or sign in with-</p>
                        <div class="social">
                            <img src='images/facebook.png'/>
                            <img src="images/twitter.png" />
                            <img src="images/google.png" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
