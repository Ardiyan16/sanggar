<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="map-responsive">
                    <img src="<?= base_url() ?>assets/images/img_dance.png">
                </div>
            </div>
            <div class="col-md-8">
                <div class="name">
                    <h2><?= $view->nama ?></h2>
                    <h5>Harga Sewa : Rp.<?= $view->harga_sewa ?> / Hari</h5>
                </div>
                <form action="<?= base_url('frontoffice/penyewaan/save') ?>" method="post" class="main_form">
                    <div class="row">
                        <div class="col-md-12 ">
                            <label>Tanggal Sewa</label>
                            <?php
                            $acak = mt_rand(0, 700);
                            $tanggal = date("dmY")
                            ?>
                            <input class="contactus" type="hidden" name="id_penyewaan" value="PS-<?= $tanggal ?>-<?= $acak ?>">
                            <input class="contactus" placeholder="" value="<?= $user['id_user'] ?>" type="text" hidden name="id_user">
                            <input class="contactus" placeholder="" value="<?= $view->id_costume ?>" type="text" hidden name="id_costume">
                            <input class="contactus" placeholder="" type="date" name="tanggal_sewa">
                        </div>
                        <div class="col-md-12">
                            <label>Tanggal Kembali</label>
                            <input class="contactus" placeholder="" type="date" name="tanggal_kembali">
                        </div>
                        <div class="col-md-12">
                            <label>Total Kostum</label>
                            <input class="contactus" placeholder="Total Kostum" type="number" name="total_kostum">
                        </div>
                        <div class="col-md-12">
                            <label>Total Pembayaran</label>
                            <input class="contactus" placeholder="Total Kostum" type="text" name="total_pembayaran">
                        </div>
                        <div class="col-md-12">
                            <label>Metode Pembayaran</label>
                            <input class="contactus" placeholder="Metode Pembayaran" value="Transfer" type="text" name="metode_pembayaran">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="send_btn">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>