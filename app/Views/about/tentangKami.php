<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/assets/utama/css/materialize.min.css" media="screen,projection" />
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/utama/css/style-tentangkami.css">
    <title>TENTANG KAMI</title>
</head>

<body>

    <!-- navbar -->
    <nav class=" navbar">
        <div class="nav-wrapper red darken-4">
            <div class="container">
                <a href="#" class="brand-logo">BIOSKOP XXX</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="<?= base_url(); ?>/Home">Home</a></li>
                    <li><a href="">Movie</a></li>
                    <li class="active"><a href="<?= base_url(); ?>/About">Tentang Kami</a></li>
                    <li>
                        <a href="<?= base_url(); ?>/Login" class="waves-effect waves-light"><i class="material-icons right">person</i>Login</a>
                    </li>
                    <li><a href="<?= base_url(); ?>/Registrasi" class="waves-effect waves-light"><i class="material-icons right">person_add</i>Daftar
                            Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="<?= base_url(); ?>/Home">Home</a></li>
        <li><a href="">Movie</a></li>
        <li><a href="<?= base_url(); ?>/About">Tentang Kami</a></li>
        <li>
            <a href="<?= base_url(); ?>/Login" class="waves-effect waves-light"><i class="material-icons right">person</i>Login</a>
        </li>
        <li><a href="<?= base_url(); ?>/Registrasi" class="waves-effect waves-light"><i class="material-icons right">person_add</i>Daftar
                Sekarang</a>
        </li>
    </ul>
    <!-- navbar end -->

    <!-- SECTION BANNER -->
    <section class="banner">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="<?= base_url(); ?>/assets/utama/img/banner1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>PESAN SECARA ONLINE</h3>
                        <h5 class="light grey-text text-lighten-3">PEMESANAN TIKET TERSEDIA SECARA ONLINE</h5>
                    </div>
                </li>
                <li>
                    <img src="<?= base_url(); ?>/assets/utama/img/banner2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>SATU-SATUNYA DI KOTA INI</h3>
                        <h5 class="light grey-text text-lighten-3">BIOSKOP INI PERTAMA DAN SATU-SATUNYA YANG BERADA DI
                            KOTA
                            INI</h5>
                    </div>
                </li>
                <li>
                    <img src="<?= base_url(); ?>/assets/utama/img/banner3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                        <h3>BERAGAM JENIS FILM</h3>
                        <h5 class="light grey-text text-lighten-3">TONTON BERBAGAI FILM HANYA DI BIOSKOP XXX</h5>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- SECTION BANNER END -->

    <!-- SECTION PROFIL -->
    <section class="profile">
        <div class="container">
            <h3 class="center">PROFIL</h3>
            <hr>
            <div class="row">
                <div class="col m6">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolorem error
                        est ratione neque eveniet exercitationem totam iste, ipsum maiores numquam vitae, id unde animi,
                        reiciendis sit mollitia culpa at excepturi molestias deserunt! Sapiente repellat eum autem
                        alias.
                        Dolorem, nesciunt consequuntur eum neque hic sint necessitatibus? Cumque nihil similique
                        consectetur.</p>
                </div>
                <div class="col m6">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates dolorem error
                        est ratione neque eveniet exercitationem totam iste, ipsum maiores numquam vitae, id unde animi,
                        reiciendis sit mollitia culpa at excepturi molestias deserunt! Sapiente repellat eum autem
                        alias.
                        Dolorem, nesciunt consequuntur eum neque hic sint necessitatibus? Cumque nihil similique
                        consectetur.</p>
                </div>
            </div>
            <div class="row">
                <div class="col m2 s6">
                    <a class="waves-effect center waves-light"><i class="material-icons large red-text text-accent-4">access_time</i>
                        <p class="red-text text-accent-4 ">TEPAT WAKTU</p>
                    </a>
                </div>
                <div class="col m2 s6">
                    <a class="waves-effect center waves-light"><i class="material-icons large red-text text-accent-4">airline_seat_recline_extra</i>
                        <p class="red-text text-accent-4 ">KENYAMANAN</p>
                    </a>
                </div>
                <div class="col m2 s6">
                    <a class="waves-effect center waves-light"><i class="material-icons large red-text text-accent-4">attach_money</i>
                        <p class="red-text text-accent-4 ">HARGA YANG SESUAI</p>
                    </a>
                </div>
                <div class="col m2 s6">
                    <a class="waves-effect center waves-light"><i class="material-icons large red-text text-accent-4">phonelink</i>
                        <p class="red-text text-accent-4 ">PEMESANAN ONLINE</p>
                    </a>
                </div>
                <div class="col m2 s6">
                    <a class="waves-effect center waves-light"><i class="material-icons large red-text text-accent-4">ac_unit</i>
                        <p class="red-text text-accent-4 ">AC</p>
                    </a>
                </div>
                <div class="col m2 s6">
                    <a class="waves-effect center waves-light"><i class="material-icons large red-text text-accent-4">high_quality</i>
                        <p class="red-text text-accent-4 ">RESOLUSI TAJAM</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION PROFIL END -->

    <!-- SECTION RUANGAN -->
    <hr>
    <section class="room">
        <div class="container">
            <div class="row">
                <div class="col l4">
                    <h3>RUANGAN</h3>
                </div>
                <div class="col l8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sit, quam est, totam consequatur
                        asperiores, impedit expedita sint labore non ipsum optio laborum et? Maiores harum reprehenderit
                        nisi nemo magni.</p>
                </div>
            </div>
            <div class="row">
                <div class="col l4 s6">
                    <img class="materialboxed" width="100%" src="<?= base_url(); ?>/assets/utama/img/room1.jpg">
                </div>
                <div class="col l4 s6">
                    <img class="materialboxed" width="100%" src="<?= base_url(); ?>/assets/utama/img/room2.jpg">
                </div>
                <div class="col l4 s6">
                    <img class="materialboxed" width="100%" src="<?= base_url(); ?>/assets/utama/img/room4.jpg">
                </div>
                <div class="col l4 s6">
                    <img class="materialboxed" width="100%" src="<?= base_url(); ?>/assets/utama/img/room5.jpg">
                </div>
                <div class="col l4 s6">
                    <img class="materialboxed" width="100%" src="<?= base_url(); ?>/assets/utama/img/room6.jpg">
                </div>
                <div class="col l4 s6">
                    <img class="materialboxed" width="100%" src="<?= base_url(); ?>/assets/utama/img/room3.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION RUANGAN END-->

    <!-- SECTION PARALAX  -->
    <section class="parax">
        <div class="parallax-container">
            <div class="parallax"><img src="<?= base_url(); ?>/assets/utama/img/room1.jpg"></div>
        </div>
    </section>
    <!-- SECTION PARALAX END -->

    <!-- SECTION FOOTER -->
    <section class="footer red darken-4 ">
        <div class="container">
            <p class="white-text center"> &copy; copright agung budi miantoro</p>
        </div>
    </section>
    <!-- SECTION FOOTER  END-->

    <!-- jquery -->
    <script src="<?= base_url(); ?>/assets/utama/js/jquery-3.5.1.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/utama/js/materialize.min.js"></script>
    <!-- my script -->
    <script src="<?= base_url(); ?>/assets/utama/js/script.js"></script>
</body>

</html>