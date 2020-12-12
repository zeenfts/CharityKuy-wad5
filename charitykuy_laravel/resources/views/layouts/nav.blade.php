<nav class="navbar navbar-expand-md justify-content-between navbar-light bg-info shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ route('menus.index') }}><img src="{{ asset('/img_static/logoCharity.png') }}" width="150"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- search box --}}
        @if(request()->is('/'))
        <form class="form-inline" action="" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Ingin berdonasi?" aria-label="Search"
                name="search_text">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="searchh"><img
                    src="{{ asset('/img_static/search.png') }}" alt="" style="width:30px;height:30px;"></button>
        </form>
        @endif

        <!-- login/register -->
        <ul class="navbar-nav font-weight-bold">
            <li class="nav-item">
                <a class="nav-link" href="..." style="font-family: 'Times New Roman', Times, serif; color: black;">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="..." style="font-family: 'Times New Roman', Times, serif; color: black;">Register</a>
            </li>
        </ul>
    </div>
</nav>