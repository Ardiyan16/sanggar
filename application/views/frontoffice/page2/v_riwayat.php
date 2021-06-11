<div class="protect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Riwayat</h2>
                    <p>Berikut adalah riwayat penyewaan anda
                    </p>
                </div>
            </div>
            <table class="table" width="70%">
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
                    foreach ($data as $d) { ?>
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
                                <a href="#modalselengkapnya<?= $d->id_penyewaan ?>" data-toggle="modal" class="btn btn-primary">Lihat Selengkapnya</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
    foreach($sewa as $sewa) {
?>
<div class="modal fade" id="modalselengkapnya<?= $sewa->id_penyewaan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Sewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-4">
                    <div class="map-responsive">
                        <img src="<?= base_url('assets/images/costume/' . $sewa->foto) ?>" style="height: 400; width: 400;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="hr-line-dashed"></div>
                    <form action="<?= base_url('frontoffice/penyewaan/update') ?>" method="post" enctype="multipart/form-data" class="main_form">
                        <div class="row">
                            <div class="col-md-12 form-group" style="margin-top: 30px;">
                                <label>Tanggal Sewa</label>
                                <?php
                                $acak = mt_rand(0, 700);
                                $tanggal = date("dmY")
                                ?>
                                <input class="form-control" type="hidden" name="id_penyewaan" value="<?= $sewa->id_penyewaan ?>">
                                <input class="contactus" placeholder="" value="<?= $sewa->id_user ?>" type="text" hidden name="id_user">
                                <input class="contactus" placeholder="" value="<?= $sewa->id_costume ?>" type="text" hidden name="id_costume">
                                <div class="input-group date" id="tgl1">
                                    <input type="text" readonly class="form-control" name="tanggal_sewa" value="<?= $sewa->tanggal_sewa ?>" />
                                    <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                                </div>
                                <!-- <input class="contactus" placeholder="" id="tgl1" type="date" name="tanggal_sewa"> -->
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Tanggal Kembali</label>
                                <div class="input-group date" id="tgl2">
                                    <input type="text" class="form-control" readonly value="<?= $sewa->tanggal_kembali ?>" name="tanggal_kembali" />
                                    <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                                </div>
                                <!-- <input class="contactus" id="tgl2" placeholder="" type="date" name="tanggal_kembali"> -->
                                <!--   -->
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Total Kostum</label>
                                <input class="form-control" id="jml_kostum" value="<?= $sewa->total_kostum ?>" readonly placeholder="Total Kostum" type="number" name="total_kostum">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Total Pembayaran</label>
                                <input class="form-control" id="total_byr" placeholder="Total Bayar" readonly value="<?= $sewa->total_pembayaran ?>" type="text" name="total_pembayaran">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Metode Pembayaran</label>
                                <input class="form-control" placeholder="Metode Pembayaran" readonly value="<?= $sewa->metode_pembayaran ?>" type="text" name="metode_pembayaran">
                                <input type="hidden" name="status" value="<?= $sewa->status ?>">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Bukti Transfer</label>
                                <img src="<?= base_url('assets/images/bukti_tf/' . $sewa->foto_tf) ?>" style="height: 400; width: 400;" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>