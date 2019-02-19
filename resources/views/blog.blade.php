@extends('layouts.app')

@section('content')

	<div class="container-fluid bg-transparent">
		<div class="astronomy jumbotron bg-transparent">
		  <h1 class="display-4">तन्त्र ज्योतिष व्लग</h1>
		  <hr class="my-4">
		  <br>
		</div>
	</div>	

	<div class="blog jumbotron white">

		@foreach($blogs as $blog)

			<div class="row">
				<div class="card">
					<div class="card-body">
						<div class="m-row">
							<div class="col m4 s12">
								<img src="{{ Storage::url($blog->image) }}" class="img-fluid">
							</div>
							<div class="col m8 s12">
								<br>
								{{-- <small> 21 March, 2018 | 12:17</small><br> --}}
								<small>{{ $blog->created_at}}</small><br>
								<h3>{{ $blog->title }}</h3>
								<hr class="my-4">
								<p>{!! $blog->getText() !!}</p>
								<a href="{{ route('blog.show', $blog->id) }}" class="btn btn-outline-secondary">Read More</a>

							@auth
									<a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-info">Edit</a>
							@endauth	

							@auth
									{!! Form::open(['method'=>'DELETE', 'action'=>['BlogController@destroy', $blog->id], 'style'=>'float:right;' ]) !!}
										<button type="submit" class="btn btn-danger" style="float: right;">Delete</button>
									{!! Form::close() !!}
							@endauth

							</div>
						</div>	
					</div>	
				</div>
			</div>	
			<br>

		@endforeach	

		{{ $blogs->links() }}
	</div>
@endsection