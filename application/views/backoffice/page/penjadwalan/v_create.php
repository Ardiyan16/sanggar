<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Jadwal Rutin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Tambah Jadwal Rutin</li>
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
                            <h3 class="card-title">Tambah Jadwal Rutin </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="formAchiev" method="post" action="<?= base_url('Backoffice/Jadwal/save') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hari</label>
                                    <input type="text" name="hari" class="form-control" id="exampleInputEmail1" placeholder="Enter Hari">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" placeholder="Enter Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Waktu</label>
                                    <input type="time" name="waktu" class="form-control" id="exampleInputEmail1" placeholder="Enter Waktu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="Enter Deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tempat</label>
                                    <input type="text" name="tempat" class="form-control" id="exampleInputEmail1" placeholder="Enter Tempat">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <option>-- Kategori --</option>
                                        <option value="Dewasa-Remaja">Dewasa-Remaja</option>
                                        <option value="Anak-Anak">Anak-Anak</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
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