@extends('layouts.app', ['title' => 'Profile'])

@section('content')
<div class="container justify-content-center">
    <div class="card rounded-lg text-center shadow-sm">
        <a class="text-dark h5 pb-1 pt-2" href="" style="text-decoration: none">
            <i class="fa fa-user"></i>&nbsp;
            {{ auth()->user()->name }}'s Profile
            &nbsp;<i class="fa fa-user-o"></i>
        </a>
    </div>

    {{-- left-section --}}
    <div class="row pt-2">
        <div class="col-sm-12 col-lg-6">
            <div class="card rounded-lg h-100"
                style="box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px; width:34em; height:31em">
                <div class="card-header text-center bg-white">
                    <div class="col-md-12">
                        <form enctype="multipart/form-data" action="/profile" method="POST" class="row pt-3">
                            <div class="col-md-4">
                                <img src="{{ request('avatar1') }}"
                                    style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                            </div>
                            <div class="col-md-8 px-0">
                                <label>Update Profile Image</label>
                                <input type="hidden" name="avatar2"
                                    value="{{ isset($item) ? $item->gambar : old('avatar2') }}">
                                <input type="file" class="pl-2" accept="image/*" id="inputAvatar" name="avatar1">
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                <div class="pt-5 mt-1 text-right">
                                    <button type="submit" class="btn btn-sm btn-dark rounded-pill" disabled>{{ __('Update Avatar') }}</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user-profile-information.update') }}">
                        @csrf @method('put')
                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-right pl-3">{{ __('Name') }}</label>

                            <input id="name" type="text"
                                class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror rounded-pill" name="name"
                                value="{{ old('name') ?? auth()->user()->name }}" autocomplete="name" autofocus>

                            @error('name', 'updateProfileInformation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"
                                class="col-form-label text-md-right pl-3">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email"
                                class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror rounded-pill" name="email"
                                value="{{ old('email') ?? auth()->user()->email }}" autocomplete="email" autofocus>

                            @error('email', 'updateProfileInformation')
                            <span class="invalid-feedback py-0" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0 mt-5">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block rounded-pill">
                                    {{ __('Update Info') }}
                                </button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- right-section (optional) --}}
        <div class="col-sm-12 col-lg-6 justify-content-center">
            <div class="card rounded-lg h-100"
                style="box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px; width:33.7em; height:31em">
                <div class="card-header text-center bg-white">
                    <img src="https://images.unsplash.com/photo-1485125457414-5f3aa5b0d208?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1019&q=80"
                        style="width: 480px; height:165px; object-fit: cover">
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf @method('put')
                        <div class="form-group text-center">
                            <label for="current_password"
                                class="col-form-label text-md-right pl-3">{{ __('Current Password') }}</label>

                            <input id="current_password" type="password"
                                class="form-control @error('current_password', 'updatePassword') is-invalid @enderror rounded-pill"
                                name="current_password" autocomplete="new-password" autofocus>

                            @error('current_password', 'updatePassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-6">
                                <label for="password"
                                    class="col-form-label text-md-right">{{ __('New Password') }}</label>

                                <input id="password" type="password"
                                    class="form-control @error('password', 'updatePassword') is-invalid @enderror rounded-pill"
                                    name="password" autocomplete="new-password" autofocus>

                                @error('password', 'updatePassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-md-6 text-center">
                                <label for="password-confirm"
                                    class="col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control rounded-pill"
                                    name="password-confirm" autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-5">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info btn-block rounded-pill">
                                    {{ __('Change Password') }}
                                </button></div>
                            <div class="col-md-12 pt-1 text-center">
                                <div class="small">
                                    Two Factor Authentication?
                                    <a class="link" href="{{ route('menus.index') }}">
                                        {{ __('Enable it') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center pt-3 justify-content-center">
            <a class="navbar-brand" href={{ route('menus.index') }}>
                <img src="{{ asset('/img_static/logoCharity.png') }}" width="150">
            </a>
        </div>
    </div>
</div>
@stop