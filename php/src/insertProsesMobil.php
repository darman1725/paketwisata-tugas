<?php
    include "koneksi.php";

    $target_path = "uploads/";
    $id = $_POST['id'];
    $jenis_mobil = $_POST['Jenis_Mobil'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    if(!file_exists($target_path)) {
    	mkdir($target_path, 0755, true);
    	echo "The directory was created ";
    }

    $target_path = $target_path . basename(
        $_FILES['Foto']['name']);
        $tmp_name = $_FILES['Foto']['tmp_name'];


    $sql = "INSERT INTO paketmobil(id,jenis_mobil,harga,keterangan,lokasi_foto)
            VALUES('$id','$jenis_mobil','$harga','$keterangan','$target_path')";

    if (mysqli_query($connect, $sql)){
        ?>
        Data berhasil ditambahkan, silahkan menuju
        <a href="crudmobil.php"> Halaman HOME </a> 
        
        <?php
    }
    else{
        echo "Data gagal ditambahkan <br> ". mysqli_error($connect);
        ?>
        <a href="crudmobil.php"> Halaman HOME </a> <?php
    }

    mysqli_close($connect);
?>