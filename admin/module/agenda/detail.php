<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_agenda = $_GET['id_agenda'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_agenda tag INNER JOIN tbl_admin ta ON ta.id_admin = tag.id_admin WHERE id_agenda = '$id_agenda'");
$row = mysqli_fetch_array($QueryEdit);
$id_agenda = $row['id_agenda'];
$username = $row['username'];
$judul = $row['judul'];
$tanggal_pelaksanaan = $row['tanggal_pelaksanaan'];
$target = $row['target'];
$lokasi = $row['lokasi'];
$deskripsi = $row['deskripsi'];
?>
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
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Id Agenda</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="id_agenda" value="<?= $id_agenda; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="id_admin" value="<?= $username; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="judul" value="<?= $judul; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Pelaksanaan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tanggal_pelaksanaan" value="<?= $tanggal_pelaksanaan; ?>" disabled>
            </div>
          </div>
          
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Pelaksanaan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="lokasi" value="<?= $lokasi; ?>" disabled>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Target</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="target" value="<?= $target; ?>" disabled>
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
