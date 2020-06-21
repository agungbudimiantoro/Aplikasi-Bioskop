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
                            <form action="/penayangan/cari" method="POST">
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
                    <br>
                    <a class="waves-effect waves-light btn modal-trigger red" href="/penayangan">Seluruh penayangan</a>
                    <a class="waves-effect waves-light btn modal-trigger blue" href="/penayangan/akanTayang">Akan Tayang</a>
                    <a class="waves-effect waves-light btn modal-trigger cyan" href="/penayangan/sedangTayang">Sedang Tayang</a>
                    <br>
                    <h4>Akan Tayang</h4>
                    <hr>
                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Judul Film</th>
                                <th>Ruangan</th>
                                <th>tanggal</th>
                                <th>Waktu Mulai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($penayangan as $row) :
                            ?>
                                <tr>
                                    <td><?= $row['kd_penayangan']; ?></td>
                                    <td><?= $row['judul']; ?></td>
                                    <td><?= $row['kd_ruangan']; ?></td>
                                    <td><?= $row['tanggal']; ?></td>
                                    <td><?= $row['waktu_mulai']; ?></td>
                                    <td><a class="tombol-hapus" href="/penayangan/hapus/<?= $row['kd_penayangan']; ?>" class="">
                                            <span class="badge grey darken-4 white-text btn-small">Hapus<i class="material-icons left">delete</i></span>
                                        </a>
                                        <a href="/penayangan/ubah/<?= $row['kd_penayangan']; ?>" class="">
                                            <span class="badge lime accent-4 black-text btn-small">Edit<i class="material-icons left">edit</i></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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