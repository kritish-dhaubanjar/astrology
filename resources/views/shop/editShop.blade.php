@extends('layouts.app')

@section('content')

	<div id="blogEdit" class="container-fluid">
		<br>
		<h1 align="center">Edit Product</h1>

		{!! Form::model($product, ['method'=>'PATCH', 'action'=>['ShopController@update', $product->id], 'enctype'=>'form-data/multipart', 'files'=>'true']) !!}

		  <div class="form-group">
		    {!! Form::label('name', 'Name') !!}
		    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Title'] ) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('description', 'Description') !!}
		    {!! Form::textarea('description', null, ['class'=>'form-control textarea', 'rows'=>'10']) !!}
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
