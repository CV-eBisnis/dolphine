<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Dholpine</title>

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<style>
    body {

        font-family: 'Quicksand', sans-serif;
    }

    .wrapper {
        width: 100%;
        height: 100%;
    }

    .navbar {
        margin-bottom: 0;
    }

    .sidebar {
        width: 100%;
        height: 100%;
        background: #293949;
        position: absolute;
        z-index: 100;
    }

    ul {
        padding: 0;
        margin-left: -40px;
    }

    ul li {
        list-style: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    }

    ul li a {
        text-decoration: none;
        color: #aeb2b7;
        display: block;
        padding: 19px 0px 18px 25px;
        transition: all 200ms ease-in;
    }

    ul li a:hover {
        text-decoration: none;
        color: #1abc9c;
    }

    ul li a:visited {
        text-decoration: none;
        color: #fff;
    }

    li li a span {
        display: inline-block;
    }

    ul ul {
        display: none;
        margin: 0px;
    }

    ul li a .fa-angle-down {
        margin-right: 10px;
    }

    /*apabila lebar min 768px*/
    @media(min-width: 768px) {
        .sidebar {
            width: 240px;
        }

        .content {
            margin-left: 250px;
        }

        .inner {
            padding: 15px;
        }
    }
</style>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DHOLPINE</a>
            </div>
        </nav>
        <aside class="sidebar">
            <menu>
                <ul class="menu-content">
                    <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo site_url('admin/user') ?>"><i class="fa fa-user"></i> Data User</a></li>
                    <li><a href="<?php echo site_url('admin/produk') ?>"><i class="fa fa-cube"></i> Data Produk</a></li>
                    <li><a href="#"><i class="fa fa-shopping-basket"></i> <span>Pembelian</span></a></li>
                </ul>
            </menu>
        </aside>
        <section class="content">
            <div class="inner">
                <p><b>Data User</b></p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th><button data-toggle="modal" data-target="#ModalTambah"><i class="fa fa-plus"></i></button></th>

                            <!-- Modal Tambah -->
                            <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php  ?>
                                        <form action="<?= site_url('admin/user_tambah') ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="nama">Nama :</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="Masukkan Nama ...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat :</label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Masukkan Alamat ...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp">No. HP :</label>
                                                    <input type="number" class="form-control" name="no_hp" id="no_hp" aria-describedby="helpId" placeholder="Masukkan No. HP ...">
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="email"><b>Email :</b></label>
                                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Masukkan Email ...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password"><b>Password :</b></label>
                                                    <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Masukkan Password ...">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($user as $u) {
                            $no++; ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->alamat ?></td>
                                <td><?php echo $u->no_hp ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#ModalEdit<?= $u->id_user ?>" class="btn"><i class="fa fa-pencil"></i></button>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="ModalEdit<?= $u->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <?php  ?>
                                                <form action="<?= site_url('admin/user_edit') ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="id_user"><b>ID : <?= $u->id_user ?></b></label>
                                                            <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $u->id_user ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Nama :</label>
                                                            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="Masukkan Nama ..." value="<?= $u->nama ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat :</label>
                                                            <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Masukkan Alamat ..." value="<?= $u->alamat ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_hp">No. HP :</label>
                                                            <input type="number" class="form-control" name="no_hp" id="no_hp" aria-describedby="helpId" placeholder="Masukkan No. HP ..." value="<?= $u->no_hp ?>">
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="email"><b>Email :</b></label>
                                                            <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Masukkan Email ..." value="<?= $u->email ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password"><b>Password :</b></label>
                                                            <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Masukkan Password ..." value="<?= $u->password ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="<?= site_url('admin/user_hapus/' . $u->id_user) ?>" type="button" class="btn"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>