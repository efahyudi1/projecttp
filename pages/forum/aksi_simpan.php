<?php 
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    if ($_POST) {
        $gambar = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "../admin/assets/upload/" . $gambar;

    date_default_timezone_set('asia/jakarta');
    $nik = $_POST['nik'];
    $subjek = $_POST['subjek'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_lapor = date("y-m-d");

    if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
                $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_forum (nik, subjek, lokasi, deskripsi, gambar, tanggal_lapor) VALUES ('$nik','$subjek','$lokasi','$deskripsi','$gambar','$tanggal_lapor')");
                if ($QuerySimpan) {
                    echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = '../../forum.php';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                    </script>";
                }
            } else {
                echo "
                <script>
                    alert('Data gambar gagal');
                    // window.location = '$admin_url'+'adminweb.php?module=produk';
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Data gambar terlalu besar');
                window.location = '$admin_url'+'adminweb.php?module=produk';
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Type gambar salah');
            window.location = '$admin_url'+'adminweb.php?module=produk';
        </script>";
        }
    }
 ?>