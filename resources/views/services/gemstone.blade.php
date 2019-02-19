@extends('layouts.app')	

@section('content')

	<div class="container-fluid">
		<div class="serviceOverlay jumbotron bg-transparent">
		  <h1>मणि पत्थर</h1>
		  <hr class="my-4">
		  <br><br>
		</div>
	</div>	

	<div class="white jumbotron" id="about">
	  <br><br>
	  <h2>के हो <span class="orange">मणि पत्थर?</span></h2>
	  	<div class="row">
	  		<div class="col-sm-12 col-md-7">
	  			<br>
	  			<h4>मणि पत्थर बारे</h4>
	  			<p>
	  				<br>तन्त्र ज्योतिष को भण्डारमा उपलब्ध मणि पत्थर हरु उत्कृस्ट गुणस्तर क हुनु का साथै सर्व सुलभ दर मा वितरण गरिन्छ। विभिन्न राशी अनुसारका पत्थरहरु चाहिएमा हामीलाई सम्पर्क गर्नुहोस। 
	  			</p>
	  		</div>
	  		<div class="col-sm-12 col-md-5" align="center">
	  			<img class="img-fluid" src="{{ asset('images/horoscope.png') }}">
	  		</div>
	  	</div>
	  	<br>
	</div>	

@endsection()			
