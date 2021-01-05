<?php 


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

 ?>