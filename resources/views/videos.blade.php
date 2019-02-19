@extends('layouts.app')

@section('content')

	<div id="video" class="bg-transparent">
		​<iframe width="560" height="315" src="

			@if(!is_null($play))

				{{ $play->src }}

			@endif	
			
		" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>

	<div class="white jumbotron">

		@if(!is_null($play))
			<div class="card bg-light">
				<h5 class="card-header">संक्षिप्त</h5>
				<div class="card-body">
					{!! $play->text !!}
				</div>	
			</div>	
		@endif	

		  <br><br>
		  <h2>थप <span class="orange">भिडियोहरू</span></h2>
		  <br>
		  <p class="paragraph m-auto col-md-7">
		  	हाम्रो यूट्यूब च्यानल मा भएका भिडियो हरु
		  </p>
		  	<br><br><br>

		  	<div class="container">
			  	<div class="row">

			  		@foreach($videos as $video)
			  		
				  		<div class="col-md-4">
					  		<div class="card mb-4 box-shadow">
					  			
			                <a href="{{ route('videos.show', $video->id) }}?page={{$page}}">
			                	<img class="card-img-top" src="{{ Storage::url($video->thumbnail) }}" data-holder-rendered="true">
			                </a>

			                <div class="card-body">
			                  <p class="card-text">{!! $video->getText() !!}</p>
			                  <div class="d-flex justify-content-between align-items-center">
			                    <div class="btn-group">
			                    	@guest
			                     	<a class="btn btn-sm btn-outline-danger" href="{{ route('videos.show', $video->id) }}?page={{$page}}">Play</a>
			                     @else
			                     	<a class="btn btn-sm btn-outline-danger" href="{{ route('videos.show', $video->id) }}?page={{$page}}">Play</a>
			                      	<a class="btn btn-sm btn-outline-danger" href="{{ route('videos.edit', $video->id) }}">Edit</a>

			                      	{!! Form::open(['method'=>'DELETE', 'action'=>['VideoController@destroy', $video->id] ])!!}
			                      		<button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
			                      	{!! Form::close() !!}

			                     @endguest
			                    </div>
			                    <small class="text-muted">{{ $video->created_at }}</small>
			                  </div>
			                </div>
			            </div>
			         </div>

		         @endforeach

				</div>	
			</div>	

			{{ $videos->links() }}
			
		</div>
		
@endsection