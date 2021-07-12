<?php

//koneksi ke database (" ", merupakan pass phpmyadmin)

$koneksi = mysqli_connect("localhost", "ucp2pkw_raditya_101", "indroganteng1", "ucp2pkw_ptsawit_101");

//cek koneksi ke database
//jika error

if(mysqli_connect_errno()){
    echo "Error connecting : " . mysqli_connect_error();
}