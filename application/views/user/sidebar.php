<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?= base_url('adminlte/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= $user['name'] ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icmon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    <hr color="white">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="fas fa-fw fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                    <hr color="white">   
                <li class="nav-item">
                    <a href="<?= base_url('masteraset') ?>" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Data Master Aset
                        </p>
                    </a>
                </li>
                <hr color="white">
                <li class="nav-item">
                    <a href="<?= base_url('masteraset') ?>" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Surah Serah Terima
                        </p>
                    </a>
                </li>
               
                    <hr color="white">
                <li class="nav-header">TRANSAKSI</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-random"></i>
                        <p>
                            Transaksi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="<?= base_url('asetbaru') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Aset Baru</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="<?= base_url('lokasi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lokasi Aset</p>
                            </a>
                        </li>
                    </ul>
                   
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('perbaikan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Perawatan/Perbaikan Aset</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Perpindahan Aset</p>
                            </a>
                        </li>
                    </ul>
                    <hr color="white">
                <li class="nav-header">LAPORAN</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Stok Barang</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Barang Masuk</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Barang Keluar</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Outlet</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Suplier</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Petugas</p>
                            </a>
                        </li>
                    </ul>
                    <hr color="white">
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>