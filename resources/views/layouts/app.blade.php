<!doctype html>
<html lang="ne">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }} </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css">
	 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
	 <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}">
	 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/video.css') }}">
  </head>

  <body>
	@include('inc.status')
	<div id="contactInfo" class="container-fluid">
		<div class="row">
			<div class="infoItem phone col-sm-6 col-md-3"><i class="fas fa-phone" style="color: #ff6f00;"></i>&nbsp+977 9841 208840</div>
			<div class="infoItem envelope col-sm-6 col-md-4 col-lg-2"><i class="fas fa-envelope" style="color: #ff6f00;"></i>
				&nbsp<a href="mailto:example@domain.com">example@domain.com</a>
			</div>
		  <div class="infoItem col-sm-12 col-md-3 col-lg-2 ml-auto">

		  	@guest
		    	<i class="fas fa-sign-in-alt" style="color: #ff6f00;"></i>&nbsp<a href="{{ route('login')}}">Login</a>&nbsp&nbsp&nbsp&nbsp
		   @else
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          {{ Auth::user()->name }} <span class="caret"></span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						 <a class="dropdown-item" href="{{ route('blog.create') }}">नयाँ पोस्ट</a>
			          <a class="dropdown-item" href="{{ route('videos.create') }}">नयाँ भिडियो</a>
			          <a class="dropdown-item" href="{{ route('shop.create') }}">नयाँ वस्तु</a>
			          <a class="dropdown-item" href="{{ route('appointment.index') }}">अप्पोइन्टमेन्ट&nbsp&nbsp
			          	<span class="badge badge-secondary">{{ App\Http\Controllers\AppointmentController::new() }} नयाँ</span></h6>
			          </a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="href="{{ route('logout') }}"
		                          onclick="event.preventDefault();
		                                   document.getElementById('logout-form').submit();">
		                          Logout
		                      </a>
		             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                          {{ csrf_field() }}
		                      </form>
		        </div>
	      @endguest
		    {{-- <i class="fas fa-user-plus" style="color: #ff6f00;"></i>&nbsp<a href="#">Signup</a> --}}
		  </div>
		</div>
	</div>	

	<div class="main">

		@include('inc.navigation')	

		@yield('content')	

		@include('inc.overlay')	
		
	</div>	

	@include('inc.footer')

	@include('inc.appointment')

    <script src="https://code.jquery.com/jquery-3.1.0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script>
		$('a[href*="#"]').on('click', function (e) {
			e.preventDefault();

			$('html, body').animate({
				scrollTop: $($(this).attr('href')).offset().top
			}, 500, 'linear');
		});
	</script>

	@auth
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
		<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
		<script>
		  $('textarea').ckeditor();
		  // $('.textarea').ckeditor(); // if class is prefered.
		</script>
	@endauth	

	<script src="https://apis.google.com/js/platform.js"></script>
	

  </body>

</html>
