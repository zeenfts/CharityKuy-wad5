@extends('layouts.app')

@section('content')
<div class="container text-center">
    @include('layouts.carous')

    {{-- content non donation --}}
    <div class="row pt-4">
        @foreach ($non_dnt as $menu_non)
        <div class="col-md-4 pt-2">
            <div class="card text-center rounded-lg"
                style="box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px;">
                <div class="card-body">
                    <a href="{{ route('menus.detail', $menu_non) }}"><img
                            src="{{ asset('img_static').'/'.$menu_non->gambar }}" class="card-img-top"
                            style="height: 10em; border:0;"></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row pt-5">
        <div class="col-md-12">
            <a href="{{ route('menus.add') }}" class="btn btn-secondary">+ Tambah Donasi Baru</a>
        </div>
    </div>

    {{-- content donation card --}}
    <div class="row pt-2">
        @foreach ($menus as $menu)
        <div class="col-md-3 pt-4">
            <div class="card text-center rounded-lg"
                style="height: 39em; box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px;">
                <a href="{{ route('menus.detail', $menu) }}">
                    <img src="{{ asset('img_static').'/'.$menu->gambar }}" class="card-img-top" style="height: 8.7em;">
                </a>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $menu->title }}</h5>
                    <p class="card-text" style="text-align: justify">{{ $menu->deskripsi }}</p>
                </div>
                <div class="card-footer bg-white">
                    <div class="row px-2">
                        <div class="col-md-12 px-0">
                            <h5>Donasi yang sudah terkumpul</h5>
                        </div>
                        <div class="col-md-12 pb-4 px-0">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $menu->progress }}%;"
                                    aria-valuenow="{{ $menu->progress }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ number_format($menu->jumlah, 0, '', '.') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="col-md-12 px-0">
                            <a href="{{ route('menus.detail', $menu) }}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pt-4">
        <div>
            {{ $menus->links() }}
        </div>
    </div>
</div>
@stop