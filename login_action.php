<?php
	include "lib/koneksi.php";

    $nik = $_POST['nik'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    if (!ctype_alnum($nik) or !ctype_alnum($tanggal_lahir)) {
    echo "Login Gagal,<a href=../> Kembali</a>";
    } else {
    $query = mysqli_query($koneksi, "SELECT * FROM tbl_penduduk WHERE nik = '$nik' AND tanggal_lahir = '$tanggal_lahir'");
    $login = mysqli_num_rows($query);
    $row = mysqli_fetch_array($query);

    if ($login > 0) {
        session_start();
        $_SESSION['nik'] = $row['nik'];
        $_SESSION['tanggal_lahir'] = $row['tanggal_lahir'];
        $_SESSION['nama'] = $row['nama'];
        header('location:index.php');
        // header('location:adminweb.php');
    } else {
        echo "Login Gagal, <a href=authentication-login.php>Kembali</a>";
    }
    }
    ?>