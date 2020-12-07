@extends('layouts.app')@section('title', 'Home')

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

    {{-- content card --}}
    <div class="row pt-4">
        @foreach ($menus as $menu)
        <div class="col-md-4">
            <div class="card text-center">
                <img src="{{ asset('img_static').'/'.$menu->gambar }}" class="card-img-top" style="height: 15em;">
                <div class="card-body d-flex flex-column text-center">
                    <h5 class="card-title">{{ $menu->title }}</h5>
                    <p class="card-text" style="text-align: justify;">{{ $menu->deskripsi }}</p>
                    <div class="row px-2">
                        @if($menu->tipe == 'donasi')
                        <div class="col-md-12 px-0">
                            <h5>Donasi yang sudah terkumpul</h5>
                        </div>
                        <div class="col-md-12 pb-3 px-0">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $menu->progress }}%;"
                                    aria-valuenow="{{ $menu->progress }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ number_format($menu->jumlah, 0, '', '.') }}</div>
                            </div>
                        </div>
                        @endif
                        <div class="col-md-12 px-0 pt-5">
                            <a href="bencana.html"
                                class="btn btn-primary">{{ ($menu->tipe == 'donasi') ? 'Donasi Sekarang' : 'Info' }}</a>
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