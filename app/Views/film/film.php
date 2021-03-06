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
                    <table class="centered striped">
                        <thead>
                            <tr>
                                <th>Kode Film</th>
                                <th>Judul</th>
                                <th>Tahun</th>
                                <th>Durasi</th>
                                <th>gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($film as $row) :
                            ?>
                                <tr>
                                    <td><?= $row['kd_film']; ?></td>
                                    <td><?= $row['judul']; ?></td>
                                    <td><?= $row['tahun']; ?></td>
                                    <td><?= $row['durasi']; ?></td>
                                    <td><img src="<?= base_url() ?>/uploads/film/<?= $row['gambar']; ?>" width="50px"></td>
                                    <td><a class="tombol-hapus" href="/film/hapus/<?= $row['kd_film']; ?>" class="">
                                            <span class="badge grey darken-4 white-text btn-small">Hapus<i class="material-icons left">delete</i></span>
                                        </a>
                                        <a href="/film/ubah/<?= $row['kd_film']; ?>" class="">
                                            <span class="badge lime accent-4 black-text btn-small">Edit<i class="material-icons left">edit</i></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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