<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_agenda = $_POST['id_agenda'];
    $id_admin = $_POST['id_admin'];
    $judul = $_POST['judul'];
    $tanggal_pelaksanaan = $_POST['tanggal_pelaksanaan'];
    $target = $_POST['target'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];

    $QueryEdit = mysqli_query($koneksi, " UPDATE tbl_agenda SET
    id_admin = '$id_admin',
    judul = '$judul',
    tanggal_pelaksanaan = '$tanggal_pelaksanaan',
    target = '$target',
    lokasi = '$lokasi',
    deskripsi = '$deskripsi'
    WHERE id_agenda = '$id_agenda'");
    if ($QueryEdit) {
        echo "
        <script>
            alert('Data berhasil dirubah');
            window.location ='../../dashboard.php?module=agenda';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dirubah');
            window.location = '../../dashboard.php?module=edit_agenda&id_agenda='+'$id_agenda';
        </script>";
    }
            
}