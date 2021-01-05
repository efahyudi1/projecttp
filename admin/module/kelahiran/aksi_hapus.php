<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_kelahiran = $_GET['id_kelahiran'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kelahiran WHERE id_kelahiran = '$id_kelahiran'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '../../dashboard.php?module=kelahiran';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '../../dashboard.php?module=kelahiran';
        </script>";
    }
}
