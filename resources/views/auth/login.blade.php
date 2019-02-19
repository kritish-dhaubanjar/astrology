@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <p align="center">
                <img src="images/logo.png" class="img-fluid" width="200px">
            </p>  
            <br>

            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">E-Mail Address</label>

                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group custom-controls-stacked">
                        <div class="checkbox">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                Remember Me
                            </label>
                        </div>
                </div>

                <button type="submit" class="btn btn-lg btn-block btn-primary">Login</button>
            </form>

            <br>
            <p align="center">
                <a href="{{ route('password.request') }}">
                    <button type="button" class="btn btn-light btn-sm center">Lost your password?</button>
                </a>
            </p>    

        </div>
    </div>
</div>
@endsection
