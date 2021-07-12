<?php
//include con database
include './config.php';

//mengambil data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$noktp = $_POST['no_ktp'];
$notelp = $_POST['no_telp'];
$tahunmasuk = $_POST['tahun_masuk'];


//update data ke database
mysqli_query($koneksi, "update karyawan set nama='$nama', no_ktp = '$noktp', no_telp = '$notelp', tahun_masuk = '$tahunmasuk' where id = '$id'");
//return ke halaman awal
header("location: main.php");