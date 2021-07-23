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
            	<h1 class="title">Site Purchase Links</h1>

              {!! Form::model(array($purchase_apple_obj), array('route' => 'submitSitePurchases')) !!}
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
    					<div class="form-group">
    						{!! Form::label('apple', 'Apple Music url:') !!}
    						{!! Form::text('apple', $purchase_apple_obj->purchaseAppleUrl, ['class' => 'form-control']) !!}
    					</div>
    					<div class="form-group">
    						{!! Form::submit('Save') !!}
    					</div>
    				{!! Form::close() !!}

          </div>

        </div>
    </div>
@stop
