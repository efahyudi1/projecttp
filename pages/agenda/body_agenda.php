<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Agenda</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!--================Blog Area =================-->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <!-- Left content -->

            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        <!-- Count of Job list Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count-job mb-35">
                                    <span>List Agenda</span>
                                    <!-- Select job items start -->
                                    <div class="select-job-items">
                                        <span>Sort by</span>
                                        <select name="select">
                                            <option value="">None</option>
                                            <option value="">job list</option>
                                            <option value="">job list</option>
                                            <option value="">job list</option>
                                        </select>
                                    </div>
                                    <!--  Select job items End-->
                                </div>
                            </div>
                        </div>
                        <!-- Count of Job list End -->
                        <!-- single-job-content -->
                        <?php 
                            include "lib/config.php";
                            include "lib/koneksi.php";
                            $kueriAgenda = mysqli_query($koneksi, "SELECT * FROM tbl_agenda tag INNER JOIN tbl_admin ta ON tag.id_admin = ta.id_admin");
                            while ($agd=mysqli_fetch_array($kueriAgenda)) {
                                $id_agenda = $agd['id_agenda'];
                                $username= $agd['username'];
                                $tanggal_pelaksanaan = $agd['tanggal_pelaksanaan'];
                                $judul = $agd['judul'];
                                $target = $agd['target'];
                                $lokasi = $agd['lokasi'];
                                $deskripsi = $agd['deskripsi'];
                        ?>
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/icon/agenda.png" alt="" style ="width:60px;height:60px"></a>
                                </div>
                                <div class="job-tittle job-tittle2">
                                    <a href="#">
                                        <h4><?= $judul; ?></h4>
                                    </a>
                                    <ul>
                                        <li><i class="fas fa-user"></i><?= $target; ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?= $lokasi; ?></li>
                                        <li><i class="far fa-calendar-alt"></i><?= $tanggal_pelaksanaan; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link items-link2 f-right">
                                <a href="agenda_details.php?id_agenda=<?= $agd['id_agenda'] ?>">Details</a>
                                <span><?= $username; ?></span>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!--================Blog Area =================-->