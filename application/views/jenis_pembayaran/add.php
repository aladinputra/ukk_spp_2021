<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Data Jenis Pembayaran</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url().'Pembayaran' ?>">Data Jenis Pembayaran</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data Jenis Pembayaran</li>
  </ol>
</nav>

<form action="<?php echo base_url().'Jenis_pembayaran/save' ?>" method="post">
  <div class="row">

    <div class="col-md-6 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Jenis Pembayaran</label>
      <input type="text" name="jenis_pembayaran" class="form-control" placeholder="SPP">
    </div>

    <div class="col-md-6 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Jumlah Pembayaran</label>
      <input type="number" name="jumlah_pembayaran" class="form-control" placeholder="4500000">
    </div>

    <div class="mb-3">
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>


  </div>
</form>
