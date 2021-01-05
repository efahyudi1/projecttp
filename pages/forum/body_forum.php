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
            <form action="pages/forum/aksi_simpan.php" method="POST" enctype="multipart/form-data">
                
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fas fa-venus-mars" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select">
                        <select class="form-control" name="nik">
                            <option>Nama Pelapor</option>
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
                    <input type="text" name="subjek" placeholder="Subject" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Subject'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="text" name="lokasi" placeholder="Lokasi" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Lokasi'" required class="single-input">
                </div>
                <div class="mt-10">
                    <input type="file" name="gambar" placeholder="Gambar" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Deskripsi'" required class="single-input">
                </div>
                <div class="mt-10">
                    <textarea type="text" name="deskripsi" placeholder="Deskripsi" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Deskripsi'" required class="single-input"></textarea>
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