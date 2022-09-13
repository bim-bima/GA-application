@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please {{ __('Login') }}</h1>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" autofocus required  autocomplete="email" value="{{ old('email') }}">
                    <label for="email">{{ __('Email Address') }}</label>
                    @error ('email')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required  >
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit"> {{ __('Login') }}</button>
                </form>
            {{-- forgot password --}}
            {{-- @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif --}}

                    <small  class="d-block text-center mt-3">not registered ? <a href="/register">register now </a></small>

              </main>
        </div>
    </div>
</div>
                        {{-- remember checkbox --}}
                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            </div> --}}
@endsection
