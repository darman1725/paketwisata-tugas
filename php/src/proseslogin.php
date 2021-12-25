<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $row=mysqli_fetch_assoc($result);

    if($row['level'] == 1) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';

        header('location:homeadmin.php');
    } else if($row['level'] == 2) {
        header('location:index.php');
    } else {
        header('location:login.html');
    }
?>