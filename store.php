<?php
//include con database
include './config.php';

//mengambil data yang di kirim dari form
$nama = $_POST['nama'];
$noktp = $_POST['no_ktp'];
$notelp = $_POST['no_telp'];
$tahunmasuk = $_POST['tahun_masuk'];

//input data ke database
mysqli_query($koneksi, "insert into karyawan values('','$nama', '$noktp', '$notelp', '$tahunmasuk')");
//return ke halaman awal
include 'main.php';

