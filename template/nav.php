<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo.png" alt="" width="40px"></a>
                                <span style="font-size: 30px; margin-left : 10px"><b>Desa Blondo</b></span>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="#">Informasi Publik</a>
                                                <ul class="submenu">
                                                    <li><a href="informasi.php">Berita</a></li>
                                                    <li><a href="agenda.php">Agenda</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pelayanan Masyarakat</a>
                                                <ul class="submenu">
                                                    <li><a href="pelayanan_surat.php">Pelayanan Surat</a></li>
                                                    <li><a href="forum.php">Forum</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <?php if (isset($_SESSION['nik'])) { ?>
                                    <a href="logout.php" class="btn head-btn2">Logout</a>
                                    <?php } else { ?>
                                    <a href="login.php" class="btn head-btn2">Login</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>