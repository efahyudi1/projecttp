<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_agenda = $_GET['id_agenda'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_agenda WHERE id_agenda = '$id_agenda'");
$row = mysqli_fetch_array($QueryEdit);
$id_admin = $row['id_admin'];
$judul = $row['judul'];
$tanggal_pelaksanaan = $row['tanggal_pelaksanaan'];
$target = $row['target'];
$lokasi = $row['lokasi'];
$deskripsi = $row['deskripsi'];
?>


<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Agenda</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">Menu Utama</div>
        <div class="breadcrumb-item">Agenda</div>
        <div class="breadcrumb-item">Edit Agenda</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Edit Agenda</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/agenda/aksi_edit.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="id_agenda" value="<?= $id_agenda; ?>">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control" name="id_admin">
                <option value="">Pilih Publisher</option>
                <?php
                include "../lib/koneksi.php";
                $QueryAdmin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                while ($admin = mysqli_fetch_array($QueryAdmin)) {
                  if ($id_kota==$kota['id_kota']) {
                    $select="selected";
                  } else {
                    $select="";
                  }
              ?>
                <option value="<?= $admin['id_admin']; ?>" <?php echo $select;?>><?= $admin['username']; ?></option>
                <?php } ?>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['id_admin']) ? $error['id_admin'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="judul" value="<?= $judul; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['judul']) ? $error['judul'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Pelaksanaan</label>
            <div class="col-sm-12 col-md-7">
              <input type="date" class="form-control" name="tanggal_pelaksanaan" value="<?= $tanggal_pelaksanaan; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['tanggal_pelaksanaan']) ? $error['tanggal_pelaksanaan'] : ''; ?>
            </p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Pelaksanaan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="lokasi" value="<?= $lokasi; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['lokasi']) ? $error['lokasi'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Target</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="target" value="<?= $target; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['target']) ? $error['target'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
            <div class="col-sm-12 col-md-7">
              <textarea style="height:250px" class="form-control" name="deskripsi"><?php echo $deskripsi;?></textarea>
            </div>
            <p class="text-red"><?php echo isset($error['deskripsi']) ? $error['deskripsi'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary mr-1" type="submit">Submit</button>
              <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>