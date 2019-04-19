@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
<div class="container w-50">
  <div class="card">
    <h5 class="card-header gradientsolid white-text text-center py-4">
      <strong>{{ __('Register') }}</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">
        <form class="text-center" style="color: #757575;" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="md-form">

                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                <label for="name">{{ __('Name') }}</label>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="md-form">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
              <label for="email">{{ __('E-Mail Address') }}</label>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>

            <div class="md-form">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="md-form">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="toc" required>
                <label class="form-check-label" for="toc">By registering, I agree to the Terms and Condition</label>
            </div>

            <button type="submit" class="btn btn-outline-unique btn-rounded btn-block my-4 waves-effect z-depth-0">
                {{ __('Register') }}
            </button>
        </form>
    </div>
    </div>
</div>
@endsection
