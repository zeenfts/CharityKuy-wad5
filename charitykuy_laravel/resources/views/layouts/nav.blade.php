@php
$img_link = [
    '//dd7tel2830j4w.cloudfront.net/f1510009325845x824160452699288700/A.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859392159x541018578223884100/B.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859409521x374254034366458600/C.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859450985x102933758404105900/D.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859468400x527699048863723900/E.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859500656x933212465140968600/F.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859530250x660503074061125500/G.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859562311x841428601648658600/H.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859576225x954706225078553000/I.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859606130x142825840273872020/J.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859626405x801974485861137500/K.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859675580x266716414131224160/L.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859704448x163864577189087870/M.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859836219x632431179517880000/N.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859891313x809682428138330600/O.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859936573x214360509533435100/P.png',
    '//dd7tel2830j4w.cloudfront.net/f1512859969136x620444205822423000/Q.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860044044x265613583382219070/R.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860078436x304001721553504450/S.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860094165x267422131728380920/T.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860119859x991487064631655800/U.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860143733x786652282346040000/V.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860158545x359364627161994560/W.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860180583x103629535995423790/X.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860233847x389071396784856900/Y.png',
    '//dd7tel2830j4w.cloudfront.net/f1512860248120x569141123909503200/Z.png'
];
@endphp
<nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top"
    style="background: linear-gradient(to right, lightblue, #acb6e5);">
    <div class="container">
        <a class="navbar-brand" href={{ route('menus.index') }}><img src="{{ asset('/img_static/logoCharity.png') }}"
                width="150"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- main -->
            <ul class="navbar-nav font-weight-bold">
                <li class="nav-item{{ (request()->is('/')) ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('menus.index') }}"
                        style="font-family: 'Montserrat', sans-serif;">Home</a>
                </li>
                @if(auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-family: 'Montserrat', sans-serif;">Transaksi</a>
                </li>
                @endif
            </ul>

            {{-- search box --}}
            @if(request()->is('/'))
            <form class="form-row ml-auto col-md-7 px-0" action="{{ route('menus.index') }}" method="GET" role="search">
                @csrf
                <div class="col-md-11 pr-0">
                    <input class="form-control mr-sm-2 pl-2 rounded-0" type="search" placeholder="Cari donasi?" aria-label="Search"
                        name="search_text">
                </div>
                <div class="col-md-1 pl-0">
                    <button class="btn btn-outline-secondary rounded-0" type="submit" name="searchh"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                </div>
            </form>
            @endif

            <!-- login/register -->
            <ul class="navbar-nav font-weight-bold ml-auto">
                @guest
                <li class="nav-item pr-2">
                    <a class="btn btn-outline-dark" href="{{ route('login') }}"
                        style="font-family: 'Montserrat', sans-serif;"><i class="fa fa-sign-in" aria-hidden="true"></i>
                        {{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <div class="pt-2"></div>
                <li class="nav-item">
                    <a class="btn btn-light" href="{{ route('register') }}"
                        style="font-family: 'Nunito Sans', Times, serif;"><i class="fa fa-user-plus"
                            aria-hidden="true"></i> {{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown justify-content-end">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{-- {{ Auth::user()->name[0] }}  --}}
                        {{-- <input type="hidden" name="img_link" value="{{ isset($img_link) ? $img_link : '' }}"> --}}
                        <img src="{{ $img_link[ord(strtoupper(auth()->user()->name[0])) - ord('A')] }}" class="rounded-circle" style="width: 2.5em; height: 2.5em" alt="">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="fa fa-user" aria-hidden="true"></i> {{ __('Profile') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                            onmouseover="this.style.color='red';" onmouseout="this.style.color='';">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>