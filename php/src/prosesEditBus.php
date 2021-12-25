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

    $query="UPDATE paketbus SET jenis_bus='$jenis_bus',harga='$harga',keterangan='$keterangan' ,lokasi_foto='$target_path'
    WHERE id='$id'";
	$result = mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data";
        if (move_uploaded_file($_FILES['Foto']['tmp_name'], $target_path)) {
            echo "The file " . basename($_FILES['Foto']['name'] . " has been uploaded<br>");
        }else{
            echo "There was an error uploading the file, please try again";
        }
?>
    <a href="crudbus.php"> Lihat data </a>
<?php
    }
    else{
        echo "Gagal update data" . mysqli_error($connect);
    }
?>