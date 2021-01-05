<?php
include "template/header.php";
include "template/nav.php";
?>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Detail Agenda</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                        <?php 
                        include "lib/config.php";
                        include "lib/koneksi.php";
                        $id_agenda = $_GET["id_agenda"];
                        $kueriAgenda = mysqli_query($koneksi, "SELECT * FROM tbl_agenda tag INNER JOIN tbl_admin ta ON tag.id_admin = ta.id_admin WHERE id_agenda = $id_agenda");
                        $agd=mysqli_fetch_array($kueriAgenda);
                                $id_agenda = $agd['id_agenda'];
                                $username= $agd['username'];
                                $tanggal_pelaksanaan = $agd['tanggal_pelaksanaan'];
                                $judul = $agd['judul'];
                                $target = $agd['target'];
                                $lokasi = $agd['lokasi'];
                                $deskripsi = $agd['deskripsi'];
                        ?>
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="assets/img/icon/agenda.png" alt="" style ="width:60px;height:60px"></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?= $judul; ?></h4>
                                    </a>
                                    <ul>
                                        <li><i class="fas fa-user"></i><?= $username; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Description</h4>
                                </div>
                                <p style="text-align:justify;"><?= $deskripsi; ?></p>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Detail Agenda</h4>
                           </div>
                          <ul>
                              <li>Tanggal Publish : <span>12 Aug 2019</span></li>
                              <li>Lokasi : <span><?= $lokasi; ?></span></li>
                              <li>Tanggal Pelaksanaan : <span><?= $tanggal_pelaksanaan; ?></span></li>
                              <li>Ditujukan oleh : <span><?= $target; ?></span></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>

    <?php
      include "template/footer.php";
    ?>