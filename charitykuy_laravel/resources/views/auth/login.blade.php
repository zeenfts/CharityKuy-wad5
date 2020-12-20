@extends('layouts.app', ['title' => 'Login' ])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 pt-5">
            <div class="card rounded-lg"
                style="box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px;">
                <div class="card-header text-center bg-white h5">
                    <a class="text-dark" href="" style="text-decoration: none">
                        <i class="fa fa-user-circle"></i> {{ __('LOGIN') }}
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right pl-3">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill"
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right pl-3">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror rounded-pill" name="password"
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 pl-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-left" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block rounded-pill">
                                    {{ __('Login') }}
                                </button></div>
                            <div class="col-md-12 pt-2 text-center">
                                Belum punya akun?
                                <a class="link" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-3">
        <a class="navbar-brand" href={{ route('menus.index') }}>
            <img src="{{ asset('/img_static/logoCharity.png') }}" width="150">
        </a>
    </div>
</div>
@stop