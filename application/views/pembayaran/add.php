<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Data Siswa</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo base_url().'Siswa' ?>">Pembayaran</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data Pembayaran</li>
  </ol>
</nav>

<div class="row">
  <div class="col-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Budi</h5>
        <h6 class="card-subtitle mb-2 text-muted">10R1</h6>
        <p class="card-text">Teknik Komputer Jaringan</p>
        <a href="#" class="card-link">History Pembayaran</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <div class="card-body m-3">
        <h4 class="card-subtitle mb-2 text-muted">Total</h4>
        <h2 class="card-title text-danger">Rp.450.000</h2>

      </div>
    </div>
  </div>
</div>

<div class="col-12 pt-2">

  <a href="#" class="btn btn-info text-white btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Detail Pembayaran</a>

  <form action="#" method="post">

    <table class="table mt-3">
      <thead>
        <td>No</td>
        <td>Jenis Bayar</td>
        <td>Keterangan</td>
        <td class="text-center">Jumlah</td>
        <td>Action</td>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>SPP</td>
          <td>Bulan Januari</td>
          <td class="text-center">Rp.450.000</td>
          <td> <a href="#" class="badge bg-danger">Hapus</a></td>
        </tr>

        <tr>
          <td colspan="3" class="text-end">&nbsp;</td>
          <td class="text-center"><strong>Rp.450.000</strong></td>
        </tr>
      </tbody>
    </table>

    <div class="mb-3">
    <button type="submit" name="simpan" class="btn btn-primary btn-sm">Cetak Bukti</button>
  </div>
</div>
</form>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pembayaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url().'Pembayaran/save_pay' ?>" method="post">

        <div class="modal-body">
          <div class="row">

            <div class="col-12">
              <label class="form-label">Pilih Jenis Pembayaran</label>
              <select class="form-select" aria-label="Default select example" name="tipe_pembayaran">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-12 mt-2">
              <label class="form-label">Keterangan</label>
              <textarea name="keterangan" class="form-control" rows="4" cols="30"></textarea>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
