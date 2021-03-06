<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kostume</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Kostum</li>
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
                            <h3 class="card-title">Kostum</h3>
                            <a class="btn btn-success float-right" href="<?= base_url() ?>backoffice/costume/create"><i class="fas fa-edit"></i> Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Harga Sewa</th>
                                        <th>Jenis Tari</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $d) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $d->nama ?></td>
                                            <td><img class="rounded" width="150px" height="100px" src="<?= base_url('assets/images/costume/' . $d->foto) ?>"></td>
                                            <td><?= $d->deskripsi ?></td>
                                            <th><?= $d->harga_sewa ?></th>
                                            <td><?= $d->jenis_tari ?></td>
                                            <td class="">
                                                <!-- <a class="btn btn-warning  btn-sm text-white" href="<?= base_url('backoffice/achiev/show/' . $d->id_costume) ?>"><i class="fas fa-eye"></i></a> -->
                                                <a class="btn btn-info btn-sm " href="<?= base_url('backoffice/costume/edit/' . $d->id_costume) ?>"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modalDelete<?= $d->id_costume ?>"><i class="fas fa-trash"></i></button>
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
        <div class="modal fade" id="modalDelete<?= $d->id_costume ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <a type="button" href="<?= base_url('backoffice/costume/delete/' . $d->id_costume) ?>" class="btn btn-danger" type="submit">Hapus</a>
                        </div>
                    </div>
            </div>
        </div>
    <?php } ?>
</div>