<br>
<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!--card widgets start-->
        <div id="card-pannel ">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('success'); ?>" data-tipe="<?= session()->getFlashdata('tipe'); ?>">
            </div>
            <!-- tabel data -->
            <div class="white" style="padding: 20px 20px 20px 20px;">
                <h5 class="center-align"><?= $judul_utama; ?></h5>
                <form action="/transaksi/bayarTiket" method="POST">
                    <div class="row">
                        <div class="col m2 s12">
                        </div>
                        <div class="col m8 s12">
                            <div class="row">
                                <?= session()->getFlashdata('error');
                                ?>
                                <br>
                                <br>
                                <br>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">view_carousel</i>
                                    <input id="icon_prefix" name="kd_transaksi" type="text" class="validate">
                                    <label for=" icon_prefix">Kode pemesanan</label>
                                </div>
                                <div class="row">
                                    <div class="col s9"></div>
                                    <div class="col s3">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Bayar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            </form>
        </div>
        <!-- akhir tabel data -->
    </div>
    <!--card widgets end-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->