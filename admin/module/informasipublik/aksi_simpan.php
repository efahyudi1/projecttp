<?php 
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    if ($_POST) {
        $gambar = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "../../assets/upload/" . $gambar;

    $id_admin = $_POST['id_admin'];
    $tanggal_publish = $_POST['tanggal_publish'];
    $judul = $_POST['judul'];
    $subject = $_POST['subject'];
    $deskripsi = $_POST['deskripsi'];

    if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
            $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_informasi_publik (id_admin, tanggal_publish, judul, subject, gambar, deskripsi) VALUES ('$id_admin','$tanggal_publish','$judul','$subject','$gambar','$deskripsi')");
                if ($QuerySimpan) {
                    echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = '../../dashboard.php?module=informasipublik';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                        window.location = '../../dashboard.php?module=tambah_informasipublik;
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