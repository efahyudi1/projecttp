<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_informasi_publik = $_GET['id_informasi_publik'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_informasi_publik tip INNER JOIN tbl_admin ta ON ta.id_admin = tip.id_admin WHERE id_informasi_publik = '$id_informasi_publik'");
$row = mysqli_fetch_array($QueryEdit);
$id_informasi_publik = $row['id_informasi_publik'];
$username = $row['username'];
$tanggal_publish = $row['tanggal_publish'];
$judul = $row['judul'];
$subject = $row['subject'];
$deskripsi = $row['deskripsi'];
?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Informasi Publik</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">Menu Utama</div>
        <div class="breadcrumb-item">Informasi Publik</div>
        <div class="breadcrumb-item">Detail Informasi Publik</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Detail Informasi Publik</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="" method="" enctype="multipart/form-data">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Id Informasi Publik</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="id_informasi_publik" value="<?= $id_informasi_publik; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="username" value="<?= $username; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Publish</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tanggal_publish" value="<?= $tanggal_publish; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="judul" value="<?= $judul; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="subject" value="<?= $subject; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
            <div class="col-sm-12 col-md-7">
              <img src="assets/upload/<?= $row['gambar']; ?>" alt="<?= $id_informasi_publik; ?>" height="160" width="200">
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
            <div class="col-sm-12 col-md-7">
              <textarea style="height:250px" class="form-control" name="deskripsi" disabled><?= $deskripsi; ?></textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <a href="dashboard.php?module=informasipublik" class="btn btn-primary">Kembali</a>
            </div>
          </div>
        </form>
        </div> 
    </div>
  </section>
</div>
