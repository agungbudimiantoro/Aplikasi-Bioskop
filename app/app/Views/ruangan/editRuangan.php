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
                <form class="col m8 s12" action="/Ruangan/update" method="POST">
                    <div class="row">
                        <?= session()->getFlashdata('error');
                        ?>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">view_carousel</i>
                            <input type="text" name="kd_ruangan" value="<?= $ruangan->kd_ruangan; ?>" hidden>
                            <input id="icon_prefix" name="no_ruangan" type="text" class="validate" value="<?= $ruangan->no_ruangan; ?>">
                            <label for="icon_prefix">Nomor Ruangan</label>
                        </div>
                        <div class="col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
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