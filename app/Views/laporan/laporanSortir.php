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
                <h5 class="center-align">
                    <?= "$judul_utama $laporan"; ?>
                </h5>
                <div class="row">
                    <div class="col m1 s12"></div>
                    <div class="col m10 s12">
                        <h6></h6>
                        <form action="/laporan/<?= $laporan; ?>" method="POST">
                            <input type="text" name="laporan" value="<?= $laporan; ?>" hidden>
                            <input type="text" name="sortir" value="<?= $sortir; ?>" hidden>
                            <hr>
                            <br><br>
                            <!-- <p>cetak laporan ( Pengguna/Admin/Film/Ruangan/Kursi )</p> -->
                            <div class="row">
                                <?php if ($sortir == 'tahun') : ?>
                                    <div class="input-field col s5">
                                        <select class="" name="tahun">
                                            <?php for ($i = 2010; $i <= 2050; $i++) {
                                                echo "<option value='$i'>$i</option>";
                                            }
                                            ?>
                                        </select>
                                        <label>Pilih Tahun</label>
                                    </div>
                                <?php elseif ($sortir == 'bulan') : ?>
                                    <div class="input-field col s5">
                                        <select class="" name="bulan">
                                            <option value='1'>Januari</option>";
                                            <option value='2'>Februari</option>";
                                            <option value='3'>Maret</option>";
                                            <option value='4'>April</option>";
                                            <option value='5'>Mei</option>";
                                            <option value='6'>Juni</option>";
                                            <option value='8'>Juli</option>";
                                            <option value='9'>Agustus</option>";
                                            <option value='10'>Spetember</option>";
                                            <option value='11'>November</option>";
                                            <option value='12'>Desember</option>";
                                        </select>
                                    </div>
                                    <div class="input-field col s5">
                                        <select class="" name="tahun">
                                            <?php for ($i = 2010; $i <= 2050; $i++) {
                                                echo "<option value='$i'>$i</option>";
                                            }
                                            ?>
                                        </select>
                                        <label>Pilih Tahun</label>
                                    </div>
                                <?php elseif ($sortir == 'hari') : ?>
                                    <div class="input-field col s5">
                                        <input type="date" name="hari" data-date-format="DD MMMM YYYY">
                                    </div>
                                <?php endif; ?>
                                <div class="col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Cetak
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
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