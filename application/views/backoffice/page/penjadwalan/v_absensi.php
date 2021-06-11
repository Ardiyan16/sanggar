<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Absensi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Absensi</a></li>
                        <li class="breadcrumb-item active">Absensi</li>
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
                            <h3 class="card-title">Absensi</h3><br>
                            <form>
                                <select name="kategori" class="form-control-md-3">
                                    <option>-- Pilih Kategori --</option>
                                    <option value="Dewasa-Remaja">Dewasa-Remaja</option>
                                    <option value="Anak-Anak">Anak-Anak</option>
                                </select>
                                <button type="submit" class="btn btn-info btn-sm">Pilih</button>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url('backoffice/jadwal/save_absen') ?>" method="post">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        $i = 1;
                                        foreach ($absen as $d) : ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><input type="hidden" value="<?= $edit['id_jadwal'] ?>" name="id_jadwal"><?= $d->nama_lengkap ?>
                                                    <input type="hidden" name="id_user[]" value="<?= $d->id_user ?>">
                                                </td>
                                                <td align="center">
                                                    <label class="form-check-label">H</label>&nbsp;&nbsp;<label class="form-check-label">T</label>&nbsp;&nbsp;<label class="form-check-label">TH</label><br>
                                                    <input type="checkbox" name="keterangan<?php echo $no; ?>" value="hadir" />&nbsp;&nbsp;
                                                    <input type="checkbox" name="keterangan<?php echo $no; ?>" value="telat" />&nbsp;&nbsp;
                                                    <input type="checkbox" name="keterangan<?php echo $no; ?>" value="tidak hadir" />
                                                </td>
                                            </tr>
                                        <?php $no++; endforeach; ?>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-info">Simpan Absen</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>