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
      <h1>Kelola User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">Menu Utama</div>
        <div class="breadcrumb-item">Kelola User</div>
        <div class="breadcrumb-item">Tambah User</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Tambah User</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/user/aksi_simpan.php" method="POST"
          enctype="multipart/form-data">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <p class="text-red"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            <p class="text-red"><?php echo isset($error['password']) ? $error['password'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Level</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control" name="level">
                <option>--Pilih Level --</option>
                <option>Admin</option>
                <option>Kepala Desa</option>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['level']) ? $error['level'] : ''; ?></p>
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