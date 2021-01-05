<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="section-header">
          <h1>Informasi Publik</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Menu Utama</div>
            <div class="breadcrumb-item">Informasi Publik</div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4>Table Informasi Publik</h4>
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
                  <th>Tanggal Publish</th>
                  <th>Publisher</th>
                  <th>Judul</th>
                  <th>Subject</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
                <?php 
                  include "lib/config.php";
                  include "lib/koneksi.php";
                  $no=0;
                  $kueriInformasi = mysqli_query($koneksi, "SELECT * FROM tbl_informasi_publik tip INNER JOIN tbl_admin ta ON tip.id_admin = ta.id_admin");
                  while ($inf=mysqli_fetch_array($kueriInformasi)) {
                    $id_informasi_publik=$inf['id_informasi_publik']; 
                    $no++;
                ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $inf['tanggal_publish']; ?></td>
                  <td><?php echo $inf['username']; ?></td>
                  <td><?php echo $inf['judul']; ?></td>
                  <td><?php echo $inf['subject']; ?></td>
                  <td><img src="assets/upload/<?= $inf['gambar']; ?>" alt="<?= $inf['id_informasi_publik']; ?>" height="80" width="120"></td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="dashboard.php?module=detail_informasipublik&id_informasi_publik=<?php echo $inf['id_informasi_publik']; ?>" class="btn btn-primary">
                        <i class="fas fa-info-circle"></i></a>
                        <a href="dashboard.php?module=edit_informasipublik&id_informasi_publik=<?php echo $inf['id_informasi_publik']; ?>" class = "btn btn-warning">
                          <i class="far fa-edit"></i></a>
                          <a href="module/informasipublik/aksi_hapus.php?id_informasi_publik=<?php echo $inf['id_informasi_publik']; ?>"onClick = "return confirm('Anda yakin ingin menghapus data ini')" class = "btn btn-danger">
                            <i class="far fa-trash-alt"></i></a> 
                    </div>
                  </td>
                <?php } ?>
              </table>
              <div class="card-footer text-left">
                <a href="dashboard.php?module=tambah_informasipublik" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah Informasi Publik</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
