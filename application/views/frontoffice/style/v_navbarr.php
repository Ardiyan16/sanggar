<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="<?= base_url() ?>assets/user/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- top -->
    <!-- header -->
    <header class="header-area" style="background:#909060;">
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