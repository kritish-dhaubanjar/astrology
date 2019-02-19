<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Create an Appointment | Contact Us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		{!! Form::open(['method'=>'POST', 'action'=>'AppointmentController@store']) !!}


			<div class="form-group">
			  {!! Form::label('name', 'Name') !!}
			  {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter name']) !!}
			</div>

			<div class="form-group">
			  {!! Form::label('contact', 'Contact No') !!}
			  {!! Form::text('contact', null, ['class'=>'form-control', 'placeholder'=>'Enter contact number']) !!}
			  <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
			</div>

			<div class="form-group">
			  {!! Form::label('email', 'Email Address') !!}
			  {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter email']) !!}
			  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>

			<div class="form-group">
			 {!! Form::label('services', 'Service')!!}
			 <select class="form-control" id="services" name="service">
			   <option value="Horoscopes">राशिफल</option>
			   <option value="Gemstones">मणि पत्थर</option>
			   <option value="Birth Journal">चीना-टिप्पण</option>
			   <option value="Vastu Shastra">वास्तु शास्त्र</option>
			 </select>
			</div>

			<div class="form-group">
		    {!! Form::label('message', 'Message')!!}
		    {!! Form::textarea('message', null, ['class'=>'form-control textarea']) !!}
		  </div>

			<div class="form-group row">
			  {!! Form::label('date', 'Date', ['class'=>'col-2 col-form-label'])!!}
			  <div class="col-10">
			    {!! Form::date('date', null, ['class'=>'form-control']) !!}
			  </div>
			</div>

			<div class="modal-footer">
			 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			 <button type="submit" class="btn btn-primary">Create an Appointment</button>
			</div>

		{!! Form::close() !!}

			{{-- <div class="form-group">
			  <label for="name">Name</label>
			  <input class="form-control" type="text" placeholder="Enter name" id="name">
			</div>		
			<div class="form-group">
			  <label for="contact">Contact No</label>
			  <input class="form-control" type="text" placeholder="Enter contact number" id="contact">
			  <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
			</div>			
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="services">Service</label>
		    <select class="form-control" id="services">
		      <option>Horoscopes</option>
		      <option>Gemstones</option>
		      <option>Numerology</option>
		      <option>Tarot Cards</option>
		      <option>Birth Journal</option>
		      <option>Vastu Shastra</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="message">Message</label>
		    <textarea class="form-control" id="message" rows="3"></textarea>
		  </div>
			<div class="form-group row">
			  <label for="date" class="col-2 col-form-label">Date</label>
			  <div class="col-10">
			    <input class="form-control" type="date" id="date" value="2011-08-19">
			  </div>
			</div>
      	</div>

	    <div class="modal-footer">
	       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	       <button type="submit" class="btn btn-primary">Create an Appointment</button>
	    </div> --}}

    </div>
  </div>
</div>