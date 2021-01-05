<?php
include "lib/koneksi.php";

$id_petani = $_SESSION['id_petani'];
for($i = 1; $i < 13; $i++) {
$sql = mysqli_query($koneksi, "SELECT SUM(hasil_timbang) AS hasil FROM `tbl_penimbangan` WHERE MONTH(tanggal) = '$i' && id_petani = $id_petani");
$row = mysqli_fetch_array($sql);
$hasil = $row['hasil'];
$bulan [$i] = $hasil;
}

// for ($x = 1; $x <count($bulan); $x++){
// 	echo $bulan[$x].", ";
// }

?>
<div class="page-header header-filter clear-filter" data-parallax="true"
    style="background-image: url('assets/img/galeri/bg2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1 style="font-weight:bolder;">Statistik Penimbangan</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="section" style="padding: 15px;">
        <div class="row" style="place-content: center;">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <h3>Statistik Hasil Penimbangan Pada tahun 2020</h3>
                            <canvas id="myChart"></canvas>
                        </div>
                        <script>
                            var ctx = document.getElementById("myChart");
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ["januari", "febuari", "maret", "april", "mei", "juni", "juli",
                                        "agustus", "september", "oktober", "november", "december"
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
</div>