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
    <title>lupa password</title>
</head>

<body class="red darken-4">
    <section class="lupapassword ">
        <h3 class="white-text center-align">RESET PASSWORD</h3>
        <div class="kotak center white">
            <div class="">
                <p>Masukan email anda yang sudah teregistrasi. selanjutnya kami akan mengirimkan link untuk mereset
                    akun anda.</p>
                <br>
                <form action="" method="POST">
                    <div class="input-field ">
                        <i class="material-icons prefix">email</i>
                        <input name="email" id="icon_email" type="text" class="validate" required>
                        <label for="icon_email">EMAIL</label>
                    </div>
                    <br>
                    <button type="submit" name="masuk" class="waves-effect waves-light red darken-4 btn-small">RESET MY
                        PASSWORD</button>
                </form>
                <br>
                <a href="<?= base_url(); ?>/login">Sign-In</a>
            </div>
        </div>
    </section>



    <!-- jquery -->
    <script src="<?= base_url(); ?>/assets/utama/js/jquery-3.5.1.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/utama/js/materialize.min.js"></script>
    <!-- my script -->
    <script src="<?= base_url(); ?>/assets/utama/js/script-home.js"></script>
</body>

</html>