@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">{{ __('Register') }}</h1>
                <form action="{{ route('register') }}" method="POST">
                 @csrf
                  <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror " id="name" name="name" placeholder="name" required value="{{ old('name') }}">
                    <label for="name">{{ __('Name') }}</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" required value="{{ old('email') }}">
                    <label for="email">{{ __('Email Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Password" required autocomplete="new-password">
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password-confirm') is-invalid @enderror" id="password-confirm" name="password_confirmation"  placeholder="password-confirm" required autocomplete="new-password">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    @error('password-confirm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">{{ __('Register') }}</button>
                </form>
                <small  class="d-block text-center mt-3">Allready registered ? <a href="/login"> login </a></small>
              </main>
        </div>
    </div>
</div>











@endsection
