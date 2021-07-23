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

            <h1 class="title">Edit Your Site Information</h1>

            {!! Form::model($siteData, array('route' => 'submitSiteInfos')) !!}
            <ul>
    				    @foreach($errors->all() as $error)
    				        <li>{{ $error }}</li>
    				    @endforeach
    				</ul>
  					<div class="form-group">
  						{!! Form::label('title', 'Title:') !!}
  						{!! Form::text('title', $siteData->title, ['class' => 'form-control']) !!}
  					</div>
  					<div class="form-group">
  						{!! Form::label('description', 'Description:') !!}
  						{!! Form::textarea('description', $siteData->description, ['class' => 'form-control']) !!}
  					</div>
  					<div class="form-group">
  						{!! Form::submit('Save') !!}
  					</div>
  				{!! Form::close() !!}

          </div>

        </div>
    </div>
@stop
