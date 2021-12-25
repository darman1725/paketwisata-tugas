<?php
    include "koneksi.php";

    $target_path = "uploads/";
    $id = $_POST['id'];
    $jenis_bus = $_POST['Jenis_Bus'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    if(!file_exists($target_path)) {
    	mkdir($target_path, 0755, true);
    	echo "The directory was created ";
    }

    $target_path = $target_path . basename(
        $_FILES['Foto']['name']);
        $tmp_name = $_FILES['Foto']['tmp_name'];

    $sql = "INSERT INTO paketbus (id,jenis_bus,harga,keterangan,lokasi_foto)
            VALUES('$id','$jenis_bus','$harga','$keterangan','$target_path')";

    if (mysqli_query($connect, $sql)){
        ?>
        Data berhasil ditambahkan, silahkan menuju
        <a href="crudbus.php"> Halaman HOME </a> 
        
        <?php
    }
    else{
        echo "Data gagal ditambahkan <br> ". mysqli_error($connect);
    }

    mysqli_close($connect);
?>