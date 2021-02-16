<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Jenis Pembayaran</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="<?php echo base_url().'Jenis_pembayaran/add' ?>" class="btn btn-primary btn-sm">Tambah Data</a>
  </div>
</div>


<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Jenis Pembayaran</li>
  </ol>
</nav>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Kode</th>
        <th>Jenis</th>
        <th>Jumlah Biaya</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>001</td>
        <td>SPP</td>
        <td>Rp.450.000</td>
        <td> <a href="<?php echo base_url().'Jenis_pembayaran/update' ?>">Update</a> | <a href="<?php echo base_url().'staff/delete' ?>" onclick="return confirm('Yakin Menghapus Data ini?');"> Delete</a></td>
      </tr>

    </tbody>
  </table>
</div>
