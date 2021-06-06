<body class="main-layout">
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
                    <?php foreach ($notif as $n) { ?>
                        <a href="#tampilNotif<?= $n['id_notif'] ?>" data-toggle="modal" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> <?= substr($n['keterangan'], 0, 30); ?>...
                            <span class="float-right text-muted text-sm"><?= $n['waktu'] ?></span>
                        </a>
                    <?php } ?>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
        </div>
        <div>
            <h1 style="text-align: center;">Beranda</h1>
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
    <?php foreach ($notif as $n) { ?>
        <div class="modal fade" id="tampilNotif<?= $n['id_notif'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Foto Transfer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5><?= $n['keterangan'] ?></h5>
                            <br>
                            <p style="text-align: right;"><?= $n['waktu'] ?></p>
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('Beranda/update_notif/'. $n['id_notif']) ?>" class="btn btn-danger">Close</a>
                        </div>
                    </div>
            </div>
        </div>
    <?php } ?>