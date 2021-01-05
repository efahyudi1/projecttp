<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_admin = $_GET['id_admin'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id_admin = '$id_admin'");
$row = mysqli_fetch_array($QueryEdit);
$username = $row['username'];
$password = $row['password'];
$level = $row['level'];
?>


<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">Menu Utama</div>
        <div class="breadcrumb-item">Kelola User</div>
        <div class="breadcrumb-item">Edit User</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Edit User</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/user/aksi_edit.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="id_admin" value="<?= $id_admin; ?>">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="username" value="<?= $username?>">
            </div>
            <p class="text-red"><?php echo isset($error['username']) ? $error['username'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="password" value="<?php echo $password ?>">
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