<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];

                $QueryEdit = mysqli_query($koneksi, " UPDATE tbl_penduduk SET
                nik = '$nik',
                nama = '$nama',
                jenis_kelamin = '$jenis_kelamin',
                agama = '$agama',
                tempat_lahir = '$tempat_lahir',
                tanggal_lahir = '$tanggal_lahir',
                alamat = '$alamat',
                status = '$status',
                pekerjaan = '$pekerjaan'
                WHERE nik = '$nik'");
                if ($QueryEdit) {
                    echo "
                    <script>
                        alert('Data berhasil dirubah');
                        window.location = '../../dashboard.php?module=penduduk';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal dirubah');
                        window.location = '../../dashboard.php?module=edit_penduduk&nik='+'$nik';
                    </script>";
                }
            
}
