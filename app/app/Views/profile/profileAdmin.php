<!-- START CONTENT -->
<section id="content" class="white" style="height: 600px;">
    <!--start container-->
    <div class="container">
        <!--card widgets start-->
        <div id="card-pannel ">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('success'); ?>" data-tipe="<?= session()->getFlashdata('tipe'); ?>">
            </div>
            <!-- tabel data -->
            <div style="padding: 20px 20px 20px 20px;">
                <h5 class="center-align"><?= $judul_utama; ?></h5>
                <div class="row">
                    <div class="col m1 s12"></div>
                    <div class="col m10 s12">
                        <div class="card" style="padding: 20px 20px 20px 20px;">
                            <div class="row">
                                <div class="col s6">
                                    <img src="<?= base_url(); ?>/uploads/gambar/default.jpg" alt="" width="80%">
                                </div>
                                <div class="col s6">
                                    <h5 class="center-align"><?= $profile->username; ?></h5>
                                    <ul class="collection">
                                        <li class="collection-item">Nama : <?= $profile->nama; ?></li>
                                        <li class="collection-item">Jenis Kelamin : <?= $profile->jk; ?></li>
                                        <li class="collection-item">Alamat : <?= $profile->alamat; ?></li>
                                    </ul>
                                    <a href="/admin/ubah/<?= $profile->id_admin ?>" class="btn waves-effect waves-light" type="submit" name="action">Ubah
                                        <i class="material-icons right">edit</i>
                                    </a>
                                </div>
                            </div>
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