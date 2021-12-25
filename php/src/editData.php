<!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Data</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <!-- Menyisipkan Javascript-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <style>
                #id, #jenispaket, #harga, #keterangan{
                border: 1px solid #5A9AD4;
                width: 5cm;
                height: 30px;
                }

                #id {
                margin-left: 110px;
                }

                #jenispaket {
                    margin-left: 50px;
                    }

                #harga {
                margin-left: 80px;
                }

                #keterangan {
                margin-left:45px;
                }
            </style>
        </head>
        <body>

            <div class="header">
                <header>
                    <?php include 'header.php';?>
                </header>
            </div>
            

            <div class="jumbotronmenu3">
                <div class="container">
                <br> <br> <br> 
                </div>    
            </div>

            <!--Section menu-->

            <div class="menu3">
                <header>
                    <?php include 'menu3.php';?>
                </header>
            </div>

            <?php
                include "koneksi.php";
                $id = $_GET['id'];
                $query="SELECT * FROM paketwisata WHERE id='$id'";
                $result = mysqli_query($connect, $query);
            ?>

            <div class="container page-top">
                <div class="EditData">
                    <div class="check">
                        <h3>EDIT DATA WISATA</h3>
                        <br>
                        <form enctype="multipart/form-data" action="prosesEdit.php" method="POST">
                            <form method="GET" action="prosesEdit.php">
                            <?php
                                while($row=mysqli_fetch_array($result)){
                            ?>
                                <p class="id">Id <input id="id" name="id" type="number" value="<?php echo $row['Id'];?>" readonly></p>
                                <br>
                                <p class="jenispaket">Jenis Paket <input id="jenispaket" name="jenis_paket" type="text" value="<?php echo $row['Jenis_Paket'];?>" required></p>
                                <br>
                                <p class="harga">Harga <input id="harga" name="harga" type="number" value="<?php echo $row['Harga'];?>"required></p>
                                <br>
                                <p class="keterangan">Keterangan <input id="keterangan" name="keterangan" type="text" value="<?php echo $row['Keterangan'];?>"required></p>
                                <br>      
                                <p class="gmbr">Foto <input id="Foto" name="Foto" type="file" value="<?php echo $row['lokasi_foto'];?>"required></p>
                                <br> 
                                <tr>
                                <td> <input type="submit" name="tambah" value="Edit Data"></td>
                                </tr>
                            <?php
                                }
                            ?>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer page-top">
                <header>
                    <?php include 'footer.php';?>
                </header>
            </div>
        </body>
    </html>
