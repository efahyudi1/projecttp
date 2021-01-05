<?php
include "lib/config.php";
include "lib/koneksi.php";

$id_kelahiran = $_GET['id_kelahiran'];
$QueryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kelahiran tk INNER JOIN tbl_penduduk tp ON tp.nik = tk.nik WHERE id_kelahiran = '$id_kelahiran'");
$row = mysqli_fetch_array($QueryEdit);
$id_admin = $row['id_admin'];
$nama = $row['nama'];
$nama_bayi = $row['nama_bayi'];
$tempat_lahir = $row['tempat_lahir'];
$tanggal_lahir = $row['tanggal_lahir'];
$jenis_kelamin = $row['jenis_kelamin'];
$anak_ke = $row['anak_ke'];
$tanggal_lapor = $row['tanggal_lapor'];
$nama_rumahsakit = $row['nama_rumahsakit'];
?>


<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Surat Kelahiran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">Menu Utama</div>
        <div class="breadcrumb-item">Pelayanan Surat</div>
        <div class="breadcrumb-item">Surat Kelahiran</div>
        <div class="breadcrumb-item">Edit Data Kelahiran</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <h4>Form Edit Kelahiran</h4>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="module/kelahiran/aksi_edit.php" method="POST"
          enctype="multipart/form-data">
          <input type="hidden" class="form-control" name="id_kelahiran" value="<?= $id_kelahiran; ?>">
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
                <option value="<?= $admin['id_admin']; ?>" <?php echo $select;?>><?= $admin['username']; ?></option>
                <?php } ?>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['admin']) ? $error['admin'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
            <div class="col-sm-12 col-md-7">
              <select class="form-control" name="nik">
                <option value="">Nama Orang Tua</option>
                <?php
                    include "../lib/koneksi.php";
                    $QueryPenduduk = mysqli_query($koneksi, "SELECT * FROM tbl_penduduk");
                    while ($pen = mysqli_fetch_array($QueryPenduduk)) {
                      if ($id_penduduk==$pen['id_penduduk']) {
                        $select="selected";
                      } else {
                        $select="";
                      }
                  ?>
                <option value="<?= $pen['nik']; ?>" <?php echo $select;?>><?= $pen['nama']; ?></option>
                <?php } ?>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['admin']) ? $error['admin'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Bayi</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_bayi" value="<?= $nama_bayi; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['nama_bayi']) ? $error['nama_bayi'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="tempat_lahir" value="<?= $tempat_lahir; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['tempat_lahir']) ? $error['tempat_lahir'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
            <div class="col-sm-12 col-md-7">
              <input type="date" class="form-control" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['tanggal_lahir']) ? $error['tanggal_lahir'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
            <div class="col-sm-12 col-md-7">
              <select type="text" class="form-control" name="jenis_kelamin" value="<?= $jenis_kelamin; ?>">
                <option><?= $jenis_kelamin; ?></option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </div>
            <p class="text-red"><?php echo isset($error['jenis_kelamin']) ? $error['jenis_kelamin'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Anak ke</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="anak_ke" value="<?= $anak_ke; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['anak_ke']) ? $error['anak_ke'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lapor</label>
            <div class="col-sm-12 col-md-7">
              <input type="date" class="form-control" name="tanggal_lapor" value="<?= $tanggal_lapor; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['tanggal_lapor']) ? $error['tanggal_lapor'] : ''; ?></p>
          </div>
          <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Rumah Sakit</label>
            <div class="col-sm-12 col-md-7">
              <input type="text" class="form-control" name="nama_rumahsakit" value="<?= $nama_rumahsakit; ?>">
            </div>
            <p class="text-red"><?php echo isset($error['nama_rumahsakit']) ? $error['nama_rumahsakit'] : ''; ?></p>
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
  </section>
</div>