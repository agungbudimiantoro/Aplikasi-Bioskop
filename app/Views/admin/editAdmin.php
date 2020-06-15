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
                <form action="/admin/update" method="POST">
                    <div class="row">
                        <div class="col s12">
                        </div>
                        <div class="col m6 s12">
                            <?= session()->getFlashdata('error'); ?>
                            <input type="text" name="id_admin" value="<?= $admin->id_admin; ?>" hidden>
                            <div class="input-field ">
                                <input name="nama" id="icon_nama" type="text" value="<?= $admin->nama; ?>" class="validate">
                                <label for="icon_nama">Nama Lengkap</label>
                            </div>
                            <div class="input-field">
                                <select class="" name="jk">
                                    <?php
                                    echo $admin->jk;
                                    if ($admin->jk == 'L') : ?>
                                        <option value="L" selected>Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    <?php elseif ($admin->jk == 'P') : ?>
                                        <option value="L">Laki-laki</option>
                                        <option value="P" selected>Perempuan</option>
                                    <?php else : ?>
                                        <option value="">Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    <?php endif; ?>
                                </select>
                                <label>Jenis Kelamin</label>
                            </div>
                            <div class="input-field">
                                <textarea name="alamat" id="textarea1" class="materialize-textarea"> <?= $admin->alamat; ?></textarea>
                                <label for="textarea1">Alamat</label>
                            </div>
                        </div>
                        <div class="col m6 s12">
                            <div class="input-field ">
                                <i class="material-icons prefix">account_circle</i>
                                <input name="username" id="icon_username" value="<?= $admin->username; ?>" type="text" class="validate">
                                <label for="icon_username">Username</label>
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
                        </div>
                    </div>
                    <br>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Tambah
                        <i class="material-icons right">send</i>
                    </button>
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