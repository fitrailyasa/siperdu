<header>
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between" style="background-color: #DFDB2B">
        <a class="navbar-brand" href="{{ route('beranda') }}">
            <img src="{{ asset('assets/images/logo-header.png') }}" width="80" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('beranda') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontak') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('koleksi-buku') }}">Collection</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success nav-link text-white px-3 py-1" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
