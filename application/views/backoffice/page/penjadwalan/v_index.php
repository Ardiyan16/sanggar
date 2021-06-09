<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Jadwal Rutin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Jadwal Rutin</li>
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
                            <h3 class="card-title">Jadwal Rutin</h3>
                            <a class="btn btn-success float-right" href="<?= base_url() ?>backoffice/jadwal/create"><i class="fas fa-edit"></i> Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Deskripsi</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $d) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $d->hari ?></td>
                                            <td><?= $d->tanggal ?></td>
                                            <td><?= $d->waktu ?></td>
                                            <td><?= $d->deskripsi ?></td>
                                            <td><?= $d->kategori ?></td>
                                            <td class="">
                                                <a class="btn btn-info btn-sm " href="<?= base_url('backoffice/jadwal/edit/' . $d->id_jadwal) ?>"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modalDelete<?= $d->id_jadwal ?>"><i class="fas fa-trash"></i></button>
                                                <a href="<?= base_url('backoffice/jadwal/absensi/' . $d->id_jadwal) ?>" class="btn btn-success btn-sm">Absensi</a>
                                            </td>

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
    <!-- Modal -->
    <?php
    $i = 1;
    foreach ($data as $d) { ?>
        <div class="modal fade" id="modalDelete<?= $d->id_jadwal ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Yakin ingin menghapus data?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a type="button" href="<?= base_url('backoffice/jadwal/delete/' . $d->id_jadwal) ?>" class="btn btn-danger" type="submit">Hapus</a>
                        </div>
                    </div>
            </div>
        </div>
    <?php } ?>
</div>