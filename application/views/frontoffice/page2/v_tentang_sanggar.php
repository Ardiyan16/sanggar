<div class="about">
    <div class="container_width">
        <div class="row d_flex">
            <div class="col-md-5">
                <div class="about_img text_align_center">
                    <figure><img src="<?= base_url() ?>assets/images/foto_tunggal.png" alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-7">
                <div>
                    <h2>Salam Budaya</h2>
                    <p>Sanggar tari citra budaya merupakan wadah
                        Bagi masyarakat untuk kegiatan seni tari.
                        Bebaskan tubuh
                        Anda untuk bergerak, selalu
                        mengasah kemampuan diri, dan
                        Melestarikan budaya
                        kesenian. Yuk ! gabung Bersama kami di Sanggar Tari
                        Citra Budaya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="protect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Profil Sanggar</h2>
                    <p>Berikut adalah profil Sanggar
                    </p>
                </div>
            </div>
            <?php foreach ($site as $s) { ?>
                <table class="table">
                    <tbody>
                        <tr class="table-secondary">
                            <th width="35">Nama Sanggar</th>
                            <td><?= $s->name_site ?></td>
                        </tr>
                        <tr class="table-light">
                            <th width="35">Tahun Berdiri</th>
                            <td><?= $s->since_site ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <th width="35">Pemilik</th>
                            <td><?= $s->owner_site ?></td>
                        </tr>
                        <tr class="table-light">
                            <th width="35">Alamat Sanggar</th>
                            <td><?= $s->address_site ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <th width="35">Jumlah Pelatih</th>
                            <td><?= $jml_pelatih ?></td>
                        </tr>
                        <tr class="table-light">
                            <th width="35">Jumlah Anggota</th>
                            <td><?= $jml_anggota ?></td>
                        </tr>
                        <tr class="table-secondary">
                            <th width="35">Email Sanggar</th>
                            <td><?= $s->email_site ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
        </div>
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Pelatih Sanggar</h2>
                    <p>Berikut adalah pelatih Sanggar
                    </p>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama Pelatih</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelatih as $p) { ?>
                        <tr>
                            <td><img class="rounded-circle" width="250px" height="250px" src="<?= base_url('assets/images/trainer/' . $p->image_trainer) ?>"></td>
                            <td><?= $p->name_trainer ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Anggota Sanggar</h2>
                    <p>Berikut adalah anggota sanggar dewasa-remaja
                    </p>
                </div>
            </div>
            <table class="table table-striped" style="margin-bottom: 30px;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Anggota</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota as $a) {
                        $no = 1 ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a->nama_lengkap ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <!-- <h2>Anggota Sanggar</h2> -->
                    <p>Berikut adalah anggota sanggar anak-anak
                    </p>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Anggota</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($anggota2 as $a) {
                        $no = 1 ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $a->nama_lengkap ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row" style="margin-top: 60px;">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Prestasi dan Event</h2>
                    <p>Berikut adalah prestasi dan event sanggar
                    </p>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($penghargaan as $p) { ?>
                        <tr>
                            <td><img class="rounded" width="200px" height="100px" src="<?= base_url('assets/images/achiev/' . $p->img_achiev) ?>"></td>
                            <td><?= $p->desc_achiev ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>