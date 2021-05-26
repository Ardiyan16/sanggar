<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Site</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Site</li>
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
                            <h3 class="card-title">Edit Site </h3>
                        </div>
                        <form action="<?= base_url('backoffice/about/update/' . $data->id_site) ?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" name="name_site" class="form-control" id="name" placeholder="Enter name" value="<?= $data->name_site ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="since">Tahun Berdiri</label>
                                            <input type="text" name="since_site" class="form-control" id="since" placeholder="Enter since" value="<?= $data->since_site ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="owner">Nama Pemilik</label>
                                            <input type="text" name="owner_site" class="form-control" id="owner" placeholder="Enter name" value="<?= $data->owner_site ?>">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email_site" class="form-control" id="email" placeholder="Enter email" value="<?= $data->email_site ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Logo</label>
                                            <input type="file" name="logo_site" class="form-control" id="image" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <textarea type="text" name="address_site" class="form-control" id="address" placeholder="Enter address"><?= $data->address_site ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url() ?>backoffice/about"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>