<nav class="navbar navbar-expand-md justify-content-between navbar-dark bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href={{ route('menus.read') }}><img src="{{ asset('/img_static/logoCharity.png') }}" width="150"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar home -->
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