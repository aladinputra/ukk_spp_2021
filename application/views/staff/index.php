<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data staff</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="<?php echo base_url().'staff/add' ?>" class="btn btn-primary btn-sm">Tambah data</a>
  </div>
</div>


<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'Dashboard' ?>">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data staff</li>
  </ol>
</nav>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1,001</td>
        <td>Lorem</td>
        <td>ipsum</td>
        <td>dolor</td>
        <td>sit</td>
        <td> <a href="<?php echo base_url().'staff/update' ?>">Update</a> | <a href="<?php echo base_url().'staff/delete' ?>" onclick="return confirm('Yakin Menghapus Data ini?');"> Delete</a></td>
      </tr>
      <tr>
        <td>1,002</td>
        <td>amet</td>
        <td>consectetur</td>
        <td>adipiscing</td>
        <td>elit</td>
        <td> <a href="<?php echo base_url().'staff/update' ?>">Update</a> | <a href="<?php echo base_url().'staff/delete' ?>" onclick="return confirm('Yakin Menghapus Data ini?');"> Delete</a></td>
      </tr>
      <tr>
        <td>1,003</td>
        <td>Integer</td>
        <td>nec</td>
        <td>odio</td>
        <td>Praesent</td>
        <td> <a href="<?php echo base_url().'staff/update' ?>">Update</a> | <a href="<?php echo base_url().'staff/delete' ?>" onclick="return confirm('Yakin Menghapus Data ini?');"> Delete</a></td>
      </tr>
      <tr>
        <td>1,003</td>
        <td>libero</td>
        <td>Sed</td>
        <td>cursus</td>
        <td>ante</td>
        <td> <a href="<?php echo base_url().'staff/update' ?>">Update</a> | <a href="<?php echo base_url().'staff/delete' ?>" onclick="return confirm('Yakin Menghapus Data ini?');"> Delete</a></td>
      </tr>

    </tbody>
  </table>
</div>
