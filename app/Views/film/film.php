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
                        <!-- Modal Trigger -->
                        <div class="row">
                            <form action="/film/cari" method="POST">
                                <div class="col s10">
                                    <input id="cari" type="text" name="cari" class="validate">
                                    <label for="cari">Cari Data</label>
                                </div>
                                <button class="btn waves-effect waves-light cyan col s2" type="submit" name="action">CARI
                                    <i class="material-icons right">search</i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <a class="waves-effect waves-light btn modal-trigger" href="/film/bukaTambah">Tambah Data</a>
                    <br>
                    <div class="row">
                        <?php foreach ($film as $row) :
                        ?>
                            <div class="col s6 m4 l4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="<?= base_url() ?>/uploads/film/<?= $row['gambar']; ?>" width="300px" height="300px">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4 center-align"><?= $row['judul']; ?>
                                        </span>
                                        <a class="activator center-align">Cek Detail </a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4 center-align"><?= $row['judul']; ?>
                                            <i class="material-icons right">close</i>
                                            </i>
                                            <hr>
                                        </span>
                                        <small>Kode : <?= $row['kd_film']; ?></small>
                                        <br>
                                        <small>Tahun : <?= $row['tahun']; ?></small>
                                        <br>
                                        <small>Durasi : <?= $row['durasi']; ?></small>
                                        <br>
                                        <small>Sinopsis : </small>
                                        <br>
                                        <small><?= $row['sinopsis']; ?></small>
                                    </div>
                                    <div class="card-action left">
                                        <a href="/film/ubah/<?= $row['kd_film']; ?>" class="">
                                            <span class="lime accent-4 black-text btn">Edit<span class="lime-text">----</span><i class="material-icons left">edit</i></span>
                                        </a>
                                        <a class="tombol-hapus" href="/film/hapus/<?= $row['kd_film']; ?>" class="">
                                            <span class="grey darken-4 white-text btn">Hapus<i class="material-icons left">delete</i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="row center">
                <?= $pager->links('konten', 'paging') ?>
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