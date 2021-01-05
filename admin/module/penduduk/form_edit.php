<?php
include "lib/config.php";
include "lib/koneksi.php";

$nik = $_GET['nik'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_penduduk WHERE nik = '$nik'");
$row = mysqli_fetch_array($QueryEdit);
$nik = $row['nik'];
$nama = $row['nama'];
$jenis_kelamin = $row['jenis_kelamin'];
$agama = $row['agama'];
$tempat_lahir = $row['tempat_lahir'];
$tanggal_lahir = $row['tanggal_lahir'];
$alamat = $row['alamat'];
$status = $row['status'];
$pekerjaan = $row['pekerjaan'];
?>


<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Penduduk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Menu Utama</div>
        <div class="breadcrumb-item">Kependudukan</div>
        <div class="breadcrumb-item">Data Penduduk</div>
        <div class="breadcrumb-item">Edit Data Penduduk</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Edit Penduduk</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/penduduk/aksi_edit.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="nik" value="<?= $nik; ?>">
          <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" value="<?= $nik; ?>">
            <p class="text-red"><?php echo isset($error['nik']) ? $error['nik'] : ''; ?></p>
          </div>
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="<?= $nama; ?>">
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
          <input type="text" class="form-control" name="tempat_lahir" value="<?= $tempat_lahir; ?>">
        </div>
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" class="form-control" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>">
          <p class="text-red"><?php echo isset($error['tanggal_lahir']) ? $error['tanggal_lahir'] : ''; ?></p>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" class="form-control" name="alamat" value="<?= $alamat; ?>">
          <p class="text-red"><?php echo isset($error['alamat']) ? $error['alamat'] : ''; ?></p>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" >
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
