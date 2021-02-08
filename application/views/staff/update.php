<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Data Staff</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url().'Staff' ?>">Data Staff</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update Data Staff</li>
  </ol>
</nav>

<form action="#" method="post">
  <div class="row">

    <div class="col-md-6 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nomor Induk Pegawai (NIP)</label>
      <input type="text" name="nip" class="form-control" placeholder="1920031112">
    </div>

    <div class="col-md-6 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" placeholder="Budi Sukirman">
    </div>

    <div class="col-md-6 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" placeholder="123">
    </div>

    <div class="col-6 mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Status</label>
      <select class="form-select" name="status" aria-label="Default select example">
        <option selected>Pilih Status</option>
        <option value="0">Non Aktif</option>
        <option value="1">Aktif</option>
      </select>
    </div>

    <div class="mb-3">
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>


  </div>
</form>
