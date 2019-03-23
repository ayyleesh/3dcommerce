@extends('layouts.app')

@section('content')
<div class="container w-50">
  <div class="card">

    <h5 class="card-header brown white-text text-center py-4">
      <strong>Sign in</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">
            <form class="text-center" style="color: #757575;" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="md-form">
                  <input type="email" id="email" class="form-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  <label for="email">{{ __('E-Mail Address') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="md-form">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password">{{ __('Password') }}</label>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="d-flex">
                    <!-- Remember me -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                    </div>
                </div>

                <div class="form-group mb-0">
                        <button class="btn btn-outline-brown btn-rounded btn-block mt-4 waves-effect z-depth-0" type="submit">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                </div>
            </form>
        </div>
  </div>
</div>
@endsection
