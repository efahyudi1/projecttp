<?php 
include "lib/config.php";
session_start();

if (!isset($_SESSION['username'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
} else {

include "template/header.php";
?>

      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img alt="image" src="../assets/img/logo.png" style = "width : 40px; height : 40px; margin-right : 10px;">
            <a href="index.html">Desa Blondo</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu Utama</li>
            <?php if ($_SESSION['level']=='Admin') { ?>
            <li class="active">
              <a class="nav-link" href="dashboard.php?module=home">
                <i class="fas fa-home"></i> <span>Beranda</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Kependudukan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dashboard.php?module=penduduk">Data Penduduk</a></li>
                <li><a class="nav-link" href="dashboard.php?module=statistik_penduduk">Statistik Penduduk</a></li>
              </ul>
            </li>
            <li>
              <a class="nav-link" href="dashboard.php?module=informasipublik">
                <i class="fas fa-home"></i> <span>Informasi Publik</span>
              </a>
            </li>
            <li>
              <a class="nav-link" href="dashboard.php?module=forum">
                <i class="fas fa-comments"></i> <span>Forum</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-mail-bulk"></i><span>Pelayanan Surat</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dashboard.php?module=kelahiran">Surat Kelahiran</a></li>
                <li><a class="nav-link" href="dashboard.php?module=kematian">Surat Kematian</a></li>
                <li><a class="nav-link" href="dashboard.php?module=keterangan">Surat Keterangan</a></li>
                <li><a class="nav-link" href="dashboard.php?module=pindah">Surat Pindah</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-line"></i><span>Statistik</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dashboard.php?module=statistik_kelahiran">Statistik Kelahiran</a></li>
                <li><a class="nav-link" href="dashboard.php?module=statistik_kematian">Statistik Kematian</a></li>
                <li><a class="nav-link" href="dashboard.php?module=statistik_keterangan">Statistik Keterangan</a></li>
                <li><a class="nav-link" href="dashboard.php?module=statistik_pindah">Statistik Pindah</a></li>
              </ul>
            </li>
            <li>
              <a class="nav-link" href="dashboard.php?module=agenda">
                <i class="fas fa-clipboard-list"></i> <span>Agenda dan Kegiatan</span>
              </a>
            </li>
            <li class="menu-header">Kelola</li>
            <li class="active">
              <a class="nav-link" href="dashboard.php?module=user">
                <i class="fas fa-home"></i> <span>Kelola User</span>
              </a>
            </li>

            <?php } else { ?>
            <li class="active">
              <a class="nav-link" href="dashboard.php?module=home">
                <i class="fas fa-home"></i> <span>Beranda</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Kependudukan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dashboard.php?module=penduduk">Data Penduduk</a></li>
                <li><a class="nav-link" href="module/kk/errors-404.html">Statistik Penduduk</a></li>
              </ul>
            </li>
            <li>
              <a class="nav-link" href="dashboard.php?module=forum">
                <i class="fas fa-comments"></i> <span>Forum</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-mail-bulk"></i><span>Pelayanan Surat</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dashboard.php?module=kelahiran">Surat Kelahiran</a></li>
                <li><a class="nav-link" href="dashboard.php?module=kematian">Surat Kematian</a></li>
                <li><a class="nav-link" href="dashboard.php?module=keterangan">Surat Keterangan</a></li>
                <li><a class="nav-link" href="dashboard.php?module=pindah">Surat Pindah</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-line"></i><span>Statistik</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="dashboard.php?module=statistik_kelahiran">Statistik Kelahiran</a></li>
                <li><a class="nav-link" href="dashboard.php?module=statistik_kematian">Statistik Kematian</a></li>
                <li><a class="nav-link" href="dashboard.php?module=statistik_keterangan">Statistik Keterangan</a></li>
                <li><a class="nav-link" href="dashboard.php?module=statistik_pindah">Statistik Pindah</a></li>
              </ul>
            </li>
            <li>
              <a class="nav-link" href="dashboard.php?module=agenda">
                <i class="fas fa-clipboard-list"></i> <span>Agenda dan Kegiatan</span>
              </a>
            </li>
            <?php } ?>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
        </aside>
      </div>


      <?php       
          if ($_GET['module']=='home') {
            include "module/home/home.php";

          } elseif($_GET['module']=='agenda') {
            include "module/agenda/list_agenda.php";
          } elseif($_GET['module']=='tambah_agenda') {
            include "module/agenda/form_tambah.php";
          } elseif($_GET['module']=='edit_agenda') {
            include "module/agenda/form_edit.php";
          } elseif($_GET['module']=='detail_agenda') {
            include "module/agenda/detail.php";

          } elseif($_GET['module']=='forum') {
            include "module/forum/list_forum.php";
          } elseif($_GET['module']=='tambah_forum') {
            include "module/forum/form_tambah.php";
          } elseif($_GET['module']=='edit_forum') {
            include "module/forum/form_edit.php";
          } elseif($_GET['module']=='detail_forum') {
            include "module/forum/detail.php";

          } elseif($_GET['module']=='informasipublik') {
            include "module/informasipublik/list_informasipublik.php";
          } elseif($_GET['module']=='tambah_informasipublik') {
            include "module/informasipublik/form_tambah.php";
          } elseif($_GET['module']=='edit_informasipublik') {
            include "module/informasipublik/form_edit.php";
          } elseif($_GET['module']=='detail_informasipublik') {
            include "module/informasipublik/detail.php";

          } elseif($_GET['module']=='kelahiran') {
            include "module/kelahiran/list_kelahiran.php";
          } elseif($_GET['module']=='edit_kelahiran') {
            include "module/kelahiran/form_edit.php";

          } elseif($_GET['module']=='kematian') {
            include "module/kematian/list_kematian.php";
          } elseif($_GET['module']=='edit_kematian') {
            include "module/kematian/form_edit.php";

          } elseif($_GET['module']=='keterangan') {
            include "module/keterangan/list_keterangan.php";
          } elseif($_GET['module']=='edit_forum') {
            include "module/keterangan/form_edit.php";

          } elseif($_GET['module']=='penduduk') {
            include "module/penduduk/list_penduduk.php";
          } elseif($_GET['module']=='tambah_penduduk') {
            include "module/penduduk/form_tambah.php";
          } elseif($_GET['module']=='edit_penduduk') {
            include "module/penduduk/form_edit.php";

          } elseif($_GET['module']=='pindah') {
            include "module/pindah/list_pindah.php";
          } elseif($_GET['module']=='edit_pindah') {
            include "module/pindah/form_edit.php";

          } elseif($_GET['module']=='statistik_kelahiran') {
            include "module/statistik/kelahiran.php";
          } elseif($_GET['module']=='statistik_kematian') {
            include "module/statistik/kematian.php";
          } elseif($_GET['module']=='statistik_keterangan') {
            include "module/statistik/keterangan.php";
          } elseif($_GET['module']=='statistik_pindah') {
            include "module/statistik/pindah.php";
          } elseif($_GET['module']=='statistik_penduduk') {
            include "module/statistik/penduduk.php";

          } elseif($_GET['module']=='user') {
            include "module/user/list_user.php";
          } elseif($_GET['module']=='tambah_user') {
            include "module/user/form_tambah.php";
          } elseif($_GET['module']=='edit_user') {
            include "module/user/form_edit.php";

          }else {
            include "module/home/home.php";
          }
          ?>




<?php include "template/footer.php"; ?>

<?php } ?>