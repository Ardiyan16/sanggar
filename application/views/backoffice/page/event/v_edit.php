<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Event</h1>
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
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Event </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="formAchiev" method="post" action="<?= base_url() ?>backoffice/event/update/<?= $data->id_event ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Acara</label>
                                    <input type="text" name="name_event" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $data->name_event ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal</label>
                                    <input type="date" name="date_event" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $data->date_event ?>">
                                </div>
                                <hr>
                                <h4>Jadwal Training</h4>

                                <?php
                                if (!$data->event_id) {
                                ?>
                                    <p class="text-center"> Jadwal Training Untuk Event Ini Belum Dibuat</p>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="exampleInputEmail1">Tanggal Training</label>
                                            <input type="text" name="event_id" hidden class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $data->event_id ?>">
                                            <input type="date" name="date_training" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $data->date_training ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputPassword1">Waktu Training</label>
                                            <input type="time" name="hour_training" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $data->hour_training  ?>">
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?= base_url() ?>backoffice/event"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
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