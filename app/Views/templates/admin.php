<!doctype html>
<html lang="en">

<head>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?= base_url('/dashboard_assets/css/styles.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('/dashboard_assets/cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css')?>" rel="stylesheet" crossorigin="anonymous" />
    <link href="<?= base_url('/dashboard_assets/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css')?>" rel="stylesheet" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="/images/logo.png" />
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script src="<?= base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js')?>"></script>
    <script src="<?= base_url('https://cdn.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js')?>"></script>
    <script data-search-pseudo-elements defer src="<?= base_url('/dashboard_assets/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js')?>" crossorigin="anonymous"></script>
    <script src="<?= base_url('/dashboard_assets/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js')?>" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<?php helper('session'); ?>
<?php helper('form'); ?>
<body>
<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand h-100 text-truncate" href="">
            
             Dashboard
        </a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
        
        <ul class="navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                       
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name"><?= session()->get('name') ?></div>
                            <div class="dropdown-user-details-email"><?= session()->get('email') ?></div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <!-- <a class="dropdown-item" href="<?= base_url('/setting')?>">
                        <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                        Ganti Password
                    </a> -->
                    <a class="dropdown-item" href="<?= base_url(); ?>/logout">
                        <div class="dropdown-item-icon"><i data-feather="power"></i>
                            Keluar
                        </div>
                    </a>

                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="sidenav-menu-heading">Main</div>
                        <a class="nav-link" href="<?= base_url('/profile')?>">
                            <div class="nav-link-icon"><i data-feather="activity"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?= base_url('/customer')?>">
                            <div class="nav-link-icon"><i data-feather="users"></i></div>
                            Pelanggan
                        </a>
                        <a class="nav-link" href="<?= base_url('/itemcategory')?>">
                            <div class="nav-link-icon"><i data-feather="git-merge"></i></div>
                            Kategori
                        </a>
                        <a class="nav-link" href="<?= base_url('/item')?>">
                            <div class="nav-link-icon"><i data-feather="box"></i></div>
                            Barang
                        </a>
                        <a class="nav-link" href="<?= base_url(); ?>/rentaldata">
                            <div class="nav-link-icon"><i data-feather="book"></i></div>
                            Pesanan
                        </a>
                        <!-- <a class="nav-link" href="<?= base_url()?>/customer">
                            <div class="nav-link-icon"><i data-feather="users"></i></div>
                            Customer
                        </a> -->
                        <a class="nav-link" href="<?= base_url(); ?>/report">
                            <div class="nav-link-icon"><i data-feather="command"></i></div>
                            Laporan
                        </a>
                        <!-- <a class="nav-link" href="#">
                            <div class="nav-link-icon"><i data-feather="power"></i></div>
                           Logout
                        </a> -->
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title"><?= session()->get('name') ?></div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
        <?= $this->renderSection('content') ?>  
    <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 small">Copyright &#xA9; <?= date('Y') ?></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/dashboard_assets/code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard_assets/cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/assets/demo/chart-area-demo.js"></script>
    <script src="/dashboard_assets/assets/demo/chart-bar-demo.js"></script>
    <script src="/dashboard_assets/assets/demo/chart-pie-demo.js"></script>
    <script src="/dashboard_assets/cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/assets/demo/datatables-demo.js"></script>
    <script src="/dashboard_assets/cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
    <script src="/dashboard_assets/assets/demo/date-range-picker-demo.js"></script>
    <script>
        $(document).ready(function (){
            
        });
    </script>
    
  </body>
</html>