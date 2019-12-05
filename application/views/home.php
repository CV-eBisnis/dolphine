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

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <!-- <li class="nav-item"><a class="nav-link" href="index.html"><span class="ti-home"></span></a></li> -->
                            <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#modal_keranjang"><span class="ti-shopping-cart"></span></a></li>
                            <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#modal_login"><span class="ti-user"></span></a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>

        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
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
                                        <i class="fa fa-user mr-1"></i>Masuk
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab_daftar" role="tab">
                                        <i class="fa fa-user-plus mr-1"></i>Daftar
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

                        <!--Panel Masuk-->
                        <div class="tab-pane fade in show active" id="tab_masuk" role="tabpanel">
                            <form action="<?= site_url('home/login') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" name="email" id="email_masuk" placeholder="Masukkan Email ... " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <input type="password" class="form-control" name="password" id="password_masuk" placeholder="Masukkan Password ..." required minlength="8">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Masuk</button>
                                </div>
                            </form>
                        </div>

                        <!--Panel Daftar-->
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
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password ..." required minlength="8">
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
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Lanjutkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Pesanan -->
    <div class="modal fade" id="modal_pesanan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <form action="" method="post" id="form_pesanan"> -->
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
                        <button class="btn btn-primary" onclick="return confirm('Anda Yakin?')" id="bayar">Bayar</button>
                    </div>
                <!-- </form> -->
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
                    <p>Transfer ke nomor rekening :</p>
                    <p><b>07773123456789</b></p>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-primary">Bayar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel" id="carouselExampleControls">
                        <?php foreach ($produk as $p) { ?>
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1><?= $p->nama_produk ?></h1>
                                    <p>Dengan wangi bunga <?= $p->varian_produk ?>, semakin ampuh melindungi kulit anda dari gigitan nyamuk
                                        dan membuat kulit anda wangi seperti bunga <?= $p->varian_produk ?></p>
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
                        <!-- single-slide -->
                        <!-- <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Dholpine Wangi <br>Lavender</h1>
                                    <p>Dengan wangi bunga lavender, semakin ampuh melindungi kulit anda dari gigitan nyamuk
                                        dan membuat kulit anda wangi seperti bunga lavender</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="ti-shopping-cart"></span></a>
                                        <span class="add-text text-uppercase">Add to Cart</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="banner-img">
                                    <img class="img-fluid" src="<?= base_url('assets/') ?>images/banner/gambar_3.png" alt="">
                                </div>
                            </div>
                        </div> -->
                        <!-- single-slide -->
                        <!-- <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Dholpine Wangi<br>Apel</h1>
                                    <p>Dengan wangi apel, semakin ampuh melindungi kulit anda dari gigitan nyamuk
                                        dan membuat kulit anda wangi seperti apel</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="ti-shopping-cart"></span></a>
                                        <span class="add-text text-uppercase">Add to Cart</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="banner-img">
                                    <img class="img-fluid" src="<?= base_url('assets/') ?>images/banner/gambar_2.png" alt="">
                                </div>
                            </div>
                        </div> -->
                        <!-- single-slide -->
                        <!-- <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Dholpine Wangi <br>Jeruk</h1>
                                    <p>Dengan wangi jeruk, semakin ampuh melindungi kulit anda dari gigitan nyamuk
                                        dan membuat kulit anda wangi seperti jeruk</p>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href=""><span class="ti-shopping-cart"></span></a>
                                        <span class="add-text text-uppercase">Add to Cart</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="banner-img">
                                    <img class="img-fluid" src="<?= base_url('assets/') ?>images/banner/gambar_1.png" alt="">
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <script src="<?= base_url('assets/') ?>js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/') ?>js/vendor/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.sticky.js"></script>
    <script src="<?= base_url('assets/') ?>js/nouislider.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/countdown.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?= base_url('assets/') ?>js/gmaps.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/main.js"></script>

    <script>
        function beli(id) {
            tambah(id, 1);
            return false;
        }

        function tambah(id, qty) {
			$.ajax({
				url : "<?= site_url('basket/keranjang_tambah');?>",
				type : "POST",
                data : {id: id, qty: qty},
                dataType: "json",
				success: function(){
                    $('#modal_keranjang').modal("show");
				}
            });
        }

        $('#modal_keranjang').on("show.bs.modal", function() {
            $.get("<?= site_url('basket/keranjang');?>", function(data) {
                $('#table_body').empty(); 
                if(data !== 'undefined' && data !== '') {
                    tr = ''; no = 1;

                    $.each(JSON.parse(data), function(key, value){
                        tr = tr +
                        "<tr>" +
                            "<td>"+no+"</td>" +
                            "<td>"+value.name+"</td>" +
                            "<td>" +
                                "<input type='hidden' name='rowid[]' value='"+value.rowid+"'>" +
                                "<input type='number' name='qty[]' class='form-control' value='"+value.qty+"' min='0' max='10' size='3' maxlength='3'>" +
                            "</td>" +
                        "</tr>";
                        no = no + 1;
                    });

                } else {
                    tr = tr + "<tr><td colspan='3'><center>Keranjang Kosong.</center></td></tr>";
                }
                
                $('#table_body').append(tr);
            });
        });

        $('#form_keranjang').submit(function(event) { 
            event.preventDefault();
            $.ajax({
				url : "<?= site_url('basket/keranjang_edit');?>",
				type : "POST",
                data : $('#form_keranjang').serialize(),
                dataType: "json",
				success: function(){
                    $('#modal_keranjang').modal("hide");
                    $('#modal_pesanan').modal("show");

                    $.get("<?= site_url('basket/keranjang');?>", function(data) {
                        $('#table_pesanan').empty(); 
                        if(data !== 'undefined' && data !== '') {
                            tr = ''; no = 1; harga = 0; total = 0;
                            
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
                        }
                        tr = tr + "<tr><td colspan='3'><b>Total :</b></td><td>"+total+"</td></tr>";
                        $('#table_pesanan').append(tr);
                    });
				}
            })
            .fail(function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
                console.log("error");
            });
        });

        $('#bayar').click(function() { 
            $('#modal_pesanan').modal("hide");
            $('#modal_pembayaran').modal("show");  

            $.get("<?= site_url('basket/keranjang_bayar');?>", function(data) {
                str = "Mohon segera lakukan pembayaran sebesar, <b>"+data+"</b>";
                $("#transfer").html(str);alert(1);  
            })
            .fail(function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
                console.log("error");
            });
            
        });

    </script>

</body>

</html>