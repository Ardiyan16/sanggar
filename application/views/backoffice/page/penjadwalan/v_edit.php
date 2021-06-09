<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Jadwal Rutin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Edit Jadwal Rutin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Jadwal Rutin </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="formAchiev" method="post" action="<?= base_url('Backoffice/Jadwal/update') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hari</label>
                                    <input type="text" name="hari" value="<?= $edit['hari'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Hari">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="hidden" name="id_jadwal" value="<?= $edit['id_jadwal'] ?>">
                                    <input type="date" name="tanggal" value="<?= $edit['tanggal'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Waktu</label>
                                    <input type="time" name="waktu" value="<?= $edit['waktu'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Waktu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="Enter Deskripsi"><?= $edit['deskripsi'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tempat</label>
                                    <input type="text" name="tempat" value="<?= $edit['tempat'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Tempat">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <option>-- Kategori --</option>
                                        <option value="Dewasa-Remaja" <?php if ($edit['kategori'] == "Dewasa-Remaja") {
                                                                            echo "selected=\"selected\"";
                                                                        } ?>>Dewasa-Remaja</option>
                                        <option value="Anak-Anak" <?php if ($edit['kategori'] == "Anak-Anak") {
                                                                        echo "selected=\"selected\"";
                                                                    } ?>>Anak-Anak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url() ?>backoffice/jadwal"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>