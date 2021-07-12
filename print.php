<?php
include 'config.php';
$id = $_GET['id'];
$karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
while ($data = mysqli_fetch_assoc($karyawan)) {
    $tahun_masuk = $data['tahun_masuk'];



                        $lama = new DateTime($tahun_masuk);

                        $sekarang = new DateTime();



                        $masa_kerja = $sekarang->diff($lama);
?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title><?php echo $data['nama'] ?></title>
    </head>

    <body onload="window.print();">
        <div class="container mt-5">
            <p class="fw-bold">Profil Karyawan</p>
            <p>Nama : <?php echo $data['nama'] ?></p>
            <p>No KTP : <?php echo $data['no_ktp'] ?></p>
            <p>No Telp : <?php echo $data['no_telp'] ?></p>
            <p>Tahun Masuk : <?php echo $data['tahun_masuk'] ?></p>
            <p>Jumlah Masa Kerja : <?php echo $masa_kerja->y . "&nbsp" . "Tahun" ?></p>
        </div>
    <?php
}
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>