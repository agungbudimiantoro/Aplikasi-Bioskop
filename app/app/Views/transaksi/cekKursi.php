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
                    <form action="/transaksi/tambahPemesanan" method="POST">
                        <?php if ($transaksi == NULL) : ?>
                            <?php foreach ($kursi as $k) : ?>
                                <div class="col s1 kursi blue center" style="border:2px solid white; height:70px; padding-top:20px;"><?= $k['kd_kursi'] ?></div>
                            <?php endforeach; ?>
                        <?php else : ?>

                            <?php foreach ($transaksi as $row) {
                                $trans[] = $row['kd_kursi'];
                            }
                            ?>

                        <?php foreach ($kursi as $row) {
                                if ($row['kd_kursi'] == in_array($row['kd_kursi'], $trans)) {
                                    echo "<div class='col s1 red center' style='border:2px solid white; height:70px; padding-top:20px;'>$row[kd_kursi]</div>";
                                } else {
                                    echo "<div class=' col s1 kursi blue center' style='border:2px solid white; height:70px; padding-top:20px;'>$row[kd_kursi]</div>";
                                }
                            }
                        endif; ?>


                </div>
                <br>
                <input type="text" name="kursi" id="kursi" hidden>
                <input type="text" name="penayangan" value="<?= $penayangan; ?>" hidden>
                <button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
                    <i class="material-icons right">send</i>
                </button>
                </form>
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