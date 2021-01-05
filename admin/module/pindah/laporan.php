<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job board HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../assets/css/flaticon.css">
    <link rel="stylesheet" href="../../../assets/css/price_rangs.css">
    <link rel="stylesheet" href="../../../assets/css/slicknav.css">
    <link rel="stylesheet" href="../../../assets/css/animate.min.css">
    <link rel="stylesheet" href="../../../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../../assets/css/slick.css">
    <link rel="stylesheet" href="../../../assets/css/nice-select.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/css/surat.css">
</head>

<body>

    <?php
$tgl_awal = date('Y-m-d', strtotime($_POST["tanggalawal"]));
$tgl_akhir = date('Y-m-d', strtotime($_POST["tanggalakhir"]));
$sql = mysqli_query($koneksi, "select * from tbl_pindah tpi INNER JOIN tbl_penduduk tp ON tpi.nik = tp.nik where tanggal_lapor between '" . $tgl_awal . "' and '" . $tgl_akhir . "' ORDER BY tanggal_lapor asc");
$jumlah = mysqli_num_rows($sql);
if ($jumlah > 0) { ?>

    <div class="row">
        <div class="col-md-12">
            <center>

                <body>
                    <div class="container">
                        <br>
                        <h4>Data Berdasarkan Tanggal</h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th>Tanggal Lapor</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Status</th>
                                <th>Pekerjaan</th>
                                <th>Alamat Asal</th>
                                <th>Alamat Pindah</th>
                                <th>Alasan</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 0;
                            while ($data = mysqli_fetch_array($sql)) {
                                $no++;
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($data["tanggal_lapor"]));   ?></td>
                                    <td><?php echo $data['nik']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                    <td><?php echo $data['agama']; ?></td>
                                    <td><?php echo $data['tempat_lahir']; ?>, <?php echo $data['tanggal_lahir']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td><?php echo $data['pekerjaan']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['alamat_pindah']; ?></td>
                                    <td><?php echo $data['alasan'];?></td>
                                </tr>
                            </tbody>
                            <?php }
                        } else {
                            echo "<script>
                            alert('Data Kosong');
                            window.location='../../dashboard.php?module=pindah';
                        </script>";
                        }
                        ?>
                        </table>
                        <button class="btn" onClick="window.print()">Print</button>
                        <a href="../../dashboard.php?module=pindah" class="btn">Close</a>
                    </div>
                </body>
            </center>
        </div>
    </div>

</html>

<style>
    h1 {
        font-family: sans-serif;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        color: #666;
        text-shadow: 1px 1px 0px #fff;
        background: #eaebec;
        border: #ccc 1px solid;
    }

    table th {
        padding: 15px 35px;
        border-left: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        background: #ededed;
    }

    table th:first-child {
        border-left: none;
    }

    table tr {
        text-align: center;
        padding-left: 20px;
    }

    table td:first-child {
        text-align: left;
        border-left: 0;
    }

    table td {
        padding: 5px;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        background: #fafafa;
        background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
        background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
    }

    table tr:last-child td {
        border-bottom: 0;
    }

    table tr:last-child td:first-child {
        -moz-border-radius-bottomleft: 3px;
        -webkit-border-bottom-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    table tr:last-child td:last-child {
        -moz-border-radius-bottomright: 3px;
        -webkit-border-bottom-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    table tr:hover td {
        background: #f2f2f2;
        background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
        background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
    }
</style>