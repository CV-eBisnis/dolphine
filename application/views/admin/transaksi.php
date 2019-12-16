<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Data Transaksi</title>

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
                            <h1 class="m-0 text-dark">Data Transaksi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= site_url('admin/') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Data Transaksi</li>
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
                                <th>Nama User</th>
                                <th>Tanggal</th>
                                <th>Barang</th>
                                <th>Biaya</th>
                                <th>Kode Unik</th>
                                <th>Total Bayar</th>
                                <th>Lunas</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($transaksi as $trans => $t) {
                                $no++; ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $nama[$trans] ?></td>
                                <td><?= date('j F Y', strtotime($t->tanggal)) ?></td>
                                <td>
                                    <?php $j = 1; foreach ($produk[$trans] as $pro => $p) { if ($j>1) { echo "<br>"; } echo "- ".$p." (".$jumlah[$trans][$pro]." buah)"; $j++; } ?>
                                </td>
                                <td>Rp. <?= number_format($t->biaya,0,",",".") ?>,-</td>
                                <td><?= $t->kode_unik ?></td>
                                <td>Rp. <?= number_format($t->total_bayar,0,",",".") ?>,-</td>
                                <td class="text-center">
                                    <?php if ($t->status_bayar) { ?>
                                        <a href="<?= site_url('admin/transaksi_status/0/'.$t->id_transaksi) ?>" onclick="return confirm('Batalkan Pembayaran?')"><span class="fa fa-check-square"></span></a>
                                    <?php } else { ?>
                                        <a href="<?= site_url('admin/transaksi_status/1/'.$t->id_transaksi) ?>" onclick="return confirm('Verifikasi Pembayaran?')"><span class="fa fa-square"></span></a>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= site_url('admin/transaksi_hapus/' . $t->id_transaksi) ?>" class="btn btn-danger" onclick="return confirm('Hapus Produk?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <b>Cetak Laporan : </b><a href="<?=site_url('admin/transaksi_laporan') ?>" class="btn btn-light"><i class="fa fa-print"></i></a>
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    <?php include('footer.php') ?>
    
</body>

</html>