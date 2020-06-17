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
                            <form action="/ruangan/cari" method="POST">
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
                                    <th>Kode Ruangan</th>
                                    <th>Nomor Ruangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ruangan as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['kd_ruangan']; ?></td>
                                        <td><?= $row['no_ruangan']; ?></td>
                                        <td>
                                            <a class="tombol-hapus" href="/ruangan/hapus/<?= $row['kd_ruangan']; ?>" class="">
                                                <span class="badge grey darken-4 white-text btn-small">Hapus<i class="material-icons left">delete</i></span>
                                            </a>
                                            <a href="/ruangan/ubah/<?= $row['kd_ruangan']; ?>" class="">
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
<form action="/Ruangan/tambah" method="POST">
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Tambah Data Ruangan</h4>
            <br>
            <div class="input-field">
                <i class="material-icons prefix">view_carousel</i>
                <input id="icon_prefix" name="no_ruangan" type="text" class="validate">
                <label for="icon_prefix">Nomor Ruangan</label>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light" type="submit" name="action">Buat
            </button>
        </div>
    </div>
</form>
<br>


<!-- input tambah ruangan
            <div class="white" style="padding: 20px 20px 10px 20px;">
                <form action="/Ruangan/tambah" method="POST">
                    <div class="row ">
                        <div class="col m3 s1"></div>
                        <div class="input-field col m4 s6">
                            <i class="material-icons prefix">view_carousel</i>
                            <input id="icon_prefix" name="no_ruangan" type="text" class="validate">
                            <label for="icon_prefix">Nomor Ruangan</label>
                        </div>
                        <div class="col m2 s2">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Buat
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <br> -->
<!-- input tambah ruangan end -->