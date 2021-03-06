<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_informasi_publik = $_GET['id_informasi_publik'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_informasi_publik WHERE id_informasi_publik = '$id_informasi_publik'");
$row = mysqli_fetch_array($QueryEdit);
$id_informasi_publik = $row['id_informasi_publik'];
$id_admin = $row['id_admin'];
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
        <div class="breadcrumb-item">Edit Informasi Publik</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Edit Informasi Publik</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/informasipublik/aksi_edit.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="id_informasi_publik" value="<?= $id_informasi_publik; ?>">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Publish</label>
            <div class="col-sm-12 col-md-7">
              <input type="date" class="form-control" name="tanggal_publish" value="<?= $tanggal_publish; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['tanggal_publish']) ? $error['tanggal_publish'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control" name="id_admin">
                <option value="">Pilih Publisher</option>
                  <?php
                    include "../lib/koneksi.php";
                    $QueryAdmin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                    while ($admin = mysqli_fetch_array($QueryAdmin)) {
                      if ($id_admin==$admin['id_admin']) {
                        $select="selected";
                      } else {
                        $select="";
                      }
                  ?>
                  <option value="<?= $admin['id_admin']; ?>"<?php echo $select;?>><?= $admin['username']; ?></option>
                  <?php } ?>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['admin']) ? $error['admin'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="judul" value="<?= $judul; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['judul']) ? $error['judul'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="subject" value="<?= $subject; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['subject']) ? $error['subject'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
            <div class="col-sm-12 col-md-7">
              <input type="file" name="gambar" placeholder="Gambar" value="<?= $row['gambar']; ?>">
              <!-- <img src="assets/upload/<?= $row['gambar']; ?>" alt="<?= $row['id_informasi_publik']; ?>" height="80" width="120"> -->
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
            <div class="col-sm-12 col-md-7">
              <textarea style="height:250px" class="form-control" name="deskripsi"><?php echo $deskripsi;?></textarea>
            </div>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
              <button class="btn btn-primary">Publish</button>
              <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
          </div>
        </form>
      </div> 
    </div>
  </section>
</div>
