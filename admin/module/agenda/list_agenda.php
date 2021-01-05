      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12">
              <div class="section-header">
                <h1>Agenda</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active">Menu Utama</div>
                  <div class="breadcrumb-item">Agenda</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h4>Table Agenda</h4>
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
                        <th>Publisher</th>
                        <th>Judul</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Lokasi Pelaksanaan</th>
                        <th>Target</th>
                        <?php if ( $_SESSION['level'] == "Admin"){?>
                        <th>Action</th>
                        <?php } ?>
                      </tr>
                      <?php 
                      include "lib/config.php";
                      include "lib/koneksi.php";
                      $no=0;
                      $kueriAgenda = mysqli_query($koneksi, "SELECT * FROM tbl_agenda tag INNER JOIN tbl_admin ta ON tag . id_admin = ta . id_admin");
                      while ($agd=mysqli_fetch_array($kueriAgenda)) {
                      $no++;
                      ?>

                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $agd['username']; ?></td>
                        <td><?php echo $agd['judul']; ?></td>
                        <td><?php echo $agd['tanggal_pelaksanaan']; ?></td>
                        <td><?php echo $agd['lokasi']; ?></td>
                        <td><?php echo $agd['target']; ?></td>
                        <?php if ( $_SESSION['level'] == "Admin"){?>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="dashboard.php?module=detail_agenda&id_agenda=<?php echo $agd['id_agenda']; ?>"
                              class="btn btn-primary">
                              <i class="fas fa-info-circle"></i></a>
                            <a href="dashboard.php?module=edit_agenda&id_agenda=<?php echo $agd['id_agenda']; ?>"
                              class="btn btn-warning">
                              <i class="far fa-edit"></i></a>
                            <a href="module/agenda/aksi_hapus.php?id_agenda=<?php echo $agd['id_agenda']; ?>"
                              onClick="return confirm('Anda yakin ingin menghapus data ini')" class="btn btn-danger">
                              <i class="far fa-trash-alt"></i></a>
                          </div>
                        </td>
                      <?php } ?>
                      </tr>
                      <?php } ?>
                    </table>
                    <div class="card-footer text-left">
                      <?php 
                        if ( $_SESSION['level'] == "A"){?>
                      <a href="dashboard.php?module=tambah_agenda" class="btn btn-icon icon-left btn-primary"><i
                          class="fas fa-plus"></i> Tambah Agenda</a>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>