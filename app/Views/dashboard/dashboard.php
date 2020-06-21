<br>
<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!--card widgets start-->
        <div id="card-pannel ">
            <div class="flash-data" data-flashdata="<?= session()->getFlashdata('success'); ?>" data-tipe="<?= session()->getFlashdata('tipe'); ?>">
                <div class="white" style="padding: 20px 20px 20px 20px;">
                    <h5 class="center-align"><?= $judul_utama; ?></h5>
                    <?= session()->getFlashdata('error');
                    ?>
                    <div class="row mt-1">
                        <h5>BELUM DI BAYAR</h5>
                        <hr>
                        <?php if ($transaksi != null) : ?>
                            <div class="col s12 m7 l4">
                                <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m4">
                                            <i class="material-icons background-round mt-5"><a href="/dashboard" class=" white-text">confirmation_number</a></i>
                                            <p><a href="/admin" class=" white-text"><?= $transaksi->kd_transaksi; ?></a></p>
                                        </div>
                                        <div class="col s5 m7 ">
                                            <p><?= $film->judul; ?></p>
                                            <small><?= $transaksi->tanggal; ?>/<?= $transaksi->waktu_mulai; ?></small>
                                            <small>ruangan <?= $ruangan->no_ruangan; ?>/Kursi <?= $kursi->no_kursi; ?></small>
                                            <p><small><?= $transaksi->harga; ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h5>PETUNJUK PEMESANAN</h5>
                    <ol style="list-style-type:circle">
                        <li>
                            <p>Lakukan pemesanan dengan memilih menu pesan tiket dan memilih film dan kursi yang diinginkan</p>
                        </li>
                        <li>
                            <p>pemesanan akan di proses dan dapat dibayar di gerai terdekat</p>
                        </li>
                        <li>
                            <p>tiket akan dicetak setelah anda melakukan pembayaran</p>
                        </li>
                        <li>
                            <p>waktu pembayaran adalah sampai film selesai diputar</p>
                        </li>
                        <li>
                            <p>apabila anda tidak melakukan pembayaran maka tiket akan hangus dan akun anda akan dibanned dan tidak dapat digunakan untuk melakukan pemesanan lagi</p>
                        </li>
                    </ol>
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