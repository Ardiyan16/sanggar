<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <form method="post" action="<?= base_url('frontoffice/penyewaan') ?>">
                        <div class="form-group" style="margin-top: 50px; margin-left: 30px;">
                            <input type="text" name="search" class="form-control-md-4">
                            <input type="submit" class="btn btn-primary" name="submit">
                        </div>
                    </form>
                    <div class="text-right" style="text-align: left;">
                        <a href="#data" data-toggle="modal" class="btn btn-success">Proses belum selesai</a>
                    </div>
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

<div class="modal fade" id="data" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Proses Belum Selesai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" width="70%">
                        <thead>
                            <tr>
                                <th scope="col">Tanggal Sewa</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Total Kostum</th>
                                <th scope="col">Total Pembayaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $proses['tanggal_sewa'] ?></td>
                                <td><?= $proses['tanggal_kembali'] ?></td>
                                <td><?= $proses['total_kostum'] ?></td>
                                <td><?= $proses['total_pembayaran'] ?></td>
                                <td>
                                    <a href="<?= base_url('Frontoffice/penyewaan/form_sewa2/'. $proses['id_penyewaan']) ?>" class="btn btn-primary">Lanjutkan Proses</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>