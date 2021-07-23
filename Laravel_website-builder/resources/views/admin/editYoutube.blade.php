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
				<h1 class="title">Edit Your YouTube channel</h1>

				{!! Form::model($youtube_obj, array('route' => 'submitYoutube')) !!}
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
				<div class="form-group">
					{!! Form::label('channel', 'Youtube channel:') !!}
					{!! Form::text('channel', $youtube_obj->channel, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Save') !!}
				</div>
				{!! Form::close() !!}
			</div>

		</div>
	</div>
@stop