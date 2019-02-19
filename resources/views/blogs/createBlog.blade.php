@extends('layouts.app')

@section('content')
	<div id="blogEdit" class="container-fluid">
		<br>
		<h1 align="center">Blog Post</h1>

		{!! Form::open(['method'=>'POST', 'action'=>'BlogController@store', 'enctype'=>'form-data/multipart', 'files'=>'true']) !!}

		  <div class="form-group">
		    {!! Form::label('title', 'Title') !!}
		    {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Title'] ) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('body', 'Content') !!}
		    {!! Form::textarea('body', null, ['class'=>'form-control textarea', 'rows'=>'10']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('image', 'Choose Photo') !!}
		    {!! Form::file('image', ['class'=>'form-control-file']) !!}
		  </div>

		  <button style="submit" class="btn btn-primary">Save</button>

		{!! Form::close()!!}

		<br>
	</div>
@endsection
