<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kirim Notifikasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Kirim Notifikasi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?= $this->session->flashdata('success') ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kirim Notifikasi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Jenis Kelamin</th>
                                        <th>kategori</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($user as $d) {
                                    ?>
                                        <tr>
                                            <form action="" method="post">
                                                <input type="hidden" name="id_user" value="<?= $d->id_user ?>">
                                                <td><?= $i++ ?></td>
                                                <td><?= $d->nama_lengkap ?></td>
                                                <td><?= $d->email ?></td>
                                                <td><?= $d->alamat ?></td>
                                                <td><?= $d->no_telepon ?></td>
                                                <td><?= $d->jenis_kelamin ?></td>
                                                <td><?= $d->kategori ?></td>
                                                <td><?= $d->status ?></td>
                                                <td>
                                                    <button class="btn btn-success btn-sm " type="submit"><i class="fas fa-trash"></i> Kirim Notifikasi</button>
                                                </td>
                                            </form>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>