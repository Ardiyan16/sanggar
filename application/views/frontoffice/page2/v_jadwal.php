<div class="protect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Jadwal Kegiatan</h2>
                    <p>Berikut adalah jadwal latian terbaru
                    </p>
                </div>
                <div class="text-right" style="text-align: left;">
                    <a href="#modalabsen" data-toggle="modal" class="btn btn-success">Data Absensi Anda</a>
                </div>
                <div class="card" style="width: 18rem; background-color: #909060;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">Jadwal Latihan</h5>
                        <p class="card-text" style="color: white;">Sabtu</p>
                        <p class="card-text" style="color: white;">Minggu</p>
                    </div>
                </div>
            </div>
            <?php foreach ($jadwal as $s) { ?>
                <table class="table" style="margin-top: 25px;">
                    <tbody>
                        <tr class="table-secondary">
                            <th width="35">Tanggal</th>
                            <td><?= $s->tanggal ?></td>
                        </tr>
                        <tr class="table-light">
                            <th width="35">Waktu</th>
                            <td><?= $s->waktu ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <th width="35">Lokasi</th>
                            <td><?= $s->tempat ?></td>
                        </tr>
                        <tr class="table-light">
                            <th width="35">Deskripsi</th>
                            <td><?= $s->deskripsi ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <th width="35">kategori</th>
                            <td><?= $s->kategori ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Jadwal Latihan Event</h2>
                    <p>Berikut adalah jadwal latian event terbaru
                    </p>
                </div>
            </div>
        </div> <?php foreach ($event as $s) { ?>
            <table class="table" style="margin-top: 25px;">
                <tbody>
                    <tr class="table-secondary">
                        <th width="35">Tanggal</th>
                        <td><?= $s->date_training ?></td>
                    </tr>
                    <tr class="table-light">
                        <th width="35">Waktu</th>
                        <td><?= $s->hour_training ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th width="35">Keterangan</th>
                        <td><?= $s->type_training ?></td>
                    </tr>
                    <tr class="table-light">
                        <th width="35">kategori</th>
                        <td><?= $s->type_age ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th width="35">Nama Event</th>
                        <td><?= $s->name_event ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>

<div class="modal fade" id="modalabsen" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Absensi anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" width="70%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal / Waktu</th>
                            <th>Deskripsi</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data as $d) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $d->tanggal ?> / <?= $d->waktu ?></td>
                                <td><?= $d->deskripsi ?></td>
                                <td><?= $d->keterangan ?></td>
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