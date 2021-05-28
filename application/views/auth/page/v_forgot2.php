<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password User</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/login2/css/login.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="<?= base_url() ?>assets/images/img_dance.png" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="<?= base_url() ?>assets/login2/images/logo.svg" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Masukkan password baru</p>
                            <h5><?= $this->session->flashdata('message') ?></h5>
                            <form action="<?= base_url('Auth/ubah_pass') ?>" method="post">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Password Baru</label>
                                    <input type="password" name="password1" class="form-control" placeholder="Password Baru">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Password Baru</label>
                                    <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password Baru">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <button type="submit" class="btn btn-block login-btn mb-4">Simpan</button>
                            </form>
                            <p class="login-card-footer-text"><a href="<?= base_url('Auth/login_user') ?>" class="text-reset">Login disini</a></p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">Dapatkan Bantuan disini</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>