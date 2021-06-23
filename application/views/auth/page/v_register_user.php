<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
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
                        <img src="<?= base_url() ?>assets/images/foto_tunggal.png" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <p class="login-card-description">Daftar Akun</p>
                            <form action="<?= base_url('Auth/register_user') ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Anda">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                    <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Nama Lengkap</label>
                                    <input type="text" name="username" class="form-control" placeholder="Nama Pengguna / User">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Alamat Lengkap</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">No Telepon</label>
                                    <input type="number" name="no_telepon" class="form-control" placeholder="No Telepon">
                                    <?= form_error('no_telepon', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option>-- Jenis Kelamin --</option>
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="kategori">
                                        <option>-- Kategori --</option>
                                        <option value="Dewasa-Remaja">Dewasa-Remaja</option>
                                        <option value="Anak-Anak">Anak-Anak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="status">
                                        <option>-- Status --</option>
                                        <option value="anggota sanggar">Anggota Sanggar</option>
                                        <option value="umum">Umum</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Kata Sandi">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <button type="submit" class="btn btn-block login-btn mb-4">Daftar</button>
                            </form>
                            <p class="login-card-footer-text">Sudah memiliki akun? <a href="<?= base_url('Auth/login_user') ?>" class="text-reset">Masuk</a></p>
                            <nav class="login-card-footer-nav">
                                <a href="">Dapatkan Bantuan disini</a>
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