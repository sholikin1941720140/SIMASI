    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/dashboard" class="brand-link">
            <img src="{{ asset('dist/img/simasi.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">SIMASI</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('mahasiswa.index') }}" class="d-block">Alexander Pierce</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{ route('dashboard.index') }}"
                            class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <span class="text-center text-white xs mt-2">Data Master</span>
                    <li class="nav-item menu-open mt-1">
                        <a href="{{ route('dosen.index') }}"
                            class="nav-link {{ request()->routeIs('dosen.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dosen
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open mt-1">
                        <a href="{{ route('matakuliah.index') }}"
                            class="nav-link {{ request()->routeIs('matakuliah.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Mata Kuliah
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open mt-1">
                        <a href="{{ route('kelas.index') }}"
                            class="nav-link {{ request()->routeIs('kelas.index') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-fw fa-user"></i>
                            <p>
                                Kelas
                            </p>
                        </a>
                    </li>
                    <span class="text-center text-white xs mt-2">Input Data</span>
                    <li class="nav-item menu-open mt-1">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Modul
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('jadwal-mengajar.index') }}"
                                    class="nav-link {{ request()->routeIs('jadwal-mengajar.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jadwal Dosen Mengajar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('jadwal.index') }}"
                                    class="nav-link {{ request()->routeIs('jadwal.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jadwal Kelas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('absensi.index') }}"
                                    class="nav-link {{ request()->routeIs('absensi.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Absensi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Laporan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <a href="{{ route('logout') }}">
                        <button type="submit" class="btn btn-block btn-danger btn-sm mt-2">
                            Logout
                        </button>
                    </a>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
