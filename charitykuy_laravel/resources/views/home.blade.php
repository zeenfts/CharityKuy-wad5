@extends('layouts.app')

@section('content')
<div class="container text-center">
    @include('layouts.carous')

    {{-- content non donation --}}
    <div class="row pt-4">
        @foreach ($non_dnt as $menu_non)
        <div class="col-md-2 pt-2 px-2">
            <a class="card text-center rounded-lg" href="{{ route('menus.detail', $menu_non) }}" data-toggle="tooltip"
                data-placement="top" title="{{ $menu_non->title }}"
                style="box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px; width:11em;">
                <div class="card-body">
                    <img src="{{ asset('img_static').'/'.$menu_non->gambar }}" class="card-img-top"
                        style="height: 5em;  border:0;">
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="row pt-5">
        @if(auth()->user())
        <div class="col-md-12">
            <a href="{{ route('menus.add') }}" class="btn btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i>
                Tambah Donasi Baru</a>
        </div>
        @endif
        @if(count($menus)==0)
        <div class="col-md-12 pt-3">
            <h6>tidak ada donasi yang dimaksud</h6>
        </div>
        @endif
    </div>

    {{-- content donation card --}}
    <div class="row pt-1">
        @foreach ($menus as $menu)
        <div class="col-md-4 pt-4">
            <a class="card text-center rounded-lg text-dark" href="{{ route('menus.detail', $menu) }}"
                data-toggle="tooltip" data-placement="top" title="Mari donasi"
                style="height: 25em; box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px; text-decoration: none;">

                <img src="{{ asset('img_static').'/'.$menu->gambar }}" class="card-img-top" style="height: 9.4em;">

                <div class="card-body text-center">
                    <h5 class="card-title">{{ $menu->title }}</h5>
                    <div class="row">
                        <div
                            class="col-md-1 text-left{{ ((auth()->user()) and (auth()->user()->id == $menu->user_id)) ? ' text-info' : ' text-black-50' }}">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="col-md-5 text-left text-black-50">
                            {{ $menu->create_by->name }}
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <div class="row px-2" data-toggle="tooltip" data-placement="top" title="{{ $menu->progress }}%">
                        <div class="col-md-12 px-0">
                            <h6>Donasi yang sudah terkumpul</h6>
                        </div>
                        <div class="col-md-12 pb-4 px-0">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $menu->progress }}%; background-color:#acb6e5"
                                    aria-valuenow="{{ $menu->progress }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ number_format($menu->jumlah, 0, '', '.') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="col-md-12 px-0">
                            {{-- <a href="{{ route('menus.detail', $menu) }}" class="btn btn-primary">Donasi Sekarang
            </a> --}}
            <button type="button" class="btn btn-outline-primary rounded-pill W-10"><i class="fas fa-donate"
                    aria-hidden="true"></i> &nbsp;Donasi Sekarang</button>
        </div>
    </div>
</div>

</a>
</div>
@endforeach
</div>
<div class="d-flex justify-content-center pt-5">
    <div>
        {{ $menus->links() }}
    </div>
</div>
</div>
@stop