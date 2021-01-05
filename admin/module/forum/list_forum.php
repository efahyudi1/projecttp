      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12">
              <div class="section-header">
                <h1>Forum</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item">Menu Utama</div>
                  <div class="breadcrumb-item">Forum</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h4>Table Forum</h4>
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
                        <th>Nama Pelapor</th>
                        <th>Subject</th>
                        <th>Tanggal Lapor</th>
                        <th>Lokasi</th>
                        <th>Gambar</th>
                        <?php if ( $_SESSION['level'] == "Admin"){?>
                        <th>Action</th>
                        <?php } ?>
                      </tr>
                      <?php 
                      include "lib/config.php";
                      include "lib/koneksi.php";
                      $no=0;
                      $kueriForum = mysqli_query($koneksi, "SELECT * FROM tbl_forum tf INNER JOIN tbl_penduduk tp ON tf.nik = tp.nik");
                      while ($for=mysqli_fetch_array($kueriForum)) {
                        $no++;
                      ?>

                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $for['nama']; ?></td>
                        <td><?php echo $for['subjek']; ?></td>
                        <td><?php echo $for['tanggal_lapor']; ?></td>
                        <td><?php echo $for['lokasi']; ?></td>
                        <td><img src="../admin/assets/upload/<?= $for['gambar']; ?>" alt="<?= $for['id_forum']; ?>" height="80" width="120"></td>
                        <?php if ( $_SESSION['level'] == "Admin"){?>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="dashboard.php?module=edit_forum&id_forum=<?php echo $for['id_forum']; ?>" class = "btn btn-primary">
                              <i class="fas fa-info-circle"></i></a> 
                            <a href="dashboard.php?module=edit_forum&id_forum=<?php echo $for['id_forum']; ?>" class = "btn btn-warning">
                              <i class="far fa-edit"></i></a> 
                            <a href="module/forum/aksi_hapus.php?id_forum=<?php echo $for['id_forum']; ?>" onClick = "return confirm('Anda yakin ingin menghapus data ini')" class = "btn btn-danger">
                              <i class="far fa-trash-alt"></i></a> 
                          </div>
                        </td>
                        <?php } ?>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
