<?php 
    include "koneksi.php"; 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO user (username,email,password,level)
            VALUES('$username','$email','$password','2')";

    if (mysqli_query($connect, $sql)){
        ?>
       Register Berhasil, silahkan menuju
        <a href="Login.html">Halaman Login</a> <?php
    }
    else{
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>