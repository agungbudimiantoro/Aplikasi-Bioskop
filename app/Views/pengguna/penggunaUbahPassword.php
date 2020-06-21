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
                <?= form_open_multipart(base_url('pengguna/updatePassword')); ?>
                <div class="row">
                    <div class="col m3 s12">
                    </div>

                    <div class="col m6 s12">
                        <?= session()->getFlashdata('error'); ?>
                        <div class="input-field ">
                            <input type="text" name="NIK" value="<?= $pengguna->NIK; ?>" hidden>
                        </div>
                        <div class="input-field ">
                            <i class="material-icons prefix">lock_outline</i>
                            <input name="password" id="icon_password" type="password" class="validate">
                            <label for="icon_password">Password</label>
                        </div>
                        <div class="input-field ">
                            <i class="material-icons prefix">lock_outline</i>
                            <input name="password2" id="icon_password2" type="password" class="validate">
                            <label for="icon_password2">Konfirmasi Password</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Ubah
                            <i class="material-icons right">send</i>
                        </button>
                        </>
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