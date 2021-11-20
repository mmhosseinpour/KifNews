@extends('admin.layout.auth')

@section("body")
    <form method="POST" class="form-signin" action="{{ url('/admin/login') }}">
        {{ csrf_field() }}
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only {{ $errors->has('email') ? ' has-error' : '' }}">Email
            address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required
               autofocus>
        @if ($errors->has('email'))
            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
        <label for="inputPassword"
               class="sr-only {{ $errors->has('password') ? ' has-error' : '' }}">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a href="{{ url('/admin/password/reset') }}" class="text-body">Forgot password?</a>
        <a href="{{ url('/admin/register') }}" class="text-body">Register</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
    </form>


@endsection
