<?php 
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $id_admin = $_POST['id_admin'];
    $judul = $_POST['judul'];
    $tanggal_pelaksanaan = $_POST['tanggal_pelaksanaan'];
    $target = $_POST['target'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];

    $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_agenda (id_admin, judul, tanggal_pelaksanaan, target, lokasi, deskripsi) VALUES ('$id_admin','$judul','$tanggal_pelaksanaan','$target','$lokasi','$deskripsi')");
                if ($QuerySimpan) {
                    echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = '../../dashboard.php?module=agenda';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                        window.location = '../../dashboard.php?module=agenda';
                    </script>";
                }

 ?>