<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Event & Prestasi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Website Utama</a></li>
                        <li class="breadcrumb-item active">Event</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/images/achiev/' . $data->img_achiev) ?>" height="300px" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?= $data->desc_achiev ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url() ?>backoffice/achiev"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>