<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="section-header">
          <h1>Data Penduduk</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Menu Utama</div>
            <div class="breadcrumb-item">Kependudukan</div>
            <div class="breadcrumb-item">Data Penduduk</div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Table Penduduk</h4>
            <div class="card-header-form">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Tempat, Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Pekerjaan</th>
                  <?php if ( $_SESSION['level'] == "Admin"){?>
                  <th>Action</th>
                  <?php } ?>
                </tr>
                <?php 
                  include "lib/config.php";
                  include "lib/koneksi.php";
                  $no=0;
                  $kueriPenduduk = mysqli_query($koneksi, "select * from tbl_penduduk");
                  while ($pen=mysqli_fetch_array($kueriPenduduk)) {
                    $no++;
                ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $pen['nik']; ?></td>
                  <td><?php echo $pen['nama']; ?></td>
                  <td><?php echo $pen['jenis_kelamin']; ?></td>
                  <td><?php echo $pen['agama']; ?></td>
                  <td><?php echo $pen['tempat_lahir']; ?>, <?php echo $pen['tanggal_lahir']; ?></td> 
                  <td><?php echo $pen['alamat']; ?></td>
                  <td><?php echo $pen['status']; ?></td>
                  <td><?php echo $pen['pekerjaan']; ?></td>
                  <?php if ( $_SESSION['level'] == "Admin"){?>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="dashboard.php?module=edit_penduduk&nik=<?php echo $pen['nik']; ?>" class = "btn btn-warning">
                        <i class="far fa-edit"></i></a>
                        <a href="module/penduduk/aksi_hapus.php?nik=<?php echo $pen['nik']; ?>" onClick = "return confirm('Anda yakin ingin menghapus data ini')" class = "btn btn-danger">
                      <i class="far fa-trash-alt"></i></a> 
                    </div>
                  </td>
                  <?php } ?>
                </tr>
                <?php } ?>
              </table>
              <div class="card-footer text-left">
                <?php 
                  if ( $_SESSION['level'] == "Admin"){?>
                  <a href="dashboard.php?module=tambah_penduduk" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah Penduduk</a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

