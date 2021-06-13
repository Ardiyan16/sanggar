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
                                        <th>no</th>
                                        <th>nama kostum</th>
                                        <th>tanggal sewa</th>
                                        <th>tanggal kembali</th>
                                        <th>total kostum</th>
                                        <th>total pembayaran</th>
                                        <th>metode pembayaran</th>
                                        <th>foto transfer</th>
                                        <th>nama penyewa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($sewa_new as $d) { ?>
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
</div>