<nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top" style="background-color: lightblue;">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ route('menus.index') }}><img src="{{ asset('/img_static/logoCharity.png') }}"
                width="150"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- search box --}}
            @if(request()->is('/'))
            <form class="form-inline ml-auto" action="" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari donasi?" aria-label="Search"
                    name="search_text">
                {{-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="searchh"><img
                        src="{{ asset('/img_static/search.png') }}" alt="" style="width:30px;height:30px;"></button>
                --}}
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" name="searchh"><i class="fa fa-search"
                        aria-hidden="true"></i></button>
            </form>
            @endif

            <!-- login/register -->
            <ul class="navbar-nav font-weight-bold ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="..."
                        style="font-family: 'Montserrat', sans-serif;">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-light" href="..."
                        style="font-family: 'Nunito Sans', Times, serif;">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>