<?php 
include "lib/config.php";
include "template/header.php";
if (!isset($_SESSION['nik']) AND !isset($_SESSION['tanggal_lahir'])) {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=login.php><b>LOGIN</b></a></center>";
}else {
?>

<?php 
    include "template/nav.php";
    include "pages/forum/body_forum.php";
    include "template/footer.php";
?>
<?php } ?>