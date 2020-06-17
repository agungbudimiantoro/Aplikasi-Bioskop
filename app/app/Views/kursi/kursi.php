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
                    <div class="col l2 m12"></div>
                    <div class="input-field col l8 m12">
                        <!-- Modal Trigger -->
                        <div class="row">
                            <form action="/kursi/cari" method="POST">
                                <div class="col s10">

                                    <input id="cari" type="text" name="cari" class="validate">
                                    <label for="cari">Cari Data</label>

                                </div>
                                <button class="btn waves-effect waves-light cyan col s2" type="submit" name="action">CARI
                                    <i class="material-icons right">search</i>
                                </button>
                            </form>
                        </div>


                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Tambah Data</a>
                        <?= session()->getFlashdata('error');
                        ?>

                        <br>
                        <table class="centered striped">
                            <thead>
                                <tr>
                                    <th>Kode kursi</th>
                                    <th>Nomor kursi</th>
                                    <th>kode ruangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kursi as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['kd_kursi']; ?></td>
                                        <td><?= $row['no_kursi']; ?></td>
                                        <td><?= $row['kd_ruangan']; ?></td>
                                        <td>
                                            <a class="tombol-hapus" href="/kursi/hapus/<?= $row['kd_kursi']; ?>" class="">
                                                <span class="badge grey darken-4 white-text btn-small">Hapus<i class="material-icons left">delete</i></span>
                                            </a>
                                            <a href="/kursi/ubah/<?= $row['kd_kursi']; ?>" class="">
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
<!-- Modal Structure -->
<form action="/kursi/tambah" method="POST">
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Tambah Data kursi</h4>
            <br>
            <div class="input-field">
                <i class="material-icons prefix">event_seat</i>
                <input id="icon_prefix" name="no_kursi" type="text" class="validate">
                <label for="icon_prefix">Nomor kursi</label>
            </div>
            <div class="input-field">
                <i class="material-icons prefix">view_carousel</i>
                <select class="input-field" name="kd_ruangan">
                    <option value="" disabled selected>Kode ruangan</option>
                    <?php foreach ($ruangan as $row) : ?>
                        <option value="<?= $row['kd_ruangan']  ?>"><?= $row['kd_ruangan']  ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br><br><br>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light" type="submit" name="action">Buat
            </button>
        </div>
    </div>
</form>
<br>