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
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID User</th>
                                <th>Kode Unik</th>
                                <th>Total Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($transaksi as $t) {
                                $no++; ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $t->id_user ?></td>
                                    <td><?= $t->kode_unik ?></td>
                                    <td><?= $t->total_biaya ?></td>
                                    <!-- <td>
                                        <a href="<?= site_url('admin/transaksi_hapus/' . $t->id_user) ?>" class="btn btn-danger" onclick="return confirm('Hapus User?')"><i class="fa fa-trash"></i></a>
                                    </td> -->
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