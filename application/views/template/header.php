<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  </style>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>assets/dist/css/dashboard.css" rel="stylesheet">
</head>
<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SIYUPP KEU</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <form  class="form-control-dark w-100" action="<?php echo base_url().'Pembayaran/add' ?>" method="post">
    <input class="form-control form-control-dark" type="text" placeholder="Masukan NIS" aria-label="Search">
    </form>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#keluar"> Sign out</a>
      </li>
    </ul>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(1)=='Dashboard'){ echo "active"; } ?>" aria-current="page" href="<?php echo base_url().'Dashboard' ?>">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(1)=='Siswa'){ echo "active"; } ?>" href="<?php echo base_url().'Siswa' ?>">
                <span data-feather="siswa"></span>
                Data Siswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(1)=='Jenis_pembayaran'){ echo "active"; } ?>" href="<?php echo base_url().'Jenis_pembayaran' ?>">
                <span data-feather="shopping-cart"></span>
                Jenis Pembayaran
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($this->uri->segment(1)=='Staff'){ echo "active"; } ?>" href="<?php echo base_url().'Staff' ?>">
                <span data-feather="users"></span>
                Staff
              </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Transaksi</span>
              <a class="link-secondary" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=='Pembayaran'){ echo "active"; } ?>" href="<?php echo base_url().'Pembayaran' ?>">
                  <span data-feather="file-text"></span>
                  Pembayaran
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Laporan</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(1)=='Laporan'){ echo "active"; } ?>" href="<?php echo base_url().'Laporan' ?>">
                  <span data-feather="file-text"></span>
                  Laporan Hari ini
                </a>
              </li>
            </ul>

          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
