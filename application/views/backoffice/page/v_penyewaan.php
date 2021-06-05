<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penyewaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Penyewaan</li>
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
                            <h3 class="card-title">Penyewaan</h3>
                            <a class="btn btn-success float-right" href="#modalsewa" data-toggle="modal"><i class="fas fa-table"></i> Data penyewaan berjalan</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>nama kostum</th>
                                        <th>tanggal sewa</th>
                                        <th>tanggal kembali</th>
                                        <th>total kostum</th>
                                        <th>total pembayaran</th>
                                        <th>metode pembayaran</th>
                                        <th>foto transfer</th>
                                        <th>nama penyewa</th>
                                        <th>opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($sewa as $d) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $d->nama ?></td>
                                            <td><?= $d->tanggal_sewa ?></td>
                                            <td><?= $d->tanggal_kembali ?></td>
                                            <td><?= $d->total_kostum ?></td>
                                            <td><?= $d->total_pembayaran ?></td>
                                            <td><?= $d->metode_pembayaran ?></td>
                                            <td><img class="rounded" width="64px" src="<?= base_url('assets/images/bukti_tf/' . $d->foto_tf) ?>"></td>
                                            <td><?= $d->nama_lengkap ?></td>
                                            <td>
                                                <a class="btn btn-warning  btn-sm text-white" data-toggle="modal" href="#modalView<?= $d->id_penyewaan ?>"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-info btn-sm " href="<?= base_url('backoffice/penyewaan/terima_sewa/' . $d->id_penyewaan) ?>"><i class="fas fa-check"></i></a>
                                                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modalDelete<?= $d->id_penyewaan ?>"><i class="fas fa-trash"></i></button>
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
    foreach ($sewa as $d) : ?>
        <div class="modal fade" id="modalDelete<?= $d->id_penyewaan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <a type="button" href="<?= base_url('backoffice/penyewaan/delete/' . $d->id_penyewaan) ?>" class="btn btn-danger" type="submit">Hapus</a>
                        </div>
                    </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php
    $i = 1;
    foreach ($sewa as $d) : ?>
        <div class="modal fade" id="modalView<?= $d->id_penyewaan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <img class="rounded" src="<?= base_url('assets/images/bukti_tf/' . $d->foto_tf) ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="modal fade" id="modalsewa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Foto Transfer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama kostum</th>
                                <th>tanggal sewa</th>
                                <th>tanggal kembali</th>
                                <th>total kostum</th>
                                <th>total pembayaran</th>
                                <th>metode pembayaran</th>
                                <th>foto transfer</th>
                                <th>nama penyewa</th>
                                <th>opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($sewa_new as $d) { ?>
                                <tr>
                                    <form method="post" action="<?= base_url('backoffice/penyewaan/kirim_notif') ?>">
                                        <td><?= $i++ ?></td>
                                        <td><?= $d->nama ?><input type="hidden" value="<?= $d->id_user ?>" name="id_user"></td>
                                        <td><?= $d->tanggal_sewa ?></td>
                                        <td><?= $d->tanggal_kembali ?></td>
                                        <td><?= $d->total_kostum ?></td>
                                        <td><?= $d->total_pembayaran ?></td>
                                        <td><?= $d->metode_pembayaran ?></td>
                                        <td><img class="rounded" width="64px" src="<?= base_url('assets/images/bukti_tf/' . $d->foto_tf) ?>"></td>
                                        <td><?= $d->nama_lengkap ?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm " href="<?= base_url('backoffice/penyewaan/arsip/' . $d->id_penyewaan) ?>"><i class="fas fa-archive"></i> Arsipkan</a>
                                            <button class="btn btn-info btn-sm " type="submit"><i class="fas fa-bell"></i> Kirim Notifikasi</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>