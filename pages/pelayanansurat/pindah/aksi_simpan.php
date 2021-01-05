<?php 
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    date_default_timezone_set('asia/jakarta');
    $id_admin = $_POST['id_admin'];
    $nik = $_POST['nik'];
    $alamat_pindah = $_POST['alamat_pindah'];
    $alasan = $_POST['alasan'];
    $tanggal_lapor = date("y-m-d");


    $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_pindah (id_admin, nik, alamat_pindah, alasan, tanggal_lapor) VALUES ('$id_admin','$nik','$alamat_pindah','$alasan','$tanggal_lapor')");
    $QueryTampil = mysqli_query($koneksi, "SELECT * FROM tbl_pindah ORDER BY id_pindah DESC limit 1");
    $row = mysqli_fetch_array($QueryTampil);
    $id_pindah = $row['id_pindah'];
                if ($QuerySimpan) {
                    echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = 'surat.php?id_pindah=$id_pindah';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                    </script>";
                }

 ?>