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
                <div class="row ">
                    <div class="input-field col s12">
                        <div class="row">
                            <form action="/penayangan/cariPenayangan" method="POST">
                                <div class="col s10">
                                    <input id="cari" type="date" name="cari" class="validate">
                                </div>
                                <button class="btn waves-effect waves-light cyan col s2" type="submit" name="action">cari Tanggal
                                    <i class="material-icons right">search</i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <a class="waves-effect waves-light btn modal-trigger" href="/penayangan/bukaTambah">Tambah Data</a>
                    <br>
                    <h4>Akan Tayang</h4>
                    <hr>
                    <div class="row">
                        <?php foreach ($penayangan as $row) :
                        ?>
                            <div class="col s6 m4 l4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="<?= base_url() ?>/uploads/film/<?= $row['gambar']; ?>" width="300px" height="300px">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4 center-align"><?= $row['judul']; ?>
                                        </span>
                                        <small>Kode : <?= $row['kd_penayangan']; ?></small>
                                        <br>
                                        <small>Ruangan : <?= $row['kd_ruangan']; ?></small>
                                        <br>
                                        <small>Tanggal : <?= $row['tanggal']; ?></small>
                                        <br>
                                        <small>Waktu Mulai : <?= $row['waktu_mulai']; ?></small>
                                        <br>
                                        <a class="activator center-align">Cek Detail </a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4 center-align"><?= $row['judul']; ?>
                                            <i class="material-icons right">close</i>
                                            </i>
                                            <hr>
                                        </span>
                                        <small>Kode : <?= $row['kd_penayangan']; ?></small>
                                        <br>
                                        <small>Ruangan : <?= $row['kd_ruangan']; ?></small>
                                        <br>
                                        <small>Waktu Mulai : <?= $row['waktu_mulai']; ?></small>
                                        <br>
                                        <small>Tanggal : <?= $row['tanggal']; ?></small>
                                        <br>
                                        <small>Tahun : <?= $row['tahun']; ?></small>
                                        <br>
                                        <small>Sinopsis : </small>
                                        <br>
                                        <small><?= $row['sinopsis']; ?></small>
                                        <br>
                                    </div>
                                    <div class="card-action left">
                                        <a class="" href="/transaksi/cekKursi/<?= $row['kd_penayangan']; ?>" class="">
                                            <span class="white-text btn">Beli tiket<i class="material-icons left">send</i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir tabel data -->
    </div>
    <!--card widgets end-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->