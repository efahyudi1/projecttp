 <main>
     <!-- slider Area Start-->
     <div class="slider-area ">
         <!-- Mobile Menu -->
         <div class="slider-active">
             <div class="single-slider slider-height d-flex align-items-center"
                 data-background="assets/img/hero/h1_hero.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-6 col-lg-9 col-md-10">
                             <div class="hero__caption">
                                 <h1>Selamat Datang di Pelayanan Desa Blondo</h1>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- slider Area End-->

     <!-- Blog Area Start -->
     <div class="home-blog-area" style=" padding-top : 30px">
         <div class="container">
             <!-- Section Tittle -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-tittle text-center">
                         <span>Informasi Publik</span>
                         <h2>Berita Terbaru</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <?php 
                    include "lib/config.php";
                    include "lib/koneksi.php";
            $pagiantion = (isset($_GET['pagiantion']))? (int) $_GET['pagiantion'] : 1;

            // Jumlah data per halaman
            $limit = 2;

            $limitStart = ($pagiantion - 1) * $limit;

            $no = $limitStart + 1;
                    $kueriInformasi = mysqli_query($koneksi, "SELECT * FROM tbl_informasi_publik tip INNER JOIN tbl_admin ta ON tip.id_admin = ta.id_admin LIMIT $limitStart, $limit");
                    while ($inf=mysqli_fetch_array($kueriInformasi)) {
                        $id_informasi_publik = $inf['id_informasi_publik'];
                        $username= $inf['username'];
                        $tanggal_publish = $inf['tanggal_publish'];
                        $judul = $inf['judul'];
                        $subject = $inf['subject'];
                        $deskripsi = $inf['deskripsi'];
                ?>
                 <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="home-blog-single mb-30">
                         <div class="blog-img-cap">
                             <div class="blog-img">
                                 <img src="admin/assets/upload/<?= $inf['gambar']; ?>" alt="">
                                 <!-- Blog date -->
                                 <div class="blog-date text-center">
                                     <span><?php echo $subject ?></span>
                                 </div>
                             </div>
                             <div class="blog-cap">
                                 <p>| <?php echo $tanggal_publish; ?></p>
                                 <h3><a href="detail_informasi.php?id_informasi_publik=<?= $id_informasi_publik ?>"><?php echo $judul ?></a></h3>
                                 <a href="detail_informasi.php?id_informasi_publik=<?= $id_informasi_publik ?>" class="more-btn">Read more »</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php } ?>
             </div>

             <div class="card">
                 <div class="card-body">
                     <div class="buttons">
                         <nav aria-label="Page navigation example" >
                             <ul class="pagination" style="place-content: center">
                                 <?php
                    // Jika page = 1, maka LinkPrev disable
                    if($pagiantion == 1) { ?>
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" tabindex="-1">Previous</a>
                                 </li>
                                 <?php } else { // link previous pagiantion
                    $LinkPrev = ($pagiantion > 1)? $pagiantion - 1 : 1; ?>
                                 <li class="page-item active">
                                     <a class="page-link"
                                         href="index.php?pagiantion=<?php echo $LinkPrev;?>">Previous</a>
                                 </li>
                                 <?php } ?>

                                 <?php
                    $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_informasi_publik");

                    //Hitung semua jumlah data yang berada pada tabel Sisawa
                    $JumlahData = mysqli_num_rows($SqlQuery);

                    // Hitung jumlah halaman yang tersedia
                    $jumlahPage = ceil($JumlahData / $limit);

                    // Jumlah link number
                    $jumlahNumber = 1;

                    // Untuk awal link number
                    $startNumber = ($pagiantion > $jumlahNumber) ? $pagiantion - $jumlahNumber : 1;

                    // Untuk akhir link number
                    $endNumber = ($pagiantion < ($jumlahPage - $jumlahNumber)) ? $pagiantion + $jumlahNumber : $jumlahPage;

                    for ($i = $startNumber; $i <= $endNumber; $i++) {
                    $linkActive = ($pagiantion == $i) ? ' class="page-item active"' : ''; ?>
                                 <li <?php echo $linkActive; ?>>
                                     <a class="page-link"
                                         href="index.php?pagiantion=<?php echo $i; ?>"><?php echo $i; ?></a>
                                 </li>
                                 <?php } ?>

                                 <!-- link Next Page -->
                                 <?php
                    if($pagiantion == $jumlahPage) { ?>
                                 <li class="page-item disabled">
                                     <a class="page-link" href="#" tabindex="-1">Next</a>
                                 </li>
                                 <?php
                    } else {
                        $linkNext = ($pagiantion < $jumlahPage)? $pagiantion + 1 : $jumlahPage; ?>
                                 <li class="page-item active">
                                     <a class="page-link" href="index.php?pagiantion=<?php echo $linkNext; ?>">Next</a>
                                 </li>
                                 <?php }?>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     <!-- Blog Area End -->

     <!-- Langkah Membuat Surat-->
     <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
         <div class="container">
             <!-- Section Tittle -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-tittle white-text text-center">
                         <span>Pelayanan Surat</span>
                         <h2> Langkah Membuat Surat</h2>
                     </div>
                 </div>
             </div>
             <!-- Apply Process Caption -->
             <div class="row" style="margin-top: 50px">
                 <div class="col-lg-4 col-md-6">
                     <div class="single-process text-center mb-30" style="width : 370px; height : 320px;">
                         <div class="process-ion">
                             <span class="flaticon-search"></span>
                         </div>
                         <div class="process-cap">
                             <h5>1. Login</h5>
                             <p>Silahkan login terlebih dahulu untuk menggunakan fitur pembuatan surat.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="single-process text-center mb-30" style="width : 370px; height : 320px;">
                         <div class="process-ion">
                             <span class="flaticon-curriculum-vitae"></span>
                         </div>
                         <div class="process-cap">
                             <h5>2. Pilih Surat</h5>
                             <p>Pilih surat yang akan dibuat, dengan masuk ke pelayanan masyarakat kemudian pelayanan
                                 surat.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="single-process text-center mb-30" style="width : 370px; height : 320px;">
                         <div class="process-ion">
                             <span class="flaticon-tour"></span>
                         </div>
                         <div class="process-cap">
                             <h5>3. Masukkan Identitas Diri</h5>
                             <p>Masukkan data diri anda, sesuai dengan surat yang akan dibuat.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Langkah Membuat Surat End-->



     <!-- Pelayanan Surat Start -->
     <div class="our-services section-pad-t30">
         <div class="container">
             <!-- Section Tittle -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-tittle text-center">
                         <h2>Pelayanan Surat</h2>
                         <span>Silahkan Pilih Salah Satu Surat</span>
                     </div>
                 </div>
             </div>
             <div class="row d-flex justify-contnet-center">
                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="single-services text-center mb-30">
                         <div class="services-ion">
                             <img src="assets/img/logosurat/baby.png" width="75px" height="75px"
                                 style="margin-bottom: 10px">
                         </div>
                         <div class="services-cap">
                             <h5><a href="form.php?jenis_surat=1">Surat Kelahiran</a></h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="single-services text-center mb-30">
                         <div class="services-ion">
                             <img src="assets/img/logosurat/rip.png" width="75px" height="75px"
                                 style="margin-bottom: 10px">
                         </div>
                         <div class="services-cap">
                             <h5><a href="form.php?jenis_surat=2">Surat Kematian</a></h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="single-services text-center mb-30">
                         <div class="services-ion">
                             <img src="assets/img/logosurat/keterangan.png" width="75px" height="75px"
                                 style="margin-bottom: 10px">
                         </div>
                         <div class="services-cap">
                             <h5><a href="form.php?jenis_surat=3">Surat Keterangan</a></h5>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="single-services text-center mb-30">
                         <div class="services-ion">
                             <img src="assets/img/logosurat/pindah.png" width="75px" height="75px"
                                 style="margin-bottom: 10px">
                         </div>
                         <div class="services-cap">
                             <h5><a href="form.php?jenis_surat=4">Surat Pindah</a></h5>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- More Btn -->
         </div>
     </div>
     <!-- Pelayanan Surat End -->

     <!-- Forum Start -->
     <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="assets/img/gallery/cv_bg.jpg">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-10">
                     <div class="cv-caption text-center">
                         <p class="pera1">Forum Masyarakat</p>
                         <p class="pera2"> Apakah anda punya keluhan atau masukan untuk memajukan Desa Blondo</p>
                         <a href="forum.php" class="border-btn2 border-btn4">Silahkan </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Forum End-->

     <!-- Testimonial Start -->
     <div class="testimonial-area testimonial-padding">
         <div class="container">
             <!-- Testimonial contents -->
             <div class="row d-flex justify-content-center">
                 <div class="col-xl-8 col-lg-8 col-md-10">
                     <div class="h1-testimonial-active dot-style">
                         <!-- Single Testimonial -->
                         <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                        <span>Ir. Soekarno</span>
                                        <p>Presiden ke-1 Indonesia</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“Jika kita mempunyai keinginan yang kuat dari dalam hati,<br>
                                    maka seluruh alam semesta akan bahu membahu mewujudkannya”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                        <span>Susilo Bambang Yudhoyono</span>
                                        <p>Presiden ke-6 Indonesia</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“Kita semua berada di sini karena kita yakin toleransi merupakan suatu keharusan bagi pembangunan manusia dan sosial.”</p>
                                </div>
                            </div>
                        </div>
                         <!-- Single Testimonial -->
                         <div class="single-testimonial text-center">
                             <!-- Testimonial Content -->
                             <div class="testimonial-caption ">
                                 <!-- founder -->
                                 <div class="testimonial-founder  ">
                                     <div class="founder-img mb-30">
                                         <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                         <span>Margaret Lawson</span>
                                         <p>Creative Director</p>
                                     </div>
                                 </div>
                                 <div class="testimonial-top-cap">
                                     <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                         responsibility! So start caring for your body and it will care for you. Eat
                                         clean it will care for you and workout hard.”</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Testimonial End -->


 </main>