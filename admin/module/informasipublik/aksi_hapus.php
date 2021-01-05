<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_informasi_publik = $_GET['id_informasi_publik'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM tbl_informasi_publik WHERE id_informasi_publik = '$id_informasi_publik'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location = '../../dashboard.php?module=informasipublik';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location = '../../dashboard.php?module=informasipublik';
        </script>";
    }
}
