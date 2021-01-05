<?php 
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    date_default_timezone_set('asia/jakarta');
    $id_admin = $_POST['id_admin'];
    $nik = $_POST['nik'];
    $tanggal_kematian = $_POST['tanggal_kematian'];
    $sebab = $_POST['sebab'];
    $alamat_kematian = $_POST['alamat_kematian'];
    $tanggal_lapor = date("y-m-d");

    $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kematian (id_admin, nik, tanggal_kematian, sebab, alamat_kematian, tanggal_lapor) VALUES ('$id_admin','$nik','$tanggal_kematian','$sebab','$alamat_kematian','$tanggal_lapor')");
    $QueryTampil = mysqli_query($koneksi, "SELECT * FROM tbl_kematian ORDER BY id_kematian DESC limit 1");
    $row = mysqli_fetch_array($QueryTampil);
    $id_kematian = $row['id_kematian'];
                if ($QuerySimpan) {
                    echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = 'surat.php?id_kematian=$id_kematian';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                    </script>";
                }

 ?>