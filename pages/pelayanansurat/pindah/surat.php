<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$id_pindah = $_GET['id_pindah'];
$QueryTampil = mysqli_query($koneksi, "SELECT * FROM tbl_pindah tpi INNER JOIN tbl_penduduk tp ON tp.nik =tpi.nik INNER JOIN tbl_admin ta ON ta.id_admin = tpi.id_admin WHERE id_pindah = '$id_pindah'");
$row = mysqli_fetch_array($QueryTampil);
$id_pindah = $row['id_pindah'];
$nik = $row['nik'];
$nama = $row['nama'];
$tempat_lahir = $row['tempat_lahir'];
$tanggal_lahir = $row['tanggal_lahir'];
$jenis_kelamin = $row['jenis_kelamin'];
$agama = $row['agama'];
$pekerjaan = $row['pekerjaan'];
$status = $row['status'];
$alamat = $row['alamat'];
$alamat_pindah = $row['alamat_pindah'];
$alasan = $row['alasan'];
$tanggal_lapor = $row['tanggal_lapor'];
$username = $row['username'];
$level = $row['level'];
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
    <div id="surat_tampil" style="display:block;">
        <div class="surat_tampil-print">
            <!-- awal  kepalasurat -->
            <div id="kepala_surat"><img src="../../../assets/img/logo.png" id="logo_surat" valign="baseline" />
                <strong>PEMERINTAHAN KABUPATEN MAGELANG<br />KECAMATAN MUNGKID<br />DESA BLONDO<br /></strong>Jl
                Magelang Jogja Km 7 Kode Pos : 56551.
            </div>
            <!-- akhir kepala surat -->

            <div class="garis"></div>
            <div id="nomer_surat">
                <div style="text-transform:uppercase;text-decoration:underline;font-weight:bolder">Surat Keterangan
                    Pindah Penduduk</div>
                <div>Nomer : <?php echo $id_pindah?>/<?php echo $tanggal_lapor?></div>
            </div>
            <div id="par_pembuka" style="margin-bottom:2px">
                <span class="masuk_alinea">&nbsp;</span>Yang bertanda tangan dibawah ini
                Kepala Desa Blondo, Kecamatan Mungkid, Kabupaten Magelang menerangkan bahwa :
            </div><br>
            <div id="content_surat">
                <div>
                    <label class="l_form">NIK</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $nik?></span>
                </div>
                <div>
                    <label class="l_form">Nama</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $nama?></span>
                </div>
                <div>
                    <label class="l_form">Tempat,Tanggal Lahir</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $tempat_lahir?>, <?php echo $tanggal_lahir?></span>
                </div>
                <div>
                    <label class="l_form">Jenis Kelamin</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $jenis_kelamin?></span>
                </div>
                <div>
                    <label class="l_form">Agama</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $agama?></span>
                </div>
                <div>
                    <label class="l_form">Status</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $status?></span>
                </div>
                <div>
                    <label class="l_form">Pekerjaan</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $pekerjaan?></span>
                </div>
                <div>
                    <label class="l_form">Alamat Asal</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $alamat?></span>
                </div>
                <div>
                    <label class="l_form">Alamat Pindah</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $alamat_pindah?></span>
                </div>
                <div>
                    <label class="l_form">Alasan</label>
                    <span class='titik'>:</span>
                    <span class='s_kanan'><?php echo $alasan?></span>
                </div>
            </div>

            <div id="par_penutup"><span class="masuk_alinea">&nbsp;</span>Demikian Surat Keterangan ini diberikan, untuk
                dapat digunakan sebagaimana mestinya.</div>
            <div class="tanda_tangan" style="float:right">
                <div>Blondo, <?php echo $tanggal_lapor?></div>
                <div class="kosong" id="pejabat"><?php echo $level?></div>
                <div id="nama_pejabat"><?php echo $username?></div>
            </div>


        </div>
    </div>
    <div id="nomer_surat">
        <center><button class="btn" onClick="window.print()">Print</button>
        <a href="../../../index.php"><button class="btn">Close</button></a>
        </center>
    </div>
</body>

</html>