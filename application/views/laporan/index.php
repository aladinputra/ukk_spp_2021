<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Laporan Transaksi Hari ini</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="<?php echo base_url().'Laporan/print_harian' ?>" class="btn btn-primary btn-sm">Cetak</a>
  </div>
</div>


<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
  </ol>
</nav>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Kode Transaksi</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jumlah Pembayaran</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>112388</td>
        <td>191023399</td>
        <td>Budi</td>
        <td>Rp.450.000</td>
      </tr>
      <tr>
        <td colspan="4"> <p class="text-end">Total</p></td>
        <td><strong class="text-danger">Rp.450.000</strong></td>
      </tr>
    </tbody>
  </table>
</div>
