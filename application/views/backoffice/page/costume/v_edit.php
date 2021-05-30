<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Costume</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Costume</li>
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
                            <h3 class="card-title">Tambah Costume </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="formAchiev" method="post" action="<?= base_url('Backoffice/Costume/update') ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="hidden" name="id_costume" value="<?= $edit->id_costume ?>">
                                    <input type="text" name="nama" value="<?= $edit->nama ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Foto Kostum</label>
                                    <input type="file" name="foto" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                                    <input type="hidden" name="old_image" value="<?= $edit->foto ?>">
                                </div>
                                <div class="form-group">
                                <img src="<?= base_url('assets/images/costume/' . $edit->foto) ?>" width="200px" height="150px" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" class="form-control" id="exampleInputPassword1" placeholder="Enter Description"><?= $edit->deskripsi ?></textarea>
                                </div>
                                <div class="form-group">
                                    <select name="id" class="form-control">
                                        <option>--Jenis Tari--</option>
                                        <?php foreach ($data as $d) : ?>
                                            <option <?php if ($d->id == $edit->id) {
                                                        echo 'selected="selected"';
                                                    } ?> value="<?= $d->id ?>"><?= $d->jenis_tari ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?= base_url() ?>backoffice/costume"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
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