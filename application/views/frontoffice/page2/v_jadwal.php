<div class="protect">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Jadwal Kegiatan</h2>
                    <p>Berikut adalah jadwal ketiatan terbaru
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
    </div>
</div>