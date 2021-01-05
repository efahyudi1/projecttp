<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="section-header">
          <h1>Surat Kematian</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Menu Utama</div>
            <div class="breadcrumb-item">Pelayanan Surat</div>
            <div class="breadcrumb-item">Surat Kematian</div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Table Kematian</h4>
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
                  <th>Tanggal Lapor</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Tempat, Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Tanggal Meninggal</th>
                  <th>Sebab</th>
                  <th>Tempat Meninggal</th>
                  <?php if ( $_SESSION['level'] == "Admin"){?>
                  <th>Action</th>
                  <?php } ?>
                </tr>
                <?php 
                  include "lib/config.php";
                  include "lib/koneksi.php";
                  $no=0;
                  $kueriKematian = mysqli_query($koneksi, "SELECT * FROM tbl_kematian tk INNER JOIN tbl_penduduk tp ON tp.nik = tk.nik");
                  while ($kem=mysqli_fetch_array($kueriKematian)) {
                    $no++;
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $kem['tanggal_lapor']; ?></td>
                  <td><?php echo $kem['nama']; ?></td>
                  <td><?php echo $kem['jenis_kelamin']; ?></td>
                  <td><?php echo $kem['agama']; ?></td>
                  <td><?php echo $kem['tempat_lahir']; ?>, <?php echo $kem['tanggal_lahir']; ?></td>
                  <td><?php echo $kem['alamat']; ?></td>
                  <td><?php echo $kem['tanggal_kematian']; ?></td>
                  <td><?php echo $kem['sebab'];?></td>
                  <td><?php echo $kem['alamat_kematian'] ;?></td>
                  <?php if ( $_SESSION['level'] == "Admin"){?>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="module/kematian/surat.php?id_kematian=<?php echo $kem['id_kematian']; ?>"
                        class="btn btn-primary">
                        <i class="fas fa-print"></i></a>
                      <a href="dashboard.php?module=edit_kematian&id_kematian=<?php echo $kem['id_kematian']; ?>"
                        class="btn btn-warning">
                        <i class="far fa-edit"></i></a>
                      <a href="module/kematian/aksi_hapus.php?id_kematian=<?php echo $kem['id_kematian']; ?>"
                        onClick="return confirm('Anda yakin ingin menghapus data ini')" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i></a>
                    </div>
                  </td>
                  <?php } ?>
                  <?php } ?>
              </table>
              <div class="card-footer text-left">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  <i class="fas fa-print"></i> Laporan
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">Laporan sesuai tanggal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="module/kematian/laporan.php" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Awal</label>
            <input type="date" name="tanggalawal" class="form-control" id="input-ame" placeholder="" autofocus>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Akhir</label>
            <input type="date" name="tanggalakhir" class="form-control" id="input-ame" placeholder="" autofocus>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info">Lanjut ></button>
        </div>
      </form>
    </div>

  </div>
</div>
<!-- Modal -->