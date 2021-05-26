<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Event Sanggar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Event Sanggar</li>
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
                            <h3 class="card-title">Event</h3>
                            <a class="btn btn-success float-right" href="<?= base_url() ?>backoffice/event/create"><i class="fas fa-edit"></i> Tambah</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 25%;">Acara</th>
                                        <th>Tanggal</th>
                                        <th>Jadwal Latihan</th>
                                        <th style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($data as $d) { ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $d->name_event ?></td>
                                            <td><?= $d->date_event ?></td>
                                            <?php if (!$d->date_training) { ?>
                                                <td>Belum Ada <a data-toggle="modal" href="" data-target="#modalCreate<?= $d->id_event ?>" class="text-sm"><i>(Buat Jadwal)</i></a></td>
                                            <?php } else { ?>
                                                <td><?= $d->date_training . ' (' . $d->hour_training . ')'  ?> <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modalDeleteTraining<?= $d->id_event ?>"><i class="fas fa-trash"></i></button></td>
                                            <?php } ?>
                                            <td class="">
                                                <a class="btn btn-info btn-sm " href="<?= base_url('backoffice/event/edit/' . $d->id_event) ?>"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger btn-sm " data-toggle="modal" data-target="#modalDelete<?= $d->id_event ?>"><i class="fas fa-trash"></i></button>
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
        <div class="modal fade" id="modalDeleteTraining<?= $d->id_event ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            Yakin ingin menghapus jadwal latihan?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <a type="button" href="<?= base_url('backoffice/training/delete_train/' . $d->event_id) ?>" class="btn btn-danger" type="submit">Hapus</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
    <?php
    foreach ($data as $d) { ?>
        <div class="modal fade" id="modalDelete<?= $d->event_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <a type="button" href="<?= base_url('backoffice/event/delete/' . $d->id_event) ?>" class="btn btn-danger" type="submit">Hapus</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
    <?php
    foreach ($data as $a) { ?>
        <div class="modal fade" id="modalCreate<?= $a->id_event ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="<?= base_url() ?>backoffice/training/store_event">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Buat Jadwal Latihan <?= $d->name_event ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class=" row">
                                <div class="form-group col">
                                    <label for="acara">Tanggal Event</label>
                                    <input type="date" name="date_training" required class="form-control" id="acara" placeholder="Nama Acara">
                                    <input type="" hidden name="event_id" required class="form-control" id="acara" value="<?= $a->id_event ?>" placeholder="Nama Acara">
                                </div>
                                <div class="form-group col">
                                    <label for="exampleInputPassword1">Waktu Event</label>
                                    <input type="time" name="hour_training" class="form-control" id="exampleInputPassword1" placeholder="Date">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>