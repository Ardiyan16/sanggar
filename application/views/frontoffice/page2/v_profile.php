<div class="about">
    <div class="container_width">
        <div class="row d_flex">
            <div class="col-md-7">
                <div>
                    <h2>Hi, <?= $this->session->userdata('username') ?></h2>
                    <p>Nama Lengkap&nbsp;&nbsp;: <?= $profile['nama_lengkap'] ?></p>
                    <p>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['alamat'] ?></p>
                    <p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['email'] ?></p>
                    <p>No Telepon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['no_telepon'] ?></p>
                    <p>Jenis Kelamin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['jenis_kelamin'] ?></p>
                    <p>Kategori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['kategori'] ?></p>
                    <!-- <p>Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $profile['status'] ?></p> -->
                    <a class="btn btn-primary mt-4" href="">Edit Profile</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about_img text_align_center">
                    <figure><img src="images/about.png" alt="#" /></figure>
                </div>
            </div>

        </div>
    </div>
</div>