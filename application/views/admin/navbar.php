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
            <li><a href="<?= site_url('admin') ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?= site_url('admin/user') ?>"><i class="fa fa-user"></i> Data User</a></li>
            <li><a href="<?= site_url('admin/produk') ?>"><i class="fa fa-cube"></i> Data Produk</a></li>
            <li><p><hr></p></li>
            <li><a href="<?= site_url('home/logout') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
            <!-- <li><a href="#"><i class="fa fa-shopping-basket"></i> <span>Pembelian</span></a></li> -->
        </ul>
    </menu>
</aside>