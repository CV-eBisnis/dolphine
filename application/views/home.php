<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>DOLPHINE</title>
    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/nouislider.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/main.css">
    <style>
        .header {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 100px;

            background-color: opacity(0%);
            border-radius: 50%;
            box-shadow: 25px 10px 0 0 white;
        }
    </style>
</head>
<!-- <body> -->
<body>
<?php $log = (isset($user->nama)) ? true : false ?>
    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav mr-auto">
                            <li class="nav-item">
                                Welcome<b><?php if($log) { echo ", "; echo ($this->session->level=='admin') ? "<a href='".site_url('admin/')."'>".$user->nama."</a>" : $user->nama; } ?></b>!
                            </li>
                        </ul>
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#modal_keranjang"><span class="ti-shopping-cart"></span></a></li>
                            <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" <?php echo ($log) ? "data-target='#modal_user'" : "data-target='#modal_login'" ?> ><span class="ti-user"></span></a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Modal Login -->
    <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <div class="modal-header">
                        <h5 class="modal-title">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab_masuk" role="tab">
                                        <span class="fa fa-user mr-1"></span>Masuk
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab_daftar" role="tab">
                                        <span class="fa fa-user-plus mr-1"></span>Daftar
                                    </a>
                                </li>
                            </ul>

                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Tab panels -->
                    <div class="tab-content">

                        <!-- Panel Masuk -->
                        <div class="tab-pane fade in show active" id="tab_masuk" role="tabpanel">
                            <form action="<?= site_url('home/login') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" name="email" id="email_masuk" placeholder="Masukkan Email ... " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password_masuk" placeholder="Masukkan Password ..." required minlength="8">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="eye_masuk"><span class="fa fa-eye-slash"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </div>
                            </form>
                        </div>

                        <!-- Panel Daftar -->
                        <div class="tab-pane fade in" id="tab_daftar" role="tabpanel">
                            <form action="<?= site_url('home/daftar') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama ..." required minlength="5">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email ..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password ..." required minlength="8">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="eye"><span class="fa fa-eye-slash"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
        
    <?php if ($log) { ?>
    <!-- Modal User -->
    <div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#profil" role="tab">
                                        Profil
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#riwayat" role="tab">
                                        Transaksi
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pengiriman" role="tab">
                                        Pengiriman
                                    </a>
                                </li>
                            </ul>
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- Tab panels -->
                    <div class="tab-content">

                        <!-- Panel User -->
                        <div class="tab-pane fade in show active" id="profil" role="tabpanel">
                            <form action="<?= site_url('user/edit') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_user" id="id_user<?= $user->id_user ?>" value="<?= $user->id_user ?>">
                                        <label for="nama">Nama :</label>
                                        <input type="text" class="form-control" name="nama" id="nama<?= $user->id_user ?>" placeholder="Masukkan Nama ..." value="<?= $user->nama ?>" required minlength="5">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat :</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat<?= $user->id_user ?>" placeholder="Masukkan Alamat ..." value="<?= $user->alamat ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No. HP :</label>
                                        <input type="number" class="form-control" name="no_hp" id="no_hp<?= $user->id_user ?>" placeholder="Masukkan No. HP ..." value="<?= $user->no_hp ?>">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" name="email" id="email<?= $user->id_user ?>" placeholder="Masukkan Email ..." value="<?= $user->email ?>"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <input type="password" class="form-control" name="password" id="password<?= $user->id_user ?>" placeholder="Masukkan Password ..." value="<?= $this->encryption->decrypt($user->password) ?>" required minlength="8">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= site_url('home/logout') ?>" class="btn btn-danger">Keluar</a>
                                    |
                                    <button type="simpan" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>

                        <!-- Panel Riwayat -->
                        <div class="tab-pane fade in" id="riwayat" role="tabpanel">
                            <div class="modal-body">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Barang</th>
                                        <th>Total (Rp.)</th>
                                        <th>Lunas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($transaksi as $trans => $t) {
                                        $no++; ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= date('j/m/Y', strtotime($t->tanggal)) ?></td>
                                        <td>
                                            <?php $j = 1; foreach ($products[$trans] as $pro => $p) { if ($j>1) { 
                                                echo "<br>"; } echo "- ".$p." (".$jumlah[$trans][$pro]." buah)"; $j++; } ?>
                                        </td>
                                        <td><?= number_format($t->total_bayar,0,",",".") ?>,-</td>
                                        <td class="text-center"><?php echo "<b>".(($t->status_bayar) ? "LUNAS" : "-=PROSES=-")."</b>"; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>

                        <!-- Panel Pengiriman -->
                        <div class="tab-pane fade in" id="pengiriman" role="tabpanel">
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Pengiriman</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0; foreach ($transaksi as $trans => $t) { if(array_key_exists(0, $pengiriman[$trans])) { if($t->id_transaksi==$pengiriman[$trans][0]->id_transaksi) { $no++; ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td>
                                                <?php $j = 1; foreach ($products[$trans] as $pro => $p) { if ($j>1) { echo "<br>"; } echo "- ".$p." (".$jumlah[$trans][$pro]." buah)"; $j++; } ?>
                                            </td>
                                            <td>
                                                <b><?= strtoupper($pengiriman[$trans][0]->status_pengiriman) ?></b>
                                            </td>
                                        </tr>
                                        <?php } } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Modal Keranjang -->
    <div class="modal fade" id="modal_keranjang" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?= site_url() ?>" method="post" id="form_keranjang">
                    <div class="modal-header">
                        <h5 class="modal-title">Keranjang Belanja</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body table-responsive">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>No.</th>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody id="table_body">
                                <tr>
                                    <td colspan="3">Keranjang Kosong!</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="updateLanjutkan">Update & Lanjutkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Pesanan -->
    <div class="modal fade" id="modal_pesanan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <table class="table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody id="table_pesanan">
                            <tr>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="bayar">Bayar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Bayar -->
    <div class="modal fade" id="modal_pembayaran" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body table-responsive">
                    <p>Terima kasih telah melakukan pembelian.</p>
                    <p id="transfer"></p>
                    <p>Transfer ke nomor rekening : <b>07773123456789</b></p>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-primary">OK</a>
                </div>
            </div>
        </div>
    </div>

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <?php foreach ($produk as $p) { ?>
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1><?= $p->nama_produk ?></h1>
                                    <p>Dengan wangi bunga <?= $p->varian_produk ?>, semakin ampuh melindungi kulit anda dari gigitan nyamuk dan membuat kulit anda wangi seperti bunga <?= $p->varian_produk ?></p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="" onclick="return beli(<?= $p->id_produk ?>)"><span class="ti-shopping-cart"></span></a>
                                        <span class="add-text text-uppercase">Beli</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="banner-img">
                                    <img class="img-fluid" src="<?= base_url('assets/images/'.$p->foto_produk) ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <script src="<?= base_url('assets/') ?>js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/') ?>js/vendor/bootstrap.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.sticky.js"></script>
    <script src="<?= base_url('assets/') ?>js/nouislider.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/countdown.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="<?= base_url('assets/') ?>js/maps_googleapis.js"></script>
    <script src="<?= base_url('assets/') ?>js/gmaps.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/main.js"></script>

    <script>
        function beli(id) {
            tambah(id, 1);
            return false;
        }

        function edit() {
            $.ajax({
				url : "<?= site_url('basket/edit');?>",
				type : "POST",
                data : $('#form_keranjang').serialize(),
                dataType: "json",
				success: function(){
                    $('#modal_keranjang').modal("hide");
                    $('#modal_pesanan').modal("show");

                    $.get("<?= site_url('basket/keranjang');?>", function(data) {
                        tr = ''; no = 1; harga = 0; total = 0;
                        $('#table_pesanan').empty();

                        if(JSON.parse(data).length !== 0) {
                            $('#bayar').prop('disabled', false);
                            
                            $.each(JSON.parse(data), function(key, value){
                                harga = value.qty * value.price;
                                tr = tr + 
                                "<tr>" +
                                    "<td>"+no+"</td>" +
                                    "<td>"+value.name+"</td>" +
                                    "<td>"+value.qty+"</td>" +
                                    "<td>"+harga+"</td>" +
                                "</tr>";
                                no = no + 1;
                                total = total + harga;
                            });

                        } else {
                            tr = tr + "<tr><td colspan='4'><center>Keranjang Kosong.</center></td></tr>";
                            $('#bayar').prop('disabled', true);
                        }
                        tr = tr + "<tr><td colspan='3'><b>Total :</b></td><td>"+total+"</td></tr>";
                        $('#table_pesanan').append(tr);
                    });
                    // location.reload();
				}
            })
            .fail(function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
                console.log("error");
            });
        }

        function lihat(eye, pass) {
            if (pass.attr('type') == 'text') {
                eye.html('<span class="fa fa-eye-slash"></span>')
                pass.attr('type', 'password');
            } else {
                eye.html('<span class="fa fa-eye"></span>')
                pass.attr('type', 'text');
            }
        }

        function tambah(id, qty) {
			$.ajax({
				url : "<?= site_url('basket/tambah');?>",
				type : "POST",
                data : {id: id, qty: qty},
                dataType: "json",
				success: function(){
                    $('#modal_keranjang').modal("show");
				}
            });
        }

        $('#modal_keranjang').on("show.bs.modal", function(e) {
            log = <?= json_encode($log) ?>;
            if (log === false) {
                alert("Harap Login Terlebih Dahulu!");
                $('#modal_keranjang').on("shown.bs.modal", function(e) {
                    $('#modal_keranjang').modal("hide");
                    $('#modal_login').modal("show");
                });
            } else {
                $.get("<?= site_url('basket/keranjang');?>", function(data) {
                 
                    tr = ''; no = 1;
                    $('#table_body').empty();

                    if(JSON.parse(data).length !== 0) {
                        $.each(JSON.parse(data), function(key, value){
                            tr = tr +
                            "<tr>" +
                                "<td valign='middle'>"+no+"</td>" +
                                "<td valign='middle'>"+value.name+"</td>" +
                                "<td valign='middle'>" +
                                    "<input type='hidden' name='rowid[]' value='"+value.rowid+"'>" +
                                    "<input type='number' name='qty[]' class='form-control' value='"+value.qty+"' min='0' max='10' size='3' maxlength='3'>" +
                                "</td>" +
                            "</tr>";
                            no = no + 1;

                            if (no == 1) {
                                
                            } else {
                                
                            }
                        });

                        $('#updateLanjutkan').prop('disabled', false);
                    } else {
                        tr = tr + "<tr><td colspan='3'><center>Keranjang Kosong.</center></td></tr>";
                        $('#updateLanjutkan').prop('disabled', true);
                    }
                    
                    $('#table_body').append(tr);
                });
            }
        });

        $('#form_keranjang').submit(function(event) { 
            edit();
            event.preventDefault();
        });

        $('#bayar').click(function() { 
            if (confirm('Anda Yakin?')) {
                $('#modal_pesanan').modal("hide");
                $('#modal_pembayaran').modal("show");  

                $.get("<?= site_url('basket/bayar');?>", function(data) {
                    str = "Mohon segera lakukan pembayaran sebesar, <b>Rp. "+data+",-</b>";
                    $("#transfer").html(str);
                })
                .fail(function(xhr, textStatus, errorThrown) {
                    alert(xhr.responseText);
                    console.log("error");
                    console.log(xhr.responseText);
                });
            } else {
                $('#modal_pesanan').modal("hide");
            }
        });

        $('#eye_masuk').click(function() {
            lihat($('#eye_masuk'), $('#password_masuk'));
        });

        $('#eye').click(function() {
            lihat($('#eye'), $('#password'));
        });

        $(document).ready(function() {
            notif = <?= json_encode((isset($this->session->notif)) ? true : false) ?>;
            if (notif === true) {
                alert(<?= json_encode($this->session->notif)?>);
            }
        });
    </script>

</body>

</html>