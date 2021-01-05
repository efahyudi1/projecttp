
<?php
include "lib/koneksi.php";

for($i = 1; $i < 13; $i++) {
$sql = mysqli_query($koneksi, "SELECT count(nik) AS hasil FROM `tbl_penduduk` WHERE MONTH(tanggal_lahir) = '$i'");
$row = mysqli_fetch_array($sql);
$hasil = $row['hasil'];
$bulan [$i] = $hasil;
}

// for ($x = 1; $x  <13; $x++){
// 	echo $bulan[$x].", ";
// }

?>
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="section-header">
          <h1>Statistik Penduduk</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Menu Utama</div>
            <div class="breadcrumb-item">Kependudukan</div>
            <div class="breadcrumb-item">Statistik Penduduk</div>
          </div>
        </div>
        <div class="card" style="display: -webkit-box;">
            <div class="col-sm-6">
                    <div class="card-body">
                        <div class="container">
                            <h3>Statistik Penduduk Berdasarkan Bulan Lahir</h3>
                            <canvas id="kelahiran"></canvas>
                        </div>
                        <script>
                            var ctx = document.getElementById("kelahiran");
                            var kelahiran = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli",
                                        "Agustus", "September", "Oktober", "November", "December"
                                    ],
                                    datasets: [{
                                        label: '# of Votes',
                                        data: [ <?php
                                            for ($x = 1; $x < 13; $x++) {
                                                echo $bulan[$x].
                                                ", ";
                                            } ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                    </div>

                    <?php
                    include "lib/koneksi.php";


                    $sql = mysqli_query($koneksi, "SELECT COUNT(nik) as hasil1 FROM tbl_penduduk WHERE jenis_kelamin = 'Laki-laki'");
                    $row = mysqli_fetch_array($sql);
                    $hasil = $row['hasil1'];
                    $cowo = $hasil;


                    $sql = mysqli_query($koneksi, "SELECT COUNT(nik) as hasil2 FROM tbl_penduduk WHERE jenis_kelamin = 'Perempuan'");
                    $row = mysqli_fetch_array($sql);
                    $hasil = $row['hasil2'];
                    $cewe = $hasil;

                    ?>
                    <div class="col-sm-6">
                    <div class="card-body">
                        <div class="container">
                            <h3>Statistik Penduduk Berdasarkan Jenis Kelamin</h3>
                            <canvas id="qwe"></canvas>
                        </div>
                        <script>
                            var ctx = document.getElementById("qwe");
                            var qwe = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["Laki-laki", "Perempuan"
                                    ],
                                    datasets: [{
                                        label: '# of Votes',
                                        data: [ <?php
                                            echo $cowo.','.$cewe ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)',
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)',
                                            'rgba(255,99,132,1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



