@extends('admin.layout.auth')

@section("body")
    <form method="POST" class="form-signin {{ $errors->has('name') ? ' has-error' : '' }}"
          action="{{ url('/admin/register') }}">
        {{ csrf_field() }}
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <div class="form-control">
            <label for="inputName" class="sr-only {{ $errors->has('name') ? ' has-error' : '' }}">username
            </label>
            <input type="text" id="inputName" class="form-control" name="name" value="{{ old('name') }}"
                   placeholder="username" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-control">
            <label for="inputName" class="sr-only {{ $errors->has('email') ? ' has-error' : '' }}">Email
                address</label>
            <input type="email" id="inputName" class="form-control" name="email" value="{{ old('email') }}"
                   placeholder="email" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-control">

            <label for="inputPassword"
                   class="sr-only {{ $errors->has('password') ? ' has-error' : '' }}">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password"
                   required>
            @if ($errors->has('password'))
                <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="form-control">

            <label for="inputPassword"
                   class="sr-only {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">Confirm
                Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password_confirmation"
                   placeholder="Confirm Password"
                   required>
            @if ($errors->has('password_confirmation'))
                <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
            @endif
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a href="{{ url('/admin/password/reset') }}" class="text-body">Forgot password?</a>

        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
    </form>


@endsection

@section('body')

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" autofocus>


        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password">

            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>

@endsection
