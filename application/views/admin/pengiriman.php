<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Data Pengiriman</title>

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
                            <h1 class="m-0 text-dark">Data Pengiriman</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= site_url('admin/') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Data Pengiriman</li>
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
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>No.</th>
                                <th>Pengiriman</th>
                                <th>Tujuan</th>
                                <th colspan="2" class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; foreach ($pengiriman as $peng => $pe) { $no++; ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td>
                                    <?php $j = 1; foreach ($produk[$peng] as $pro => $p) { if ($j>1) { echo "<br>"; } echo "- ".$p." (".$jumlah[$peng][$pro]." buah)"; $j++; } ?>
                                </td>
                                <td>
                                    <?= "<b>".$user[$peng]->nama."</b><br>".$user[$peng]->alamat."<br><b>HP : </b>".$user[$peng]->no_hp; ?>
                                </td>
                                <td>
                                    <?= $pe->status_pengiriman ?>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#modal_edit<?= $pe->id_pengiriman ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="modal_edit<?= $pe->id_pengiriman ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>                                                
                                                <form action="<?= site_url('admin/pengiriman_status') ?>" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="id_pengiriman"><b>ID Pengiriman : <?= $pe->id_pengiriman ?></b></label>
                                                            <input type="hidden" class="form-control" name="id_pengiriman" id="id_pengiriman<?= $pe->id_pengiriman ?>" value="<?= $pe->id_pengiriman ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status_pengiriman">Status Pengiriman :</label>
                                                            <select class="form-control" name="status_pengiriman" id="status_pengiriman<?= $pe->id_pengiriman ?>">
                                                                <option <?php if($pe->status_pengiriman=='Dikemas') echo 'selected' ?> value="Dikemas">Dikemas</option>
                                                                <option <?php if($pe->status_pengiriman=='Dikirim') echo 'selected' ?> value="Dikirim">Dikirim</option>
                                                                <option <?php if($pe->status_pengiriman=='Diterima') echo 'selected' ?> value="Diterima">Diterima</option>
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

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <b>Cetak Laporan : </b><a href="<?=site_url('admin/pengiriman_laporan') ?>" class="btn btn-light"><i class="fa fa-print"></i></a>
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <?php include('footer.php') ?>
    
</body>

</html>