<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Pembayaran</h1>
</div>


<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
  </ol>
</nav>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Pembayaran</th>
        <th>Jumlah</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>191029933</td>
        <td>Budi</td>
        <td>20 Januari 2021</td>
        <td>SPP Bulan Januari</td>
        <td>Rp.450.0000</td>
        <td> <a href="<?php echo base_url().'Pembayaran/detail' ?>">Detail</a> | <a href="<?php echo base_url().'Pembayaran/delete' ?>" onclick="return confirm('Yakin Menghapus Data ini?');"> Delete</a></td>
      </tr>

    </tbody>
  </table>
</div>
