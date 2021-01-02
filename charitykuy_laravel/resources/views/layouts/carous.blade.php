<div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
    @if(request()->is('/') or request()->is('18/detail'))
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        @if(request()->is('/'))
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        @endif
    </ol>
    @endif
    <div class="carousel-inner">
        @if(request()->is('/'))
        <div class="carousel-item active">
            <img src="{{ asset('/img_static/charity1.jpg') }}" class="d-block w-100" height="400"
                style="filter: blur(1.4px)">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('/img_static/charity2.jpg') }}" class="d-block w-100" height="400"
                style="filter: blur(1.4px)">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('/img_static/charity3.jpg') }}" class="d-block w-100" height="400"
                style="filter: blur(1.4px)">
        </div>
        @else
        @if(request()->is('17/detail'))
        <div class="carousel-item active">
            <img src="{{ asset('img_static/kurban_set.png') }}" class="d-block w-100" height="430">
        </div>
        @elseif(request()->is('18/detail'))
        <div class="carousel-item active">
            <img src="{{ asset('img_static/umrah_set.png') }}" class="d-block w-100" height="430">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('/img_static/hajj_set.png') }}" class="d-block w-100" height="430"
                style="filter: blur(1.4px)">
        </div>
        @else
        <div class="carousel-item active">
            <img src="{{ asset('img_static').'/'.$item->gambar }}" class="d-block w-100" height="430">
        </div>
        @endif
        @endif
    </div>
    @if(request()->is('/') or request()->is('18/detail'))
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    @endif
</div>