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

    $id_informasi_publik = $_POST['id_informasi_publik'];
    $id_admin = $_POST['id_admin'];
    $tanggal_publish = $_POST['tanggal_publish'];
    $judul = $_POST['judul'];
    $subject = $_POST['subject'];
    $deskripsi = $_POST['deskripsi'];

    if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
            $QueryEdit = mysqli_query($koneksi, " UPDATE tbl_informasi_publik SET
            id_admin = '$id_admin',
            tanggal_publish = '$tanggal_publish',
            judul = '$judul',
            subject = '$subject',
            gambar = '$gambar',
            deskripsi = '$deskripsi'
            WHERE id_informasi_publik = '$id_informasi_publik'");
            if ($QueryEdit) {
                echo "
                <script>
                    alert('Data berhasil dirubah');
                    window.location ='../../dashboard.php?module=informasipublik';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal dirubah');
                    window.location = '../../dashboard.php?module=edit_informasipublik&id_informasi_publik='+'$id_informasi_publik';
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Data gambar gagal');
                window.location = '$admin_url'+'dashboard.php?module=informasipublik';
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Data gambar terlalu besar');
            window.location = '$admin_url'+'dashboard.php?module=informasipublik';
        </script>";
    }
} else {
    echo "
    <script>
        alert('Type gambar salah');
        window.location = '$admin_url'+'dashboard.php?module=informasipublik';
    </script>";
}
}
?>