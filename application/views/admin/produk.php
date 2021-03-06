<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Data Produk</title>

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
                            <h1 class="m-0 text-dark">Data Produk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= site_url('admin/') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Data Produk</li>
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
                                <th>Foto Barang</th>
                                <th>Nama Barang</th>
                                <th>Varian</th>
                                <th>Harga</th>
                                <th><a data-toggle="modal" data-target="#modal_tambah" class="btn btn-success"><i class="fa fa-plus"></i></a></th>

                                <!-- Modal Tambah -->
                                <div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php  ?>
                                            <form action="<?= site_url('admin/produk_tambah') ?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="nama_produk">Nama Produk :</label>
                                                        <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk ..." required minlength="5">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="foto_produk">Foto Produk :</label>
                                                        <br>
                                                        <img src="" name="new_img" height="100" style="display:none">
                                                        <input type="file" class="form-control-file" name="foto_produk" id="foto_produk" placeholder="Masukkan Foto Produk ..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="varian_produk">Varian Produk :</label>
                                                        <input type="text" class="form-control" name="varian_produk" id="varian_produk" placeholder="Masukkan Varian Produk ..." required minlength="3">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="harga_produk">Harga Produk : (Rp.)</label>
                                                        <input type="number" class="form-control" name="harga_produk" id="harga_produk" placeholder="Masukkan Harga Produk ..." required>
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
                            foreach ($produk as $p) {
                                $no++; ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <style>
                                            /* Center the loader */
                                            .loader {
                                                border: 5px solid #f3f3f3;
                                                border-radius: 50%;
                                                border-top: 5px solid blue;
                                                border-bottom: 5px solid blue;
                                                width: 50px;
                                                height: 50px;
                                                animation: spin 2s linear infinite;
                                            }

                                            @keyframes spin {
                                                0% { transform: rotate(0deg); }
                                                100% { transform: rotate(360deg); }
                                            }
                                        </style>
                                        
                                        <img class="loader <?= $no-1 ?>" height="100" style="display:block">
                                        <img src="<?= base_url('assets/images/'.$p->foto_produk) ?>" height="100" style="display:none" onload="this.style.display = 'block'; document.getElementsByClassName('loader')[<?= $no-1 ?>].style.display = 'none'">
                                        
                                    </td>
                                    <td><?= $p->nama_produk ?></td>
                                    <td><?= $p->varian_produk ?></td>
                                    <td><?= $p->harga_produk ?></td>
                                    <td>
                                        <a data-toggle="modal" data-target="#modal_edit<?= $p->id_produk ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="modal_edit<?= $p->id_produk ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= site_url('admin/produk_edit') ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="id_produk"><b>ID Produk : <?= $p->id_produk ?></b></label>
                                                                <input type="hidden" class="form-control" name="id_produk" id="id_produk" value="<?= $p->id_produk ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama_produk">Nama Barang :</label>
                                                                <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Barang ..." value="<?= $p->nama_produk ?>" required minlength="5">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="foto_produk">Foto Barang :</label>
                                                                <br>
                                                                <img src="<?= base_url('assets/images/'.$p->foto_produk) ?>" height="100">
                                                                =>
                                                                <img src="" name="new_img" height="100" style="display:none">
                                                                <input type="file" class="form-control-file" name="foto_produk" id="foto_produk" placeholder="Masukkan Foto Barang ...">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="varian_produk">Varian Produk :</label>
                                                                <input type="text" class="form-control" name="varian_produk" id="varian_produk" placeholder="Masukkan Varian Produk ..." value="<?= $p->varian_produk ?>" required minlength="3">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="harga_produk">Harga Produk : (Rp.)</label>
                                                                <input type="number" class="form-control" name="harga_produk" id="harga_produk" placeholder="Masukkan Harga Produk ..." value="<?= $p->harga_produk ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="<?= site_url('admin/produk_hapus/' . $p->id_produk) ?>" class="btn btn-danger" onclick="return confirm('Hapus Produk?')"><i class="fa fa-trash"></i></a>
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

    <script>
        $("[data-toggle='modal']").click(function(){  
            $("[name='new_img']").hide();
            $("[name='foto_produk']").val('');
        });

        $("[name='foto_produk']").change(function(){
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $("[name='new_img']").show();
                    $("[name='new_img']").attr('src', e.target.result);
                }
                
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>

</body>

</html>