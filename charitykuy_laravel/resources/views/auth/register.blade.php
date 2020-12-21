@extends('layouts.app', ['title' => 'Register' ])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card rounded-lg"
                style="box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px;">
                <div class="card-header text-center bg-white h5">
                    <a class="text-dark" href="" style="text-decoration: none">
                        <i class="fa fa-user-plus"></i> {{ __('REGISTER') }}
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-right pl-3">{{ __('Name') }}</label>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill"
                                name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback pl-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right pl-3">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill"
                                name="email" value="{{ old('email') }}"  autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback pl-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right pl-3">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror rounded-pill" name="password" 
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback pl-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"
                                class="col-form-label text-md-right pl-3">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control rounded-pill"
                                name="password_confirmation"  autocomplete="new-password">

                        </div>

                        <div class="form-group row mb-0 pt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block rounded-pill">
                                    {{ __('Register') }}
                                </button></div>
                            <div class="col-md-12 pt-2 text-center">
                                Sudah punya akun?
                                <a class="link" href="{{ route('login') }}">
                                    {{ __('Login') }}
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