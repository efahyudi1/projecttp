<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_keterangan = $_GET['id_keterangan'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_keterangan WHERE id_keterangan = '$id_keterangan'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '../../dashboard.php?module=keterangan';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '../../dashboard.php?module=keterangan';
        </script>";
    }
}
