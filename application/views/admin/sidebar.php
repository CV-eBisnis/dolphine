<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url() ?>" class="brand-link">
        <span class="brand-text font-weight-light">DHOLPINE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= site_url('admin/') ?>" class="nav-link">
                        <i class="nav-icon fa fa-home fa-fw"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('admin/user') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('admin/produk') ?>" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="datatransaksi.html" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            Data Transaksi
                        </p>
                    </a>
                </li>  
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>