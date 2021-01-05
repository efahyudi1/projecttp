<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    if ($_POST) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $pekerjaan = $_POST['pekerjaan'];

    if (empty($nik)) {
        $error['nik'] = 'NIK kosong';
    } else {
        if (!is_numeric($nik)) {
            $error['nik'] = 'NIK harus berupa angka';
        }
    }
    if (empty($nama)) {
        $error['nama'] = 'Nama kosong';
    }
    if (empty($jenis_kelamin)) {
        $error['jenis_kelamin'] = 'Pilih salah satu';
    }
    if (empty($agama)) {
        $error['agama'] = 'Pilih salah satu';
    }
    if (empty($tempat_lahir)) {
        $error['tempat_lahir'] = 'Tempat lahir kosong';
    }
    if (empty($tanggal_lahir)) {
        $error['tanggal_lahir'] = 'Tanggal lahir kosong';
    }
    if (empty($alamat)) {
        $error['alamat'] = 'Nama kosong';
    }
    if (empty($status)) {
        $error['status'] = 'Pilih salah satu';
    }
    if (empty($pekerjaan)) {
        $error['pekerjaan'] = 'Pilih salah satu';
    }

    if (empty($error)) {

         $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_penduduk (nik, nama, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, alamat, status, pekerjaan) VALUES ('$nik','$nama','$jenis_kelamin','$agama','$tempat_lahir','$tanggal_lahir','$alamat','$status','$pekerjaan')");
        if ($QuerySimpan) {
            echo "
            <script>
                alert('Data berhasil disimpan');
                window.location = '../../dashboard.php?module=penduduk';
            </script>";
        } else {
            echo "
            <script>
                alert('Data gagal disimpan');
                window.location = '../../dashboard.php?module=penduduk';
            </script>";
                }
    } else {
            $_SESSION['error'] = $error;
            $_SESSION['post'] = $_POST;
            header("location: ../../dashboard.php?module=tambah_penduduk");
        }
    }
}