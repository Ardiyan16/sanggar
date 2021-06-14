<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Form Penyewaan</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/date/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/date/css/ilmudetil.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/user/date/css/bootstrap-datetimepicker.css" />
    <script src="<?= base_url() ?>assets/user/date/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/user/date/js/moment-with-locales.js"></script>
    <script src="<?= base_url() ?>assets/user/date/js/jquery-1.11.3.min.js"></script>
    <script src="<?= base_url() ?>assets/user/date/js/bootstrap-datetimepicker.js"></script>
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top" style="background:#909060;">
        <div class="container">
            <div>
                <h1 style="text-align: center;">Form Penyewaan</h1>
            </div>
        </div>
    </div>
    </br></br></br></br>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="map-responsive">
                        <img src="<?= base_url('assets/images/costume/' . $view->foto) ?>" style="height: 300; width: 300;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="name">
                        <h4><?= $view->nama ?></h4>
                        Harga Sewa<input type="text" id="hrg" value="<?= $view->harga_sewa ?>" readonly class="form-control md-4">
                    </div>
                    <div class="hr-line-dashed"></div>
                    <form action="<?= base_url('frontoffice/penyewaan/save') ?>" method="post" class="main_form">
                        <div class="row">
                            <div class="col-md-12 form-group" style="margin-top: 30px;">
                                <label>Tanggal Sewa</label>
                                <?php
                                $acak = mt_rand(0, 700);
                                $tanggal = date("dmY")
                                ?>
                                <input class="contactus" type="hidden" name="id_penyewaan" value="<?= $tanggal ?>-<?= $acak ?>">
                                <input class="contactus" placeholder="" value="<?= $user['id_user'] ?>" type="text" hidden name="id_user">
                                <input class="contactus" placeholder="" value="<?= $view->id_costume ?>" type="text" hidden name="id_costume">
                                <div class="input-group date" id="tgl1">
                                    <input type="text" class="form-control" name="tanggal_sewa" />
                                    <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                                </div>
                                <!-- <input class="contactus" placeholder="" id="tgl1" type="date" name="tanggal_sewa"> -->
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Tanggal Kembali</label>
                                <div class="input-group date" id="tgl2">
                                    <input type="text" class="form-control" name="tanggal_kembali" />
                                    <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                                </div>
                                <!-- <input class="contactus" id="tgl2" placeholder="" type="date" name="tanggal_kembali"> -->
                                <!--   -->
                            </div>

                            <!-- <div class="col-md-12 form-group">
                                <label>Selisih Hari</label>
                                <input type="text" id="selisih" class="form-control" readonly>
                            </div> -->

                            <div class="col-md-12 form-group">
                                <label>Total Kostum</label>
                                <input class="form-control" id="jml_kostum" placeholder="Total Kostum" type="number" name="total_kostum">
                            </div>
                            <div class="col-md-12">
                                <label>Total Pembayaran</label>
                                <input class="form-control" id="total_byr" placeholder="Total Bayar" type="text" name="total_pembayaran">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Metode Pembayaran</label>
                                <input class="form-control" placeholder="Metode Pembayaran" value="Transfer" type="text" name="metode_pembayaran">
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                    </d>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $("#hrg, #jml_kostum").keyup(function() {
                    var harga = $("#hrg").val();
                    // var selisih = $("#selisih").val();
                    var jumlah = $("#jml_kostum").val();

                    var total = parseInt(harga) * parseInt(jumlah);
                    $("#total_byr").val(total);
                    console.log(Number(total));
                });
            });
        </script>

        <script>
            $(function() {
                $('#tgl1').datetimepicker({
                    locale: 'id',
                    format: 'DD/MMMM/YYYY'
                });

                $('#tgl2').datetimepicker({
                    useCurrent: false,
                    locale: 'id',
                    format: 'DD/MMMM/YYYY'
                });

                $('#tgl1').on("dp.change", function(e) {
                    $('#tgl2').data("DateTimePicker").minDate(e.date);
                });

                $('#tgl2').on("dp.change", function(e) {
                    $('#tgl1').data("DateTimePicker").maxDate(e.date);
                    CalcDiff()
                });

            });

            function CalcDiff() {
                var a = $('#tgl1').data("DateTimePicker").date();
                var b = $('#tgl2').data("DateTimePicker").date();
                var timeDiff = 0
                if (b) {
                    timeDiff = (b - a) / 1000;
                }

                $('#selisih').val(Math.floor(timeDiff / (86400)) + ' Hari')
            }
        </script>