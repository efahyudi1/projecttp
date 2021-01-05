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
      <h1>Agenda</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">Menu Utama</div>
        <div class="breadcrumb-item">Agenda</div>
        <div class="breadcrumb-item">Tambah Agenda</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Tambah Agenda</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/agenda/aksi_simpan.php" method="POST" enctype="multipart/form-data">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control" name="id_admin">
                <option value="">Pilih Publisher</option>
                <?php
                  include "../lib/koneksi.php";
                  $QueryAdmin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                  while ($admin = mysqli_fetch_array($QueryAdmin)) {
                ?>
                <option value="<?= $admin['id_admin']; ?>"><?= $admin['username']; ?></option>
                <?php } ?>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['id_admin']) ? $error['id_admin'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="judul" placeholder="Judul">
            </div>
            <p class="text-red"><?php echo isset($error['judul']) ? $error['judul'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Pelaksanaan</label>
            <div class="col-sm-12 col-md-7">
              <input type="date" class="form-control" name="tanggal_pelaksanaan">
            </div>
            <p class="text-red"><?php echo isset($error['tanggal_pelaksanaan']) ? $error['tanggal_pelaksanaan'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi Pelaksanaan</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Pelaksanaan">
            </div>
            <p class="text-red"><?php echo isset($error['lokasi']) ? $error['lokasi'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Target</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="target" placeholder="Target">
            </div>
            <p class="text-red"><?php echo isset($error['target']) ? $error['target'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
            <div class="col-sm-12 col-md-7">
              <textarea style="height:250px" class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
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