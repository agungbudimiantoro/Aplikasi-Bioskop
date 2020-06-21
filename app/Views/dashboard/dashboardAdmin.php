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
                    <div class="row mt-1">
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/admin" class=" white-text">assignment_ind</a></i>
                                        <p><a href="/admin" class=" white-text">Admin</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $admin->total; ?></h5>
                                        <p class="no-margin">Total</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/pengguna" class=" white-text">perm_identity</a></i>
                                        <p><a href="/admin" class=" white-text">Pengguna</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $pengguna->total; ?></h5>
                                        <p class="no-margin">Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/ruangan" class=" white-text">view_carousel</a></i>
                                        <p><a href="/ruangan" class=" white-text">Ruangan</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $ruangan->total; ?></h5>
                                        <p class="no-margin">Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/kursi" class=" white-text">event_seat</a></i>
                                        <p><a href="/kursi" class=" white-text">Kursi</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $kursi->total; ?></h5>
                                        <p class="no-margin">Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/film" class=" white-text">movie</a></i>
                                        <p><a href="/film" class=" white-text">Film</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $film->total; ?></h5>
                                        <p class="no-margin">Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/penayangan" class=" white-text">videocam</a></i>
                                        <p><a href="/penayangan" class=" white-text">Penayangan</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $penayangan->total; ?></h5>
                                        <p class="no-margin">Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/penayangan/daftar" class=" white-text">add_shopping_cart</a></i>
                                        <p><a href="/penayangan/daftar" class=" white-text">Penjualan</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $penjualan->total; ?></h5>
                                        <p class="no-margin">Total</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                                <div class="padding-4">
                                    <div class="col s7 m7">
                                        <i class="material-icons background-round mt-5"><a href="/transaksi/bayar" class=" white-text">add_shopping_cart</a></i>
                                        <p><a href="/transaksi/bayar" class=" white-text">Pemesanan</a></p>
                                    </div>
                                    <div class="col s5 m5 right-align">
                                        <h5 class="mb-0"><?= $pemesanan->total; ?></h5>
                                        <p class="no-margin">Total</p>

                                    </div>
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