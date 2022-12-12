<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <!-- <div class="sidebar-brand-icon">
            <i class="fas fa-book"></i>
        </div> -->
        <!-- <div class="sidebar-brand-text mx-3">NASTRO PHOTO</div> -->
        <img src="/asset/img/Logo-Nastro.png" style="width: 180px;">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= site_url('costumer'); ?>">
            <i class="fa-solid fa-house-user"></i>
            <span>Home</span>
        </a>
    </li> -->

    <?php if (session()->get('tipe') == 'admin') : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            MEDIA ADMIN
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('adm'); ?>">
                <i class="fa-solid fa-house-user"></i>
                <span>Data Costumer</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-chart-line"></i>
                <span>Grafik Data</span>
            </a>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= site_url('chart_bar_costumer') ?>">Diargam Batang</a>
                    <a class="collapse-item" href="<?= site_url('chart_line_costumer') ?>">Diagram garis</a>
                </div>
            </div>
            <a class="nav-link" href="<?= site_url('pricelist') ?>">
                <i class="fa-solid fa-list-ul"></i>
                <span>Pricelist</span>
            </a>
            <a class="nav-link" href="<?= site_url('drive') ?>">
                <i class="fa-brands fa-google-drive"></i>
                <span>Drive</span>
            </a>
        </li>
    <?php endif ?>


    <?php if (session()->get('tipe') == 'client') : ?>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('home'); ?>">
                <i class="fa-solid fa-house-user"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('pricelist') ?>">
                <i class="fa-solid fa-list-ul"></i>
                <span>Pricelist</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('drive') ?>">
            <i class="fa-brands fa-google-drive"></i>
                <span>Drive</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('cara') ?>">
                <i class="fa-solid fa-book"></i>
                <span>Cara Order</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= site_url('about') ?>">
                <!-- <i class="fa-regular fa-square-list"></i> ERROR -->
                <span>About</span>
            </a>
        </li>
    <?php endif ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->