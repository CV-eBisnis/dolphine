<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Data User</title>
    
    <?php include('header.php') ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include('navbar.php') ?>

        <?php include('sidebar.php') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Data User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= site_url('admin/') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Data User</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

           <!-- Main content -->
           <section class="content">
                <div class="container-fluid">
                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Hp</th>
                                <th><a data-toggle="modal" data-target="#modal_tambah" class="btn btn-success"><i class="fa fa-plus"></i></a></th>

                                <!-- Modal Tambah -->
                                <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php  ?>
                                            <form action="<?= site_url('user/tambah') ?>" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="nama">Nama :</label>
                                                        <input type="text" class="form-control" name="nama" id="nama0" placeholder="Masukkan Nama ..." required minlength="5">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat :</label>
                                                        <input type="text" class="form-control" name="alamat" id="alamat0" placeholder="Masukkan Alamat ...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">No. HP :</label>
                                                        <input type="number" class="form-control" name="no_hp" id="no_hp0" placeholder="Masukkan No. HP ...">
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label for="email"><b>Email :</b></label>
                                                        <input type="email" class="form-control" name="email" id="email0" placeholder="Masukkan Email ..."required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password"><b>Password :</b></label>
                                                        <input type="password" class="form-control" name="password" id="password0" placeholder="Masukkan Password ..." required minlength="8">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="level">Level :</label>
                                                        <select class="form-control" name="level" id="level0">
                                                            <option value="admin">Administrator</option>
                                                            <option value="user" selected>User</option>
                                                        </select>
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
                                    <td><?= $no ?></td>
                                    <td><?= $u->nama ?></td>
                                    <td><?= $u->alamat ?></td>
                                    <td><?= $u->no_hp ?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#modal_edit<?= $u->id_user ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        
                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="modal_edit<?= $u->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>                                                
                                                    <form action="<?= site_url('user/edit') ?>" method="post">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="id_user"><b>ID User : <?= $u->id_user ?></b></label>
                                                                <input type="hidden" class="form-control" name="id_user" id="id_user<?= $u->id_user ?>" value="<?= $u->id_user ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama">Nama :</label>
                                                                <input type="text" class="form-control" name="nama" id="nama<?= $u->id_user ?>" placeholder="Masukkan Nama ..." value="<?= $u->nama ?>" required minlength="5">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat :</label>
                                                                <input type="text" class="form-control" name="alamat" id="alamat<?= $u->id_user ?>" placeholder="Masukkan Alamat ..." value="<?= $u->alamat ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_hp">No. HP :</label>
                                                                <input type="number" class="form-control" name="no_hp" id="no_hp<?= $u->id_user ?>" placeholder="Masukkan No. HP ..." value="<?= $u->no_hp ?>">
                                                            </div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <label for="email"><b>Email :</b></label>
                                                                <input type="email" class="form-control" name="email" id="email<?= $u->id_user ?>" placeholder="Masukkan Email ..." value="<?= $u->email ?>"required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password"><b>Password :</b></label>
                                                                <input type="password" class="form-control" name="password" id="password<?= $u->id_user ?>" placeholder="Masukkan Password ..." value="<?= $this->encryption->decrypt($u->password) ?>" required minlength="8">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="level">Level :</label>
                                                                <select class="form-control" name="level" id="level<?= $u->id_user ?>">
                                                                    <option <?php if($u->level=='admin') echo 'selected' ?> value="admin">Administrator</option>
                                                                    <option <?php if($u->level=='user') echo 'selected' ?> value="user">User</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="<?= site_url('user/hapus/' . $u->id_user) ?>" class="btn btn-danger" onclick="return confirm('Hapus User?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    
    <?php include('footer.php') ?>

</body>

</html>