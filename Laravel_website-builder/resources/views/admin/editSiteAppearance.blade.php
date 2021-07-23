<?php
/*
* IP3 - Group 2
* Website Builder - 2016
*/
?>

@extends('layouts.manage')

@section('content')
@include('partials.sidemenu')

    <div class="container">
        <div class="content">

        	<div class="well">
            	<h1 class="title">Site Appearance</h1>

              {!! Form::model(array($background_image_obj, $background_thumbnail_obj, $logo_image_obj, $logo_thumbnail_obj), array('route' => 'submitSiteAppearance', 'files'=> true)) !!}

              <div>
                @if($background_thumbnail_obj->backgroundThumbnailUrl != '')
                  <h2>Your Current Background: </h2>
                  <img src="{{$background_thumbnail_obj->backgroundThumbnailUrl}}"/><br><br>
                @endif

                Upload Background Image: <input type="file" name="image" size="25" /><br><br>
              </div>

              <div>
                @if($logo_thumbnail_obj->logoThumbnailUrl != '')
                  <h2>Your Current Logo: </h2>
                  <img src="{{$logo_thumbnail_obj->logoThumbnailUrl}}"/><br><br>
                @endif

                Upload Logo: <input type="file" name="logo" size="25" />
              </div>

	            <input type="submit" name="submit" value="Submit" />
              {!! Form::close() !!}

          </div>

        </div>
    </div>
@stop
