<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tentang Website</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Tentang Website</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Tentang Website
                            <a class="btn btn-success float-right" href="<?= base_url('backoffice/about/edit/' . $data->id_site) ?>"><i class="fas fa-edit"></i> Edit</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <p id="name"><?= $data->name_site ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="since">Tahun Berdiri</label>
                                        <p id="since"><?= $data->since_site ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="owner">Nama Pemiliki</label>
                                        <p id="owner"><?= $data->owner_site ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <p id="address"><?= $data->address_site ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Email</label>
                                        <p id="address"><?= $data->email_site ?></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="logo">Logo</label><br>
                                        <img id="logo" src="<?= base_url('assets/images/' . $data->logo_site) ?>" class=" img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>