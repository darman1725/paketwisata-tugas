<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TOUR & TRAVEL BALI</title>
        <!-- Menyisipkan Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="jquery-3.5.1.js"></script>
        <!-- Menyisipkan Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            #id, #harga, #keterangan,#jenisbus {
                border: 1px solid #5A9AD4;
                width: 5cm;
                height: 30px;
            }

            #id {
                margin-left: 110px;
            }

            #jenisbus {
                margin-left: 60px;
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
        
        <div class="container page-top">
            <div class="tambahData">
                <div class="check">
                    <h3>TAMBAH DATA BUS</h3>
                    <br>
                    <form enctype="multipart/form-data" action="insertProsesBus.php" method="POST">
                            <p class="id">Id <input id="id" name="id" type="text"></p>
                            <br>
                            <p class="jenisbus">Jenis Bus <input id="jenisbus" name="Jenis_Bus" type="text" required></p>
                            <br>
                            <p class="harga">Harga <input id="harga" name="harga" type="number" required></p>
                            <br>
                            <p class="keterangan">Keterangan <input id="keterangan" name="keterangan" type="text" required></p>
                            <br>    
                            <p class="gmbr">Foto Bus<input id="Foto" name="Foto" type="file" value="<?php echo $row['lokasi_foto'];?>"required></p>
                            <br>   
                            <tr>
                                <td> <input type="submit" name="tambah" value="Tambah Data"></td>
                            </tr>
                    </form>
                </div>
            </div>
        </div>
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

        <div class="footer page-top">
            <header>
                <?php include 'footer.php';?>
            </header>
        </div>
    </body>
</html>