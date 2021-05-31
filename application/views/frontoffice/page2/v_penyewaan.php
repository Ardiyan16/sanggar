<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <form>
                        <div class="form-group" style="margin-top: 50px; margin-left: 30px;">
                            <input type="text" class="form-control-md-4">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row d_flex">
            <?php foreach ($kostum as $k) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; margin-top: 20px; margin-bottom: 30px; margin-left: 30px;">
                        <img class="card-img-top" src="<?= base_url('assets/images/costume/' . $k->foto) ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?= $k->nama ?></h2>
                            <!-- <p class="card-text"><?= $k->deskripsi ?></p> -->
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $k->deskripsi ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="<?= base_url('Frontoffice/Penyewaan/form_sewa/' . $k->id_costume) ?>" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>