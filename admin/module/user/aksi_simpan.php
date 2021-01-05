<?php 
    include "../../lib/config.php";
    include "../../lib/koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $QuerySimpan = mysqli_query($koneksi, "INSERT INTO tbl_admin (username, password, level) VALUES ('$username','$password','$level')");
                if ($QuerySimpan) {
                    echo "
                    <script>
                        alert('Data berhasil disimpan');
                        window.location = '../../dashboard.php?module=user';
                    </script>";
                } else {
                    echo "
                    <script>
                        alert('Data gagal disimpan');
                        window.location = '../../dashboard.php?module=user';
                    </script>";
                }

 ?>