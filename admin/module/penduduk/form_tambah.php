<?php
include "lib/config.php";
include "lib/koneksi.php";
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    $_POST = $_SESSION['post'];
    unset($_SESSION['error']);
    unset($_SESSION['post']);
}
?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Penduduk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Menu Utama</div>
        <div class="breadcrumb-item">Kependudukan</div>
        <div class="breadcrumb-item">Data Penduduk</div>
        <div class="breadcrumb-item">Tambah Data Penduduk</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Tambah Penduduk</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/penduduk/aksi_simpan.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="NIK">
            <p class="text-red"><?php echo isset($error['nik']) ? $error['nik'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            <p class="text-red"><?php echo isset($error['nama']) ? $error['nama'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin">
              <option>--Pilih Jenis Kelamin--</option>
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
            <p class="text-red"><?php echo isset($error['jenis_kelamin']) ? $error['jenis_kelamin'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Agama</label>
            <select class="form-control" name="agama">
              <option>--Pilih Agama--</option>
              <option>Islam</option>
              <option>Katholik</option>
              <option>Kristen</option>
              <option>Budha</option>
              <option>Hindhu</option>
              <option>Lain-lain</option>
            </select>
            <p class="text-red"><?php echo isset($error['agama']) ? $error['agama'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir">
            <p class="text-red"><?php echo isset($error['tanggal_lahir']) ? $error['tanggal_lahir'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            <p class="text-red"><?php echo isset($error['alamat']) ? $error['alamat'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
              <option>--Pilih Status--</option>
              <option>Kawin</option>
              <option>Belum Kawin</option>
            </select>
            <p class="text-red"><?php echo isset($error['status']) ? $error['status'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Pekerjaan</label>
            <select class="form-control" name="pekerjaan">
              <option>--Pilih Pekerjaan--</option>
              <option>PNS</option>
              <option>Polri</option>
              <option>TNI</option>
              <option>Karyawan Swasta</option>
              <option>Buruh</option>
              <option>Mahasiswa</option>
              <option>Pelajar</option>
              <option>Lain-lain</option>
            </select>
            <p class="text-red"><?php echo isset($error['pekerjaan']) ? $error['pekerjaan'] : ''; ?></p>
          </div>
        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
          <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
      </form>
    </div>
  </section>
</div>