<?php 
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    date_default_timezone_set('asia/jakarta');
    $id_admin = $_POST['id_admin'];
    $nik = $_POST['nik'];
    $nama_bayi = $_POST['nama_bayi'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $anak_ke = $_POST['anak_ke'];
    $tanggal_lapor = date("y-m-d");
    $nama_rumahsakit = $_POST['nama_rumahsakit'];
    $alamat = $_POST['alamat'];


    $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kelahiran (id_admin, nik, nama_bayi, tempat_lahir, tanggal_lahir, jenis_kelamin, anak_ke, tanggal_lapor, nama_rumahsakit) VALUES ('$id_admin','$nik','$nama_bayi','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$anak_ke','$tanggal_lapor','$nama_rumahsakit')");
    $QueryTampil = mysqli_query($koneksi, "SELECT * FROM tbl_kelahiran ORDER BY id_kelahiran DESC limit 1");
    $row = mysqli_fetch_array($QueryTampil);
    $id_kelahiran = $row['id_kelahiran'];
                if ($QuerySimpan) {
                    echo "
                    <script>
                    
                        alert('Data berhasil disimpan');
                        window.location = 'surat.php?id_kelahiran=$id_kelahiran';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                    </script>";
                }

 ?>