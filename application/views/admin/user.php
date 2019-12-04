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
                            <th><a data-toggle="modal" data-target="#modal_tambah" type="button" class="btn"><i class="fa fa-plus"></i></a></th>

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
                                        <form action="<?= site_url('admin/user_tambah') ?>" method="post">
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
                                    <a data-toggle="modal" data-target="#modal_edit<?= $u->id_user ?>" type="button" class="btn"><i class="fa fa-pencil"></i></a>
                                    
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="modal_edit<?= $u->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                            <input type="password" class="form-control" name="password" id="password<?= $u->id_user ?>" placeholder="Masukkan Password ..." value="<?= $u->password ?>" required minlength="8">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="level">Level :</label>
                                                            <select class="form-control" name="level" id="level<?= $u->id_user ?>">
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