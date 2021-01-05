      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12">
              <div class="section-header">
                <h1>Kelola User</h1>
                <div class="section-header-breadcrumb">
                  <div class="breadcrumb-item active">Menu Utama</div>
                  <div class="breadcrumb-item">Kelola User</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h4>Table User</h4>
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
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                      <?php 
                      include "lib/config.php";
                      include "lib/koneksi.php";
                      $no=0;
                      $kueriAgenda = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                      while ($usr=mysqli_fetch_array($kueriAgenda)) {
                      $no++;
                      ?>

                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $usr['username']; ?></td>
                        <td><?php echo $usr['password']; ?></td>
                        <td><?php echo $usr['level']; ?></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="dashboard.php?module=edit_user&id_admin=<?php echo $usr['id_admin']; ?>"
                              class="btn btn-warning">
                              <i class="far fa-edit"></i></a>
                            <a href="module/user/aksi_hapus.php?id_admin=<?php echo $usr['id_admin']; ?>"
                              onClick="return confirm('Anda yakin ingin menghapus data ini')" class="btn btn-danger">
                              <i class="far fa-trash-alt"></i></a>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    </table>
                    <div class="card-footer text-left">
                      <a href="dashboard.php?module=tambah_user" class="btn btn-icon icon-left btn-primary"><i
                          class="fas fa-plus"></i> Tambah Agenda</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>