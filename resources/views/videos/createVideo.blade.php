@extends('layouts.app')

@section('content')
	<div id="blogEdit" class="container-fluid">
		<br>
		<h1 align="center">Video Post</h1>

		{!! Form::open(['method'=>'POST', 'action'=>'VideoController@store', 'enctype'=>'form-data/multipart', 'files'=>'true']) !!}

		  <div class="form-group">
		    {!! Form::label('src', 'Embeded URL') !!}
		    {!! Form::text('src', null, ['class'=>'form-control', 'placeholder'=>'https://www.youtube.com/embed/lJIrF4YjHfQ'] ) !!}
		  </div>

		  <a href="https://youtu.be/lJIrF4YjHfQ" target="new">Click Here For Help</a><br><br>

		  <div class="form-group">
		    {!! Form::label('text', 'Video Details') !!}
		    {!! Form::textarea('text', null, ['class'=>'form-control textarea', 'rows'=>'10']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('thumbnail', 'Choose Video Thumbnail') !!}
		    {!! Form::file('thumbnail', ['class'=>'form-control-file']) !!}
		  </div>

		  <button style="submit" class="btn btn-primary">Save</button>

		{!! Form::close()!!}

		<br>
	</div>
@endsection
