<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?= base_url() ?>assets/user/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- top -->
    <!-- header -->
    <header class="header-area" style="background:#909060;">
        <div class="left" style="background:#909060;">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                    <span class="dropdown-item dropdown-header">15 Notifikasi</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> <?= substr($notif['keterangan'], 0, 30); ?>
                        <span class="float-right text-muted text-sm"><?= $notif['waktu'] ?></span>
                    </a>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
        </div>
        <div>
            <h1 style="text-align: center;"><?= $judul ?></h1>
        </div>
        <div class="right" style="background:#909060;">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu">
                    <span class="dropdown-item dropdown-header"><?= $this->session->userdata('username') ?></span>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('Auth/logout_user') ?>" class="dropdown-item">
                        <i class="fa fa-sign-out" style="color: black;"></i> Log out
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('frontoffice/Profile') ?>" class="dropdown-item">
                        <i class="fa fa-pencil-square-o" style="color: black;"></i> Profil Saya
                    </a>
                </div>
            </li>
        </div>
    </header>