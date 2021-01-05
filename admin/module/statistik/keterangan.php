<?php
include "lib/koneksi.php";

for($i = 1; $i < 13; $i++) {
$sql = mysqli_query($koneksi, "SELECT count(id_keterangan) AS hasil FROM `tbl_keterangan` WHERE MONTH(tanggal_lapor) = '$i'");
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
          <h1>Statistik Keterangan</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Menu Utama</div>
            <div class="breadcrumb-item">Statistik</div>
            <div class="breadcrumb-item">Statistik Keterangan</div>
          </div>
        </div>
        <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <h3>Statistik Keterangan Pada Tahun 2020</h3>
                            <canvas id="keterangan"></canvas>
                        </div>
                        <script>
                            var ctx = document.getElementById("keterangan");
                            var keterangan = new Chart(ctx, {
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
            </div>
        </div>
    </div>