<header
    class="navbar navbar-nav navbar-expand-lg navbar-light d-none d-lg-flex align-items-center justify-content-around px-3"
    style="background-color: #DFDB2B">
    <li>
        <a class="navbar-brand font-weight-bold" href="{{ route('beranda') }}">
            <img src="{{ asset('assets/images/logo-header.png') }}" alt="Logo" width="60">
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white @yield('textHome') font-weight-bold" href="{{ route('beranda') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white @yield('textContact') font-weight-bold" href="{{ route('kontak') }}">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white @yield('textCollection') font-weight-bold"
            href="{{ route('koleksi-buku') }}">Collection</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-success nav-link text-white px-3 py-1 font-weight-bold" href="{{ route('login') }}">Login</a>
    </li>
</header>

<!-- Header Mobile -->
<header class="navbar navbar-expand-lg navbar-light d-lg-none d-flex align-items-center justify-content-between px-3"
    style="background-color: #DFDB2B">
    <a class="navbar-brand font-weight-bold" href="{{ route('beranda') }}">
        <img src="{{ asset('assets/images/logo-header.png') }}" alt="Logo" width="60">
    </a>

    <!-- Tombol hamburger (toggler) -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Daftar navigasi -->
    <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white @yield('textHome') font-weight-bold" href="{{ route('beranda') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @yield('textContact') font-weight-bold"
                    href="{{ route('kontak') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @yield('textCollection') font-weight-bold"
                    href="{{ route('koleksi-buku') }}">Collection</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-success nav-link text-white px-3 py-1 font-weight-bold"
                    href="{{ route('login') }}">Login</a>
            </li>
        </ul>
    </div>
</header>
<!-- End Header Mobile -->
