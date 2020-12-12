@extends('layouts.app')

@section('content')
{{-- carousel (later move this to the app.blade.php) --}}
<div class="container text-center">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/img_static/charity1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img_static/charity2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/img_static/charity3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- content non donation --}}
    <div class="row pt-4">
        @foreach ($non_dnt as $menu_non)
        <div class="col-md-4 pt-2">
            <div class="card text-center">
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
            <div class="card text-center" style="height: 39em; box-shadow: rgba(0, 0, 0, 0.8) 0px 7px 10px, inset rgba(0, 0, 0, 0.15) 0px 0px 3px;">
                <img src="{{ asset('img_static').'/'.$menu->gambar }}" class="card-img-top" style="height: 8.7em;">
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
                        </div></div>
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