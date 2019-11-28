<?php include('header.php') ?>

<body>
    <div class="wrapper">
        <?php include('navbar.php') ?>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php  ?>
                                        <form action="<?= site_url('admin/user_tambah') ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="nama">Nama :</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama ..." required minlength="5">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat :</label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat ...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp">No. HP :</label>
                                                    <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan No. HP ...">
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="email"><b>Email :</b></label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email ..."required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password"><b>Password :</b></label>
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password ..." required minlength="8">
                                                </div>
                                                <div class="form-group">
                                                    <label for="level">Level :</label>
                                                    <select class="form-control" name="level" id="level">
                                                        <option>Administrator</option>
                                                        <option selected>User</option>
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
                                    <a data-toggle="modal" data-target="#ModalEdit<?= $u->id_user ?>" type="button" class="btn"><i class="fa fa-pencil"></i></a>
                                    
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
                                                <form action="<?= site_url('admin/user_edit') ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="id_user"><b>ID User : <?= $u->id_user ?></b></label>
                                                            <input type="hidden" class="form-control" name="id_user" id="id_user" value="<?= $u->id_user ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Nama :</label>
                                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama ..." value="<?= $u->nama ?>" required minlength="5">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat :</label>
                                                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat ..." value="<?= $u->alamat ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_hp">No. HP :</label>
                                                            <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="Masukkan No. HP ..." value="<?= $u->no_hp ?>">
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="email"><b>Email :</b></label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email ..." value="<?= $u->email ?>"required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password"><b>Password :</b></label>
                                                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password ..." value="<?= $u->password ?>" required minlength="8">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="level">Level :</label>
                                                            <select class="form-control" name="level" id="level">
                                                                <option <?php if($u->level==1) echo 'selected' ?> value="1">Administrator</option>
                                                                <option <?php if($u->level==2) echo 'selected' ?> value="2">User</option>
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

                                    <a href="<?= site_url('admin/user_hapus/' . $u->id_user) ?>" type="button" class="btn" onclick="return confirm('Hapus User?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <?php include('footer.php') ?>

</body>

</html>