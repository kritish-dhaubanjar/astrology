@extends('layouts.app')

@section('content')
		<div class="blog jumbotron white">
			<div class="container-fluid">
				<h2 align="center"> Appointments </h2><br><br>

					<div class="table-responsive">
					<table class="table table-hover table-striped">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Contact</th>
					      <th scope="col">Email</th>
					      <th scope="col">Service</th>
					      <th scope="col">Message</th>
					      <th scope="col">Date</th>
					      <th scope="col">Check</th>
					    </tr>
					  </thead>
					  <tbody>

					  	@foreach($appointments as $appointment)

					    <tr>

					      <th scope="row">{{ $appointment->id}}</th>
					      <td>{{ $appointment->name}}</td>
					      <td>{{ $appointment->contact}}</td>
					      <td>{{ $appointment->email}}</td>
					      <td>{{ $appointment->service}}</td>
					      <td>{!! $appointment->message !!}</td>
					      <td>{{ $appointment->appointment_at}}</td>

					      @if( $appointment->checked )
					      	<td><button class="btn btn-success disabled">Checked</button></td>
					      @else
					      	<td>
					      		{!! Form::open(['method'=>'POST', 'action'=>['AppointmentController@check', $appointment->id ]]) !!}
					      			<button type="submit" class="btn btn-outline-success">Check</button>
					      		{!! Form::close() !!}
					      	</td>
					      @endif

					    </tr>				

					  	@endforeach

					    <tr>

					  </tbody>
					</table>
					</div>
			</div>	
			<br>
		</div>
@endsection