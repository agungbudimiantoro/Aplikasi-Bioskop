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
                            <form action="/pengguna/cari" method="POST">
                                <div class="col s10">
                                    <input id="cari" type="text" name="cari" class="validate">
                                    <label for="cari">Cari Data</label>
                                </div>
                                <button class="btn waves-effect waves-light cyan col s2" type="submit" name="action">CARI
                                    <i class="material-icons right">search</i>
                                </button>
                            </form>
                        </div>
                        <br>
                        <table class="centered striped">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Jenis kelamin</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengguna as $row) :
                                ?>
                                    <tr>
                                        <td><?= $row['NIK']; ?></td>
                                        <td><?= $row['username']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <?php if ($row['jk'] == 'L') : ?>
                                            <td>Laki-Laki</td>
                                        <?php else : ?>
                                            <td>Perempuan</td>
                                        <?php endif; ?>
                                        <td><?= $row['alamat']; ?></td>
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