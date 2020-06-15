<br>
<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!--card widgets start-->
        <div id="card-widgets">
            <h5 class="center-align"><?= $judul_utama; ?></h5>
            <div class="row center">
                <div class="col m2 s12"></div>
                <form class="col m8 s12" action="/kursi/update" method="POST">
                    <div class="row">
                        <?= session()->getFlashdata('error');
                        ?>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">event_seat</i>
                            <input type="text" name="kd_kursi" value="<?= $kursi->kd_kursi; ?>" hidden>
                            <input id="icon_prefix" name="no_kursi" type="text" class="validate" value="<?= $kursi->no_kursi; ?>">
                            <label for="icon_prefix">Nomor Kursi</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix"></i>
                            <select class="" name="kd_ruangan">
                                <option value="" disabled>No ruangan</option>
                                <option value="<?= $kursi->kd_ruangan; ?>" disabled selected><?= $kursi->kd_ruangan; ?></option>
                                <?php foreach ($ruangan as $row) : ?>
                                    <option value="<?= $row['kd_ruangan']  ?>"><?= $row['kd_ruangan']  ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Kode Ruangan</label>
                        </div>
                        <div class="col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Ubah
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--card widgets end-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->