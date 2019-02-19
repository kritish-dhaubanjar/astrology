@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4">

            <p align="center">
                <img src="{{ asset('images/logo.png') }}">
            </p>  
            <br>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">E-Mail Address</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Send Password Reset Link
                    </button>
                </div>

            </form>
        </div>  

    </div>
</div>
@endsection
