<!-- Sidebar Menu -->
@if (auth()->user()->roles_id == 1)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white @yield('activeDashboard')">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Beranda
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white @yield('dataUser')">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Data Anggota
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}" class="nav-link text-white @yield('kelolaUser')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data Anggota</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.user.create') }}" class="nav-link text-white @yield('tambahUser')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Anggota</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white @yield('dataBuku')">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Pendataan Buku
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.kategori.index') }}" class="nav-link text-white @yield('kelolaKategori')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Kategori</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.rak.index') }}" class="nav-link text-white @yield('kelolaRak')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Rak</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.penerbit.index') }}" class="nav-link text-white @yield('kelolaPenerbit')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Penerbit</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.buku.index') }}" class="nav-link text-white @yield('kelolaBuku')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Buku</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.transaksi.index') }}" class="nav-link text-white @yield('dataTransaksi')">
                    <i class="nav-icon fas fa-exchange"></i>
                    <p>
                        Transaksi Buku
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.kartu') }}" class="nav-link text-white @yield('kartu')">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                        Kartu Perpustakaan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin/struktur/1/edit" class="nav-link text-white @yield('struktur')">
                    <i class="nav-icon fa fa-building-o"></i>
                    <p>
                        Struktur Organisasi
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white @yield('')"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endif

<!-- /.sidebar-menu -->
