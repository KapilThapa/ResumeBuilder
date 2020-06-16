@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="Email address" required autocomplete="email" autofocus>
                            <label for="email">Email address</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                required autocomplete="current-password">
                            <label for="password">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" name="remember" id="remember" class="custom-control-input"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-lg btn-primary btn-block text-uppercase"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                        <hr class="my-4">
                        <a class="btn btn-lg btn-google btn-block text-uppercase"
                            href="{{route('login.service','google')}}"><i class="fab fa-google mr-2"></i> Sign in with
                            Google</a>
                        <a class="btn btn-lg btn-facebook btn-block text-uppercase"
                            href="{{route('login.service','facebook')}}"><i class="fab fa-facebook-f mr-2"></i> Sign in
                            with Facebook</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection