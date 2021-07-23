<?php
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>
<meta name="_token" content="{!! csrf_token() !!}" />

@extends('layouts.manage')

@section('content')
@include('partials.sidemenu')

    <div class="container">
        <div class="content">

        	<div class="well">
            	<h1 class="title">Site Socials</h1>

              {!! Form::model(array($social_facebook_obj, $social_twitter_obj), array('route' => 'submitSiteSocials')) !!}
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>

              <ul id='sortable' style="list-style:none;">

                <li class="form-group" id="social-fb">
      						{!! Form::label('facebook', 'Facebook Username:') !!}
      						{!! Form::text('facebookUrl', $social_facebook_obj->socialFacebookUrl, ['class' => 'form-control', 'id' => 'fb_url']) !!}
                  {!! Form::label('facebook', 'Facebook address name:') !!}
                  {!! Form::text('facebookName', $social_facebook_obj->socialFacebookName, ['class' => 'form-control', 'id' => 'fb_name']) !!}
      					</li>
      					<li class="form-group" id="social-tw">
      						{!! Form::label('twitter', 'Twitter Username:') !!}
      						{!! Form::text('twitterUrl', $social_twitter_obj->socialTwitterUrl, ['class' => 'form-control', 'id' => 'tw_url']) !!}
                  {!! Form::label('facebook', 'Twitter address name:') !!}
                  {!! Form::text('twitterName', $social_twitter_obj->socialTwitterName, ['class' => 'form-control', 'id' => 'tw_name']) !!}
      					</li>
               </ul>

               <div class="form-group">
     						{!! Form::submit('Save') !!}
     					</div>

    				{!! Form::close() !!}

          </div>
        </div>
    </div>
@stop
