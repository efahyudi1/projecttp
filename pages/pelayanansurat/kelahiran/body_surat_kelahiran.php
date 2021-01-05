<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Pelayanan Surat</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Surat Kelahiran</h2>
                        <span>Mohon Isi Sesuai Data Diri Anda</span>
                    </div>
                </div>
            </div>

            <h3 class="mb-30">Form Isi Data Diri</h3>
            <form action="pages/pelayanansurat/kelahiran/aksi_simpan.php" method="POST" enctype="multipart/form-data">
                <div class="mt-10">
                    <input type="text" name="nama_bayi" placeholder="Nama Bayi" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Nama Bayi'" required class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fas fa-venus-mars" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                        <select class="form-control" name="nik">
                            <option>Nama Orang Tua</option>
                            <?php
                                          include "lib/koneksi.php";
                                          $QueryPenduduk = mysqli_query($koneksi, "SELECT * FROM tbl_penduduk");
                                          while ($pen = mysqli_fetch_array($QueryPenduduk)) {
                                        ?>
                            <option value="<?= $pen['nik']; ?>"><?= $pen['nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="mt-10">
                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Tempat Lahir'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Tanggal Lahir'" required class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                    <input type="text" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Alamat'" required class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fas fa-venus-mars" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                        <select class="form-control" name="jenis_kelamin">
                            <option value="1">Jenis Kelamin</option>
                            <option value="1">Laki-laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="mt-10">
                    <input type="text" name="anak_ke" placeholder="Anak ke -" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Anak ke -'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="nama_rumahsakit" placeholder="Nama Rumah Sakit"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Rumah Sakit'" required
                        class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fas fa-venus-mars" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                        <select class="form-control" name="id_admin">
                            <option>Nama Perangkat</option>
                            <?php
                                          include "lib/koneksi.php";
                                          $QueryAdmin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                                          while ($adm = mysqli_fetch_array($QueryAdmin)) {
                                        ?>
                            <option value="<?= $adm['id_admin']; ?>"><?= $adm['username']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="button-group-area mt-40">
                    <center>
                        <button class="genric-btn primary circle">Submit</button>
                        <button class="genric-btn default circle">Reset</button>
                    </center>
                </div>
            </form>

            <!-- More Btn -->
            <!-- Section Button -->
        </div>
    </div>
</main>