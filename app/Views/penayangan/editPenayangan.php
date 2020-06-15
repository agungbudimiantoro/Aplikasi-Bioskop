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
                <?= form_open_multipart(base_url('penayangan/update')); ?>
                <div class="row">
                    <div class="col m2 s12">
                    </div>
                    <div class="col m8 s12">
                        <?= session()->getFlashdata('error'); ?>
                        <input type="text" name="kd_penayangan" value="<?= $penayangan->kd_penayangan; ?>" hidden>
                        <div class="input-field">
                            <select class="" name="kd_film">
                                <option value="<?= $penayangan->kd_film ?>"><?= $penayangan->kd_film ?></option>
                                <?php foreach ($film as $row) : ?>
                                    <option value="<?= $row['kd_film']; ?>"><?= $row['kd_film']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Kode Film</label>
                        </div>
                        <div class="input-field">
                            <select class="" name="kd_ruangan">
                                <option value="<?= $penayangan->kd_ruangan ?>"><?= $penayangan->kd_ruangan ?></option>
                                <?php foreach ($ruangan as $row) : ?>
                                    <option value="<?= $row['kd_ruangan']; ?>"><?= $row['kd_ruangan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Kode Ruangan</label>
                        </div>
                        <label>Tanggal</label>
                        <input type="date" class="datepicker" name="tanggal" value="<?= $penayangan->tanggal ?>">

                        <label>Waktu Mulai</label>
                        <input type="time" class="datepicker" name="waktu_mulai" value="<?= $penayangan->waktu_mulai ?>">

                        <button class="btn waves-effect waves-light" type="submit" name="action">Ubah
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