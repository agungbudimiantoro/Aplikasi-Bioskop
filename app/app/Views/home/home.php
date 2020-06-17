<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/assets/utama/css/materialize.min.css" media="screen,projection" />
    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/utama/css/style-home.css">
    <title>HOME</title>
</head>

<body>

    <!-- navbar -->
    <nav class=" navbar">
        <div class="nav-wrapper red darken-4">
            <div class="container">
                <a href="#" class="brand-logo">BIOSKOP XXX</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="active"><a href="<?= base_url(); ?>/Home">Home</a></li>
                    <li><a href="">Movie</a></li>
                    <li><a href="<?= base_url(); ?>/About">Tentang Kami</a></li>
                    <li>
                        <a href="<?= base_url(); ?>/Login" class="waves-effect waves-light"><i class="material-icons right">person</i>Login</a>
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

    <!-- SECTION SEDANG DIMULAI  -->
    <section class="sedang-mulai">
        <hr>
        <div class="center">
            <h2 class="waves-effect waves-red btn red darken-4">Sedang Tayang</h2>
        </div>
        <div class="row">
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">Trolls Word Tour</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang1.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">jexi</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang2.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">Bucin</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang3.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">Malik & Elsa</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang4.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="center">
                <a class="waves-effect waves-light red darken-4 btn"><i class="material-icons right">arrow_forward</i>
                    <span>Lihat Selanjutnya</span></a>
            </div>
        </div>
    </section>
    <hr>
    <!-- SECTION SEDANG DIMULAI END -->

    <!-- SECTION AKAN TAYANG -->

    <section class="akan-tayang">
        <div class="center">
            <h2 class="waves-effect waves-red btn red darken-4">Akan Tayang</h2>
        </div>
        <div class="row">
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">Trolls Word Tour</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang1.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">Jexi</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang2.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">Bucin</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang3.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="col m3 s12">
                <a href="" class="">
                    <h5 class="card-title black-text center-align">Malik & Elsa</h5>
                </a>
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url(); ?>/assets/utama/img/tayang4.jpg">
                    </div>
                    <div class="card-action">
                        <a href="#" class="blue-text ">Detail Film</a>
                        <a href="#" class="right blue-text ">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            <div class="center">
                <a class="waves-effect waves-light red darken-4 btn"><i class="material-icons right">arrow_forward</i>
                    <span>Lihat Selanjutnya</span></a>
            </div>
        </div>
    </section>
    <!-- SECTION AKAN TAYANG END -->

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