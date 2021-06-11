      <!-- end header -->
      <div class="full_bg" style="background-image: url(<?= base_url('assets/user/images/tarian.jpg'); ?>)">
          <!-- header inner -->
          <div class="section">
              <!-- carousel code -->
              <div id="banner1" class="carousel slide slider_main">
                  <ol class="carousel-indicators ">
                      <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                  </ol>
                  <div class="carousel-inner">
                      <!-- first slide -->
                      <div class="carousel-item active">
                          <div class="carousel-caption cuplle">
                              <div class="container">
                                  <div class="row">
                                      <div class="col">
                                          <div class="text-center">
                                              <h2 style="color: white; font-size: 50px; margin-top: 50px;">SANGGAR TARI CITRA BUDAYA</h2>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- second slide -->
                  </div>
              </div>
          </div>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
          <div class="container_width">
              <div class="row-md-12 d_flex grid">

                  <div class="col-md-3">
                      <i class="fa fa-calendar" style="font-size: 30px; margin-left: 10%;"></i>
                      <h2><a href="#modalinfo" data-toggle="modal">Jadwal</a></h2>
                  </div>

                  <div class="col-md-3">
                      <i class="fa fa-exchange" style="font-size: 30px; margin-left: 10%;"></i>
                      <h2><a href="#modalinfo" data-toggle="modal">Penyewaan</a></h2>
                  </div>

                  <div class="col-md-3">
                      <i class="fa fa-history" style="font-size: 30px; margin-left: 10%;"></i>
                      <h2><a href="#modalinfo" data-toggle="modal">Riwayat</a></h2>
                  </div>

                  <div class="col-md-3">
                      <i class="fa fa-info-circle" style="font-size: 30px; margin-left: 10%;"></i>
                      <h2><a href="#modalinfo" data-toggle="modal">Tentang</a></h2>
                  </div>

              </div>
          </div>
      </div>
      <!-- end about -->
      <!-- coronata -->
      <div class="coronata">
          <div class="container">
              <div class="row d_flex grid">
                  <div class="col-md-12 oder1">
                      <div class="titlepage text_align_center">
                          <h2>Salam Budaya !!</h2>
                          <p>
                              Sanggar tari citra budaya merupakan wadah
                              Bagi masyarakat untuk kegiatan seni tari. Bebaskan tubuh
                              Anda untuk bergerak, selalu mengasah kemampuan diri, dan
                              Melestarikan budaya kesenian. Yuk ! gabung Bersama kami di Sanggar Tari Citra Budaya
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="modalinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <h5>Silahkan login terlebih dahulu untuk mendapatkan akses ke menu</h5>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <a href="<?= base_url('Auth/login_user') ?>" class="btn btn-primary">Login</a>
                  </div>
              </div>
          </div>
      </div>

      <!-- update -->