@extends('layouts.app')

@section('breadcumb', 'Register')
@section('hide-serchbar', 'd-none')

@section('content')
    <div id="page-login" class="container border p-5 shadow-sm rounded-4">
        <div class="row align-items-start">

            <div class="col-md-7 d-none d-lg-block d-md-block align-self-center">
                <h1 class="display-1" style="font-family: 'Poppins'; font-weight: 700; color: black">Bergabung Dan Belanja
                </h1>
            </div>

            <div class="col-md-5">
                <h1 class="text-center mx-auto judul-form col-md-11">Buat Akun</h1>
                <div class="card shadow-sm">

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- Urutan Form INPUT, LABEL, ERROR --}}
                            {{-- Name Form --}}
                            <div class="form-floating mb-3">
                                <input type="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="floatingInput"
                                    value="{{ old('name') }}" placeholder="name@example.com">

                                <label for="floatingInput">
                                    {{ __('Nama Lengkap') }}
                                </label>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Email Form --}}
                            <div class="form-floating mb-3">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                                    value="{{ old('email') }}" placeholder="name@example.com">

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

{{-- Password Confirmation --}}
<div class="form-floating mt-3">
    <input type="password" name="password_confirmation" class="form-control"
        id="password-confirm" placeholder="Confirm Password">

    <label for="password-confirm">
        {{ __('Confirm Password') }}
    </label>
</div>

                            {{-- Input Check Box --}}
                            <div class="form-check my-3">
                                <input class="form-check-input" type="checkbox">

                                <label class="form-check-label" for="remember">
                                    Setuju Dengan Syarat Dan Ketentua Kami
                                </label>
                            </div>

                            {{-- Form Submit --}}
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-primary w-50">
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
