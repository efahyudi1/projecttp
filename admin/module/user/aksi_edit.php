<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_admin =$_POST['id_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $QueryEdit = mysqli_query($koneksi, " UPDATE tbl_admin SET
    username = '$username',
    password = '$password',
    level = '$level'
    WHERE id_admin = '$id_admin'");
    if ($QueryEdit) {
        echo "
        <script>
            alert('Data berhasil dirubah');
            window.location ='../../dashboard.php?module=user';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dirubah');
            window.location = '../../dashboard.php?module=edit_user&id_admin='+'$id_admin';
        </script>";
    }
            
}