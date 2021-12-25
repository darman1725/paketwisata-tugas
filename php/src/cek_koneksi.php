<?php
    $namaHost = "172.20.0.2";
    $username = "root";
    $password = "admin";

    $connect = mysqli_connect($namaHost, $username, $password);

    if($connect){
        echo "Koneksi ke MySQL berhasil";
    }
    else{
        echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
    }
?>