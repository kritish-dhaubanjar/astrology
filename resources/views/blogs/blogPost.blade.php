@extends('layouts.app')

@section('content')

	<div class="blog jumbotron white">
		<div class="m-row">
			<div class="col offset-m1 s12 m10">
				<img src="{{ Storage::url($blog->image) }}" class="img-fluid">
			</div>	
		</div>	
		<div class="m-row">
			<div class="col offset-m1 s12 m10">

				<small>{{ $blog->created_at }}</small><br>

				<h3><br>{{ $blog->title }}</h3>

				<hr class="my-4">

				<p>{!! $blog->body !!}</p>

				@auth
					<a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-info">Edit</a>
				@endauth	

				@auth
					{!! Form::open(['method'=>'DELETE', 'style'=>'float:right;', 'action'=>['BlogController@destroy', $blog->id] ]) !!}
						<button type="submit" class="btn btn-danger">Delete</button>
					{!! Form::close() !!}
				@endauth
				
			</div>
		</div>

		<div class="container">
			<div class="m-row">
				<div class="fb-comments" data-href="{{url()->current()}}" data-numposts="10" width="100%"></div>
			</div>
		</div>	
		<br>
	</div>

@endsection

<div id="fb-root"></div>

<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
