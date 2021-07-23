<?php 
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>

@extends('layouts.admin')

@section('content')
<div class="register container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="icon"></div>
                <div class="headings">
                    <div class="panel-heading"><a href="/login">Sign-in</a></div>
                    <div class="panel-heading active">Register</div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-12 control-label">Name</label>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-12 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

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
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-12 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" name="submit" value="Submit">
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
