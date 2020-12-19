<nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top" style="background-color: lightblue;">
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
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-family: 'Montserrat', sans-serif;">Transaksi</a>
                </li>
            </ul>

            {{-- search box --}}
            @if(request()->is('/'))
            <form class="form-row ml-auto" action="" method="GET">
                <div class="col-md-11">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari donasi?" aria-label="Search"
                        name="search_text">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-outline-secondary" type="submit" name="searchh"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                </div>
            </form>
            @endif

            <!-- login/register -->
            <ul class="navbar-nav font-weight-bold ml-auto">
                @guest
                <li class="nav-item pr-2">
                    <a class="btn btn-outline-dark" href="{{ route('login') }}"
                        style="font-family: 'Montserrat', sans-serif;">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="btn btn-light" href="{{ route('register') }}"
                        style="font-family: 'Nunito Sans', Times, serif;">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ '' }}">
                            {{ __('Profile') }}
                        </a>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
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


{{-- <nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top py-3" style="background-color: lightblue;">
    <div class="container justify-content-center">

    </div>
</nav> --}}