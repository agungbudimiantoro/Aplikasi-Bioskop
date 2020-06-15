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
                <?= form_open_multipart(base_url('film/update')); ?>
                <div class="row">
                    <div class="col s12">
                    </div>
                    <div class="col m2 s12"></div>
                    <div class="col m8 s12">
                        <?= session()->getFlashdata('error'); ?>
                        <div class="input-field ">
                            <input type="text" name="kd_film" value="<?= $film->kd_film; ?>" hidden>
                            <input name="judul" id="icon_nama" type="text" value="<?= $film->judul; ?>" class="validate">
                            <label for="icon_nama">Judul</label>
                        </div>
                        <div class="input-field ">
                            <input name="tahun" id="icon_nama" type="text" value="<?= $film->tahun; ?>" class="validate">
                            <label for="icon_nama">Tahun</label>
                        </div>
                        <div class="input-field ">
                            <p>durasi (menit)</p>
                            <p class="range-field">
                                <input type="range" name="durasi" id="test5" min="0" max="300" value="20" />
                            </p>
                        </div>
                        <div class="input-field">
                            <textarea name="sinopsis" id="textarea1" class="materialize-textarea"><?= $film->sinopsis; ?></textarea>
                            <label for="textarea1">Sinopsis</label>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" name="gambar">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Gambar" name="namagambar" value="<?= $film->gambar; ?>">
                            </div>
                        </div>
                        <br>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Ubah
                            <i class="material-icons right">send</i>
                        </button>
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