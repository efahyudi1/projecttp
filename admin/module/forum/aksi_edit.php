 <?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
    echo "<center>Anda harus login terlebih dahulu<br>";
    echo "<a href=../../index.php>Klik disini untuk Login</a></center>";
} else {
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $gambar = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../../assets/upload/" . $gambar;


    date_default_timezone_set('asia/jakarta');
    $id_forum = $_POST['id_forum'];
    $nik = $_POST['nik'];
    $subjek = $_POST['subjek'];
    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_lapor = date("y-m-d");

    if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
            $QueryEdit = mysqli_query($koneksi, " UPDATE tbl_forum SET
            nik = '$nik',
            subjek = '$subjek',
            lokasi = '$lokasi',
            gambar = '$gambar',
            deskripsi = '$deskripsi',
            tanggal_lapor = '$tanggal_lapor'
            WHERE id_forum = '$id_forum'");
            if ($QueryEdit) {
                echo "
                <script>
                    alert('Data berhasil dirubah');
                    window.location ='../../dashboard.php?module=forum';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal dirubah');
                    window.location = '../../dashboard.php?module=edit_forum&id_forum='+'$id_forum';
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Data gambar gagal');
                window.location = '$admin_url'+'dashboard.php?module=forum';
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Data gambar terlalu besar');
            window.location = '$admin_url'+'dashboard.php?module=forum';
        </script>";
    }
} else {
    echo "
    <script>
        alert('Type gambar salah');
        window.location = '$admin_url'+'dashboard.php?module=forum';
    </script>";
}
}
?>