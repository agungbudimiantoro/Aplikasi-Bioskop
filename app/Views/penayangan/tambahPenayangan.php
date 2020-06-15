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
                <?= form_open_multipart(base_url('penayangan/tambah')); ?>
                <div class="row">
                    <div class="col m2 s12">
                    </div>
                    <div class="col m8 s12">
                        <?= session()->getFlashdata('error'); ?>
                        <div class="input-field">
                            <select class="" name="kd_film">
                                <option value=""></option>
                                <?php foreach ($film as $row) : ?>
                                    <option value="<?= $row['kd_film']; ?>"><?= $row['kd_film']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Kode Film</label>
                        </div>
                        <div class="input-field">
                            <select class="" name="kd_ruangan">
                                <option value=""></option>
                                <?php foreach ($ruangan as $row) : ?>
                                    <option value="<?= $row['kd_ruangan']; ?>"><?= $row['kd_ruangan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Kode Ruangan</label>
                        </div>
                        <label>Tanggal</label>
                        <input type="date" class="datepicker" name="tanggal">

                        <label>Waktu Mulai</label>
                        <input type="time" class="datepicker" name="waktu_mulai">

                        <button class="btn waves-effect waves-light" type="submit" name="action">Tambah
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <?= form_close() ?>
        </div>
        <!-- akhir tabel data -->
    </div>
    <!--card widgets end-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->