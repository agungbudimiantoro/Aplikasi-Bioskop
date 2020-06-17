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
                <div class="row ">
                    <h4>Sedang Tayang</h4>
                    <hr>
                    <div class="row">
                        <?php foreach ($tayang as $row) :
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
                                        <a href="/penayangan/ubah/<?= $row['kd_penayangan']; ?>" class="">
                                            <span class="lime accent-4 black-text btn">Edit<span class="lime-text">----</span><i class="material-icons left">edit</i></span>
                                        </a>
                                        <a class="tombol-hapus" href="/penayangan/hapus/<?= $row['kd_penayangan']; ?>" class="">
                                            <span class="grey darken-4 white-text btn">Hapus<i class="material-icons left">delete</i></span>
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