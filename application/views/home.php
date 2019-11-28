<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dholpine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/fonts/flaticon/font/flaticon.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css') ?>">
    <link href="<?= base_url('assets/css/jquery.mb.YTPlayer.min.css') ?>"" media=" all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

</head>

<style>
    body {
        font-family: 'Segoe UI', sans-serif;
    }

    .sidebar {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #808080;
        overflow-x: hidden;
        padding-top: 16px;
    }

    .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: black;
        display: block;
    }

    .sidebar a:hover {
        color: #f1f1f1;
    }

    .main {
        margin-left: 200px;
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }
</style>

<body style="background-color:#d9d9d9" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="sidebar">
        <a href="" data-toggle="modal" data-target="#modal_login">Login</a>
        <a href="<?= base_url() ?>">Beranda</a>
        <a href=""></a>
    </div>

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
                                        <i class="fas fa-user mr-1"></i>Masuk
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab_daftar" role="tab">
                                        <i class="fas fa-user-plus mr-1"></i>Daftar
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
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email ... " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password ..." required minlength="8">
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

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <!-- <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <a href="index.html" class="site-logo">
                            <img src="<?php //echo base_url('assets/images/logo.png') 
                                        ?>" alt="Image" class="img-fluid">
                        </a>
                    </div>
                    <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div> -->

    </div>

    <div class="intro-section container" style="background-image: url('<?= base_url('assets/images/gambar.jpeg') ?>');">
        <div class="row justify-content-center text-center align-items-center">
            <div class="col-md-8">
                <?php if (!isset($user)) { ?>
                    <span class="sub-title">Welcome</span>
                <?php } else { ?>
                    <span class="sub-title">Welcome, <?= $user ?></span>
                <?php } ?>

                <h1>Dholpine For Everyone</h1>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            <!-- <div class="row mb-5">
                <div class="col-12 section-title text-center mb-5">
                    <h2 class="d-block">Our Products</h2>
                    <p><a href="#">View All Products <span class="icon-long-arrow-right"></span></a></p>
                </div>
            </div> -->

            <div class="row justify-content-center">

                <?php foreach ($produk as $p) { ?>
                <div class="col-lg-4 col-md-6 align-self-center">

                    <div class="wine_v_1 text-center pb-4">
                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="<?= base_url('assets/images/'.$p->foto_produk) ?>" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#"><?= $p->nama_produk ?></a></h3>
                            <span class="price">Rp. <?= number_format($p->harga_produk,0,",","."); ?>,00</span>
                        </div>

                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#"><?= $p->nama_produk ?></a></h3>
                            <span class="price d-block">Rp. <?= number_format($p->harga_produk,0,",","."); ?>,00</span>
                            <br>
                            <a href="#" class="btn add" data-toggle="modal" data-target="#modal_beli"><span class="icon-shopping-bag mr-3"></span> Beli</a>

                        </div>
                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal_beli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
                
                <div class="col-lg-4 col-md-6 align-self-center">

                    <div class="wine_v_1 text-center pb-4">
                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="<?= base_url('assets/images/1.png') ?>" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#">Dholpine Wangi Jeruk</a></h3>
                            <span class="price">Rp5.000,00</span>
                        </div>


                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#">Dholpine Wangi Jeruk</a></h3>
                            <span class="price d-block"><del>Rp5.000,00</del> Rp4.500,00</span>

                            <div class="rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star-o"></span>
                            </div>

                            <a href="#" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="wine_v_1 text-center pb-4">
                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="<?= base_url('assets/images/2.png') ?>" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#">Dholpine Wangi Apel</a></h3>
                            <span class="price">Rp4.500,00</span>
                        </div>


                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#">Dholpine Wangi Apel</a></h3>
                            <span class="price d-block"><del>Rp5.000,00</del> Rp4.500,00</span>

                            <div class="rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star-o"></span>
                            </div>

                            <a href="#" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-self-center">
                    <div class="wine_v_1 text-center pb-4">
                        <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="<?= base_url('assets/images/3.png') ?>" alt="Image" class="img-fluid"></a>
                        <div>
                            <h3 class="heading mb-1"><a href="#">Dholpine Wangi Lavender</a></h3>
                            <span class="price">Rp4.500,00</span>
                        </div>


                        <div class="wine-actions">

                            <h3 class="heading-2"><a href="#">Dholpine Wangi Lavender</a></h3>
                            <span class="price d-block"><del>Rp5.000,00</del> Rp4.500,00</span>

                            <div class="rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star-o"></span>
                            </div>

                            <a href="#" class="btn add"><span class="icon-shopping-bag mr-3"></span> Add to Cart</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- <div class="footer">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <div class="social-icons">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-youtube"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p> -->
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <!-- Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- </p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" />
        </svg>
    </div>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?= base_url('assets/js/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.sticky.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.mb.YTPlayer.min.js') ?>"></script>

    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>