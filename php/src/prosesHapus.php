<?php
    include "koneksi.php";

    $id = $_GET['id'];

    $query="DELETE FROM paketwisata WHERE id='$id'";
	$result = mysqli_query($connect, $query);

    if($result){
        echo "Data berhasil dihapus";
?>
    <a href="crudwisata.php"> Lihat data </a>
<?php
    }
    else{
        echo "Data gagal dihapus" . mysqli_error($connect);
    }
?>