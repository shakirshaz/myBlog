@extends('layouts.outerLayout')

@section('content')
    <div class="container">
        <div class="row">
            <hr/>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                <div class="loginForm">
                    <div class="panel-heading bg-info text-success">Login</div>

                    <hr/>

                    <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" placeholder="Enter your Email ID" required>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                            <input id="password" type="password" class="form-control" placeholder="Enter your password"
                                   name="password" required>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <span class="forgotText">Forgot Your Password?</span>
                            </a>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </form>
                </div>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
