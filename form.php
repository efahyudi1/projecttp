<?php
include "template/header.php";
$jenis_surat = $_GET['jenis_surat']; 
if (isset($_SESSION['nik'])) {

    if ($jenis_surat=='1'){
        include 'surat_kelahiran.php';
    } else if ($jenis_surat=='2'){
        include 'surat_kematian.php';
    } else if ($jenis_surat=='3'){
        include 'surat_keterangan.php';
    } else if ($jenis_surat=='4'){
        include 'surat_pindah.php';
    } else {
        include 'pelayanan_surat.php';
    }
} else {
  echo "<center>Untuk mengakses modul, Anda harus login dulu <br>";
  echo "<a href=login.php><b>LOGIN</b></a></center>";
}
?>