@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="serviceOverlay bg-transparent">
		  <h1>मणिरत्न भण्डार</h1>
		  <hr class="my-4">
		  {{-- <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3> --}}
		  <br><br>
		</div>
	</div>	

	<div class="white jumbotron" id="services">
	  <br><br>
	  <h2>उपलब्ध <span class="orange">मणिपत्थर हरु</span></h2>
	  <br>
	  <p class="paragraph m-auto col-md-7">
	  	अहिले तन्त्र ज्योतिष को भण्डार मा उपलब्ध मणि पत्थर हरु
	  </p>
	  	<br><br><br>
	  	<div class="container">
			<div class="card-deck">

				@foreach($products as $product)

				<div class="col-md-4" style="padding: 0px;">	
				  <div class="card">
				    <img class="card-img-top" src="{{ Storage::url( $product->image ) }}" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">{{ $product->name }}</h5>
				      <p class="card-text">{!! $product->description !!}</p>
						  
						  @auth
							  <a href="{{ route('shop.edit', $product->id) }}" class="btn btn-secondary">Edit</a>
							  {{ Form::open(['method'=>'DELETE', 'action'=>['ShopController@destroy', $product->id], 'style'=>'float:right;']) }}
							  	{{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
							  {{ Form::close() }}
							@endauth  

				    </div>
				    <div class="card-footer">
				      <small class="text-muted">Last updated {{ $product->updated_at}}</small>
				    </div>
				  </div>
				</div>

				@endforeach

			</div>	  		
	  	</div>

	  	<br>

	  	<nav id="videoPagination">
	  	  {{ $products->links() }}
		</nav>

	</div>
@endsection