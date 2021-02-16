<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Update Data Siswa</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url().'Siswa' ?>">Data Siswa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update Data Siswa</li>
  </ol>
</nav>

<form action="#" method="post">
  <div class="row">

    <div class="col-md-4 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nomor Induk Siswa (NIS)</label>
      <input type="text" name="nis" class="form-control" placeholder="1920031112">
    </div>

    <div class="col-md-4 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" placeholder="Budi Sukirman">
    </div>


    <div class="col-md-4 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" value="L" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
          Laki - Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" value="P" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2">
          Perempuan
        </label>
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
      <input type="text" name="tempat_lahir" class="form-control" placeholder="Tangerang">
    </div>

    <div class="col-md-6 mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
      <input type="date" name="tgl_lahir" class="form-control" placeholder="2000/10/10">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="col-6 mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Jurusan</label>
      <select class="form-select" name="jurusan" aria-label="Default select example">
        <option selected>Pilih Jurusan</option>
        <option value="R">Rekayasa Perangkat Lunak</option>
        <option value="J">Teknik Komputer dan Jaringan</option>
      </select>
    </div>

    <div class="col-6 mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Kelas</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Pilih Kelas</option>
        <option value="10R1">10R1</option>
        <option value="11R1">11R1</option>
        <option value="12R1">12R1</option>
        <option value="10J1">10J1</option>
        <option value="11J1">11J1</option>
        <option value="12J1">12J1</option>
      </select>
    </div>

    <div class="mb-3">
      <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </div>


  </div>
</form>
