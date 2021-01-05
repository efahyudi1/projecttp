<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_forum = $_GET['id_forum'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_forum WHERE id_forum = '$id_forum'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '../../dashboard.php?module=forum';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '../../dashboard.php?module=forum';
        </script>";
    }
}
