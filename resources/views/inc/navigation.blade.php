<div id="navigation" class="sticky-top container-fluid" style="z-index:1">
	<nav class="navbar navbar-expand-md navbar-dark bg-transparent">
	  <a class="navbar-brand" href="/">
			<img src="{{ asset('images/logo.png') }}" class="d-inline-block align-top" width="75px">
		</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	      	{{-- Home --}}
	        <a class="nav-link" href="/"><i class="fas fa-home"></i>&nbspगृहपृष्ठ <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="

	        @if(Route::current()->getName() == 'home')	
	        	{{'#about'}}
	        @else
	        	{{ route('about') }}
	        @endif
				{{-- About Us --}}
	        ">हाम्रो बारेमा</a>
	      </li>
	      {{-- Videos --}}
	      <li class="nav-item">
	        <a class="nav-link" href="{{ route('videos.index') }}">&nbsp भिडियो</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="

	        @if(Route::current()->getName() == 'home')	
	        		{{'#services'}}
	        @else
	        		{{ route('services') }}
	        @endif">
				{{-- Services --}}
	     		सेवाहरु</a>
	      </li>
	      {{-- Blog --}}
	      <li class="nav-item">
	        <a class="nav-link" href="{{ route('blog.index') }}">व्लग</a>
	      </li>
      	{{-- Shop --}}
	      <li class="nav-item">
	        <a class="nav-link" href="{{ route('shop.index') }}">रत्न तथा रुद्राक्ष भण्डार</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="modal" data-target="#appointmentModal">सम्पर्क</a>
	      </li>
	      {{-- <li class="nav-item">
	        <a class="nav-link" href="#">Contact</a>
	      </li> --}}<br>
	    </ul>
	  </div>
	</nav>	
</div>