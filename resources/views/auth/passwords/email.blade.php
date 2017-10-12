@extends('layouts.outerLayout')

@section('content')
    <div class="container">
        <div class="row">

            <hr/>

            <div class="col-md-4"></div>
            <div class="col-md-4">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="resetEmailForm">
                    <div class="panel-heading bg-danger text-info">Find Your Account</div>

                    <hr/>


                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <input id="email" type="email" class="form-control" placeholder="Let us know your Email Id" name="email"
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block">
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

@endsection
