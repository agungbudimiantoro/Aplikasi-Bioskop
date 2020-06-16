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
                <form action="/transaksi/pesanTiket" method="POST">
                    <div class="row">
                        <div class="col m2 s12">
                        </div>
                        <div class="col m8 s12">
                            <?= session()->getFlashdata('error'); ?>
                            <input type="input" name="penayangan" id="" hidden value="<?= $penayangan; ?>">
                            <div class="input-field ">
                                <input name="nama" id="icon_nama" type="text" class="validate" value="<?= $nama ?>" readonly>
                                <label for="icon_nama">Nama Lengkap</label>
                            </div>
                            <div class="input-field ">
                                <input name="film" id="icon_nama" type="text" class="validate" value="<?= $film->kd_film ?>" readonly>
                                <label for="icon_nama">Kd Film</label>
                            </div>
                            <div class="input-field ">
                                <input name="kursi" id="icon_nama" type="text" class="validate" value="<?= $kursi ?>" readonly>
                                <label for="icon_nama">Kursi</label>
                            </div>
                            <div class="input-field ">
                                <input name="harga" id="icon_nama" type="text" class="validate" value="32.000" readonly>
                                <label for="icon_nama">Harga</label>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Ubah
                                <i class="material-icons right">send</i>
                            </button>
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