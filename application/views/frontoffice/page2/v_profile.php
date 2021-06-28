<div class="about">
    <div class="container_width">
        <div class="row d_flex">
            <div class="col-md-7">
                <!-- <a href="<?= base_url('') ?>" class="btn btn-primary">Beranda</a> -->
                <div>
                    <h2>Hi, <?= $this->session->userdata('username') ?></h2>
                    <p>Nama Lengkap&nbsp;&nbsp;: <?= $profile['nama_lengkap'] ?></p>
                    <p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['alamat'] ?></p>
                    <p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['email'] ?></p>
                    <p>No Telepon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['no_telepon'] ?></p>
                    <p>Jenis Kelamin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['jenis_kelamin'] ?></p>
                    <p>Kategori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['kategori'] ?></p>
                    <p>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['status'] ?></p>
                    <a href="" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary mt-4" href="">Edit Profile</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_img text_align_center">
                    <figure><img src="<?= base_url('assets/images/foto_profile/' . $profile['foto_profile']) ?>" alt="#" /></figure>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="<?= base_url('Frontoffice/Profile/update_profile') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="hidden" name="id_user" value="<?= $ep['id_user'] ?>">
                        <input type="text" name="nama_lengkap" value="<?= $ep['nama_lengkap'] ?>" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?= $ep['email'] ?>" class="form-control">
                    </div> -->
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?= $ep['alamat'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="no_telepon" value="<?= $ep['no_telepon'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="jenis_kelamin">
                            <option>-- Jenis Kelamin --</option>
                            <option value="pria" <?php if ($ep['jenis_kelamin'] == "pria") {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Pria</option>
                            <option value="wanita" <?php if ($ep['jenis_kelamin'] == "wanita") {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="kategori">
                            <option>-- Kategori --</option>
                            <option value="Dewasa-Remaja" <?php if ($ep['kategori'] == "Dewasa-Remaja") {
                                                                echo "selected=\"selected\"";
                                                            } ?>>Dewasa-Remaja</option>
                            <option value="Anak-Anak" <?php if ($ep['kategori'] == "Anak-Anak") {
                                                            echo "selected=\"selected\"";
                                                        } ?>>Anak-Anak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="status">
                            <option>-- Status --</option>
                            <option value="anggota sanggar" <?php if ($ep['status'] == "anggota sanggar") {
                                                                echo "selected=\"selected\"";
                                                            } ?>>Anggota Sanggar</option>
                            <option value="umum" <?php if ($ep['status'] == "umum") {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Umum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Upload Foto</label>
                        <input type="file" name="foto_profile" class="form-control">
                        <input type="hidden" name="old_foto" value="<?= $ep['foto_profile'] ?>"> 
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>