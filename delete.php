<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from karyawan where id ='$id'");

//mengalihkan halaman ke main.php
header("location: main.php");

?>