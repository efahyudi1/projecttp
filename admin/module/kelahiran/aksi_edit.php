<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_kelahiran = $_POST['id_kelahiran'];
    $id_admin = $_POST['id_admin'];
    $nik = $_POST['nik'];
    $nama_bayi = $_POST['nama_bayi'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $anak_ke = $_POST['anak_ke'];
    $tanggal_lapor = $_POST['tanggal_lapor'];
    $nama_rumahsakit = $_POST['nama_rumahsakit'];

                $QueryEdit = mysqli_query($koneksi, " UPDATE tbl_kelahiran SET
                id_admin = '$id_admin',
                nik = '$nik',
                nama_bayi = '$nama_bayi',
                tempat_lahir = '$tempat_lahir',
                tanggal_lahir = '$tanggal_lahir',
                jenis_kelamin = '$jenis_kelamin',
                anak_ke = '$anak_ke',
                tanggal_lapor = '$tanggal_lapor',
                nama_rumahsakit = '$nama_rumahsakit'
                WHERE id_kelahiran = '$id_kelahiran'");
                if ($QueryEdit) {
                    echo "
                    <script>
                        alert('Data berhasil dirubah');
                        window.location = '../../dashboard.php?module=kelahiran';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal dirubah');
                        window.location = '../../dashboard.php?module=edit_kelahiran&id_kelahiran='+'$id_kelahiran';
                    </script>";
                }
            
}
