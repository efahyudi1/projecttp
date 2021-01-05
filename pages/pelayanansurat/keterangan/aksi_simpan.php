<?php 
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    date_default_timezone_set('asia/jakarta');
    $id_admin = $_POST['id_admin'];
    $nik = $_POST['nik'];
    $keperluan = $_POST['keperluan'];
    $keterangan_lain = $_POST['keterangan_lain'];
    $tanggal_lapor = date("y-m-d");

    $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_keterangan(id_admin, nik, keperluan, keterangan_lain, tanggal_lapor) VALUES ('$id_admin','$nik','$keperluan','$keterangan_lain','$tanggal_lapor')");
    $QueryTampil = mysqli_query($koneksi, "SELECT * FROM tbl_keterangan ORDER BY id_keterangan DESC limit 1");
    $row = mysqli_fetch_array($QueryTampil);
    $id_keterangan = $row['id_keterangan'];
                if ($QuerySimpan) {
                    echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = 'surat.php?id_keterangan=$id_keterangan';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                    </script>";
                }

 ?>