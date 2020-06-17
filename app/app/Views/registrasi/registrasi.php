<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/assets/utama/css/materialize.min.css" media="screen,projection" />
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/utama/css/style-login.css">
    <title>Sign-up</title>
</head>

<body class="red darken-4">
    <section class="registrasi ">
        <h3 class="white-text center-align">REGISTRASI</h3>
        <div class="kotak center white">
            <div class="">
                <p>Buat akun anda</p>
                <div class="flash-data" data-flashdata="<?= session()->getFlashdata('success'); ?>" data-tipe="<?= session()->getFlashdata('tipe'); ?>">
                </div>
                <hr>
                <br>
                <form action="/registrasi/tambah" method="POST">
                    <div class="row">
                        <div class="">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                        <div class="col m6 s12">
                            <div class="input-field ">
                                <input name="nama" id="icon_nama" type="text" class="validate" value="<?= set_value('nama'); ?>">
                                <label for=" icon_nama">Nama Lengkap</label>
                            </div>
                            <div class="input-field ">
                                <input name="NIK" id="icon_NIK" type="text" class="validate" value="<?= set_value('NIK'); ?>">
                                <label for="icon_NIK">NIK</label>
                            </div>
                            <div class="input-field ">
                                <input name="email" id="icon_email" type="text" class="validate" value="<?= set_value('email'); ?>">
                                <label for="icon_email">Alamat Email</label>
                            </div>
                            <div class="input-field">
                                <select name="jk">
                                    <option value="" disabled>Jenis Kelamin</option>
                                    <option value="L" <?= set_select('jk', 'L') ?>>Laki-laki</option>
                                    <option value="P" <?= set_select('jk', 'P') ?>>Perempuan</option>
                                </select>
                                <label>Jenis Kelamin</label>
                            </div>
                            <div class="input-field">
                                <textarea name="alamat" id="textarea1" class="materialize-textarea"><?= set_value('alamat'); ?></textarea>
                                <label for="textarea1">Alamat</label>
                            </div>
                        </div>
                        <div class="col m6 s12">
                            <div class="input-field ">
                                <i class="material-icons prefix">account_circle</i>
                                <input name="username" id="icon_username" type="text" class="validate" value="<?= set_value('username'); ?>">
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
                    <button type="submit" name="masuk" class="waves-effect waves-light red darken-4 btn-small">Sign-Up</button>
                </form>
                <br>
                <a href="<?= base_url(); ?>/Login">Sudah punya akun?</a>
            </div>
        </div>
        </div>
    </section>



    <!-- jquery -->
    <script src="<?= base_url(); ?>/assets/utama/js/jquery-3.5.1.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/utama/js/materialize.min.js"></script>
    <!-- my script -->
    <script src="<?= base_url(); ?>/assets/utama/js/script.js"></script>
    <script src="<?= base_url() ?>/assets/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>/assets/dist/myscript.js"></script>
</body>

</html>