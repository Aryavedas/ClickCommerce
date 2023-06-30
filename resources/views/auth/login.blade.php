@extends('layouts.app')

@section('breadcumb', 'Login')
@section('hide-serchbar', 'd-none')

@section('content')
    <div id="page-login" class="container border p-5 shadow-sm rounded-4">
        <div class="row align-items-start">

            <div class="col-md-7 d-none d-lg-block d-md-block align-self-center">
                <h1 class="display-1" style="font-family: 'Poppins'; font-weight: 700; color: black">Welcome To Our Store</h1>
            </div>

            <div class="col-md-5">
                <h1 class="text-center mx-auto judul-form col-md-11">Masuk ke akunmu</h1>
                <div class="card shadow-sm">

                    <div class="card-body" id="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- Urutan Form INPUT, LABEL, ERROR --}}
                            {{-- Email Form --}}
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" value="{{ old('email') }}"
                                    placeholder="name@example.com">

                                <label for="floatingInput">
                                    {{ __('Email Address') }}
                                </label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Password Form --}}
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                    id="floatingPassword" placeholder="Password">

                                <label for="floatingPassword">
                                    {{ __('Password') }}
                                </label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link p-0" id="forget-password" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                            {{-- Input Check Box --}}
                            <div class="form-check my-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            {{-- Form Submit --}}
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-50" style="font-weight: bold">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
