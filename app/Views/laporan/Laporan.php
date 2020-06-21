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
                        <h6></h6>
                        <form action="/laporan/cek" method="POST">
                            <hr>
                            <br><br>
                            <!-- <p>cetak laporan ( Pengguna/Admin/Film/Ruangan/Kursi )</p> -->
                            <div class="row">
                                <div class="input-field col s5">
                                    <select class="" name="cek">
                                        <option value="pengguna">pengguna</option>
                                        <option value="admin">admin</option>
                                        <option value="film">film</option>
                                        <option value="kursi">kursi</option>
                                        <option value="ruangan">ruangan</option>
                                    </select>
                                    <label>Pilih Laporan</label>
                                </div>
                                <div class="col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Cetak
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <form action="/laporan/cek" method="POST">

                            <br><br>
                            <!-- <p>cetak laporan ( Pengguna/Admin/Film/Ruangan/Kursi )</p> -->
                            <div class="row">
                                <div class="input-field col s5">
                                    <select class="" name="cek">
                                        <option value="penayangan">penayangan</option>
                                        <option value="penjualan">penjualan</option>
                                        <option value="pemesanan">pemesanan</option>
                                        <option value="transaksi">penjualan & pemesanan</option>
                                    </select>
                                    <label>Pilih Laporan</label>
                                </div>
                                <div class="input-field col s5">
                                    <select class="" name="sortir">
                                        <option value="semua">Semua</option>
                                        <option value="hari">Berdasarkan Hari</option>
                                        <option value="bulan">Berdasarkan Bulan</option>
                                        <option value="tahun">Berdasarkan Tahun</option>
                                    </select>
                                    <label>Pilih Jenis Waktu</label>
                                </div>
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