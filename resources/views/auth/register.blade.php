@extends('layouts.outerLayout')

@section('content')
    <div class="container">
        <div class="row">
            <hr/>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

                <div class="registerForm">
                    <div class="panel-heading bg-danger text-info">Register</div>

                    <hr/>

                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>


                            <input id="name" type="text" class="form-control" name="name" placeholder="Enter yor name" value="{{ old('name') }}"
                                   required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <input id="email" type="email" class="form-control" placeholder="Enter your email" name="email"
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                            <input id="password" type="password" class="form-control" placeholder="Enter your password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>

                            <input id="password-confirm" type="password" placeholder="Re-enter your password" class="form-control"
                                   name="password_confirmation" required>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-block">
                                Register
                            </button>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
