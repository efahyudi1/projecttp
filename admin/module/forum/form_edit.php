<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_forum = $_GET['id_forum'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_forum WHERE id_forum = '$id_forum'");
$row = mysqli_fetch_array($QueryEdit);
$nik = $row['nik'];
$subjek = $row['subjek'];
$tanggal_lapor = $row['tanggal_lapor'];
$lokasi = $row['lokasi'];
$deskripsi = $row['deskripsi'];
?>


<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Forum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Menu Utama</div>
        <div class="breadcrumb-item">Forum</div>
        <div class="breadcrumb-item">Edit Forum</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Edit Forum</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/forum/aksi_edit.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="id_forum" value="<?= $id_forum; ?>">
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Pelapor</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control" name="nik">
                <option value="">Pilih Pelapor</option>
                <?php
                  include "../lib/koneksi.php";
                  $QueryPenduduk = mysqli_query($koneksi, "SELECT * FROM tbl_penduduk");
                  while ($penduduk = mysqli_fetch_array($QueryPenduduk)) {
                    if ($nik==$penduduk['nik']) {
                      $select="selected";
                    } else {
                      $select="";
                    }
                ?>
                <option value="<?= $penduduk['nik']; ?>"<?php echo $select;?>><?= $penduduk['nama']; ?></option>
                <?php } ?>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['nama']) ? $error['nama'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subject</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="subjek" value="<?= $subjek; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['judul']) ? $error['judul'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lapor</label>
            <div class="col-sm-12 col-md-7">
              <input type="date" class="form-control" name="tanggal_lapor" value="<?= $tanggal_lapor; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['tanggal_lapor']) ? $error['tanggal_lapor'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="lokasi" value="<?= $lokasi; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['judul']) ? $error['judul'] : ''; ?></p>
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
              <textarea style="height:250px" class="form-control" name="deskripsi"> <?php echo $deskripsi;?></textarea>
            </div>
            <p class="text-red"><?php echo isset($error['deskripsi']) ? $error['deskripsi'] : ''; ?></p>
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
