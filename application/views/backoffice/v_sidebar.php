<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <!-- <img src="<?= base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">CITRA BUDAYA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('username') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item ">
                    <a href="<?= base_url() ?>backoffice/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Halaman Utama
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>backoffice/achiev" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Arsip</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>backoffice/costume" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kostum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('backoffice/about') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="<?= base_url() ?>backoffice/Penyewaan" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            Penyewaan
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Keanggotaan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('backoffice/trainer') ?>" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pelatih</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('backoffice/Dashboard/user') ?>" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Penjadwalan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>backoffice/event" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('backoffice/Jadwal') ?>" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Latihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('backoffice/Jadwal/v_absen') ?>" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Absensi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Riwayat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('backoffice/penyewaan/riwayat_penyewaan') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Riwayat Penyewaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('backoffice/jadwal/riwayat') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Riwayat Kegiatan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>