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
    <title>Sign-In</title>
</head>

<body class="red darken-4">
    <section class="login ">
        <h3 class="white-text center-align">LOGIN ADMIN</h3>
        <div class="kotak center white">
            <div class="">
                <p>Masuk dengan akun admin</p>
                <hr>
                <div class="flash-data" data-flashdata="<?= session()->getFlashdata('success'); ?>" data-tipe="<?= session()->getFlashdata('tipe'); ?>">
                </div>
                <div class="">
                    <?= session()->getFlashdata('error'); ?>
                </div>
                <form action="/login/loginAdmin" method="POST">
                    <div class="input-field ">
                        <i class="material-icons prefix">account_circle</i>
                        <input name="username" id="icon_username" type="text" class="validate">
                        <label for="icon_username">Username</label>
                    </div>
                    <div class="input-field ">
                        <i class="material-icons prefix">lock_outline</i>
                        <input name="password" id="icon_password" type="password" class="validate">
                        <label for="icon_password">Password</label>
                    </div>
                    <br>
                    <button type="submit" name="masuk" class="waves-effect waves-light red darken-4 btn-small">Sign-In</button>
                </form>
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