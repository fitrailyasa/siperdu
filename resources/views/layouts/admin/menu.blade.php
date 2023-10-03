<!-- Sidebar Menu -->
@if (auth()->user()->roles_id == 1)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
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
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-check"></i>
                    <p>
                        Verifikasi
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.verifUser') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Verifikasi User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.verifPermohonan') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Verifikasi Permohonan</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Data User
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.user.index') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.user.create') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data User</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-tower-broadcast"></i>
                    <p>
                        Data Menara
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.menara.index') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data Menara</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.menara.create') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Menara</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Data Permohonan
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.indexPemohon') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data Pemohon</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.indexPerusahaan') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data Perusahaan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.indexDokumen') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data Dokumen</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.permohonan.create') }}" class="nav-link small text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Permohonan</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@elseif (auth()->user()->roles_id == 2)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
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
                <a href="{{ route('op.verifPermohonan') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-check"></i>
                    <p>
                        Verifikasi Permohonan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-tower-broadcast"></i>
                    <p>
                        Menara
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('op.menara.index') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Kelola Data Menara</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('op.menara.create') }}" class="nav-link text-grey">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Data Menara</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@elseif (auth()->user()->roles_id == 3)
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('client.dashboard') }}" class="nav-link text-white">
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
                <a href="{{ route('client.permohonan.index') }}" class="nav-link text-white">
                    <i class="nav-icon fas fa-check"></i>
                    <p>
                        Status Permohonan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white"
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
