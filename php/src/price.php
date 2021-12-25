<!DOCTYPE html>
<html lang="en">
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
</head>
<body>

    <div class="header">
        <header>
            <?php include 'header.php';?>
        </header>
    </div>
    

    <div class="jumbotron">
        <div class="container">
          <h1 class="display-4"> WELCOME TO BALI INDONESIA</h1>
          <p class="lead">Selamat Datang ! Nikmati liburan anda di Pulau Bali dan rasakan sensasinya</p>
          <p>Semoga Tour dan Travel ini membantu perjalanan liburan anda menyenangkan</p>
        </div>
    </div>

<!--Section menu-->

    <div class="menu2">
        <header>
            <?php include 'menu2.php';?>
        </header>
    </div>
    <div class="container page-top">
    <?php
            $name = $_POST['name'];
            $address = $_POST['address'];
            $hp = $_POST['hp'];
            $email = $_POST['email'];
            $wisata = $_POST['wisata'];
            $kendaraan = $_POST['kendaraan'];
            $url = 'price.php';
            if ($wisata == 1) {
                $hargaWisata = 500000;
            } else if ($wisata == 2) {
                $hargaWisata = 1000000;
            } else if ($wisata == 3) {
                $hargaWisata = 1500000;
            } else if ($wisata == 4) {
                $hargaWisata = 1800000;
            } else if ($wisata == 5) {
                $hargaWisata = 2000000;
            } else if ($wisata == 6) {
                $hargaWisata = 900000;
            } else if ($wisata == 7) {
                $hargaWisata = 750000;
            } else if ($wisata == 8) {
                $hargaWisata = 1200000;
            } else if ($wisata == 9) {
                $hargaWisata = 1700000;
            } else if ($wisata == 10) {
                $hargaWisata = 2500000;
            }


            if ($kendaraan == 1) {
                $hargaKendaraan = 2200000;
            } else if ($kendaraan == 2) {
                $hargaKendaraan = 600000;
            } else if ($kendaraan == 3) {
                $hargaKendaraan = 400000;
            } else if ($kendaraan == 4) {
                $hargaKendaraan = 500000;
            } else if ($kendaraan == 5) {
                $hargaKendaraan = 2200000;
            } else if ($kendaraan == 6) {
                $hargaKendaraan = 1400000;
            } else if ($kendaraan == 7) {
                $hargaKendaraan = 650000;
            } else if ($kendaraan == 8) {
                $hargaKendaraan = 1500000;
            } else if ($kendaraan == 9) {
                $hargaKendaraan = 550000;
            } else if ($kendaraan == 10) {
                $hargaKendaraan = 900000;
            } else if ($kendaraan == 11) {
                $hargaKendaraan = 850000;
            } else if ($kendaraan == 12) {
                $hargaKendaraan = 1050000;
            } else if ($kendaraan == 13) {
                $hargaKendaraan = 1100000;
            } else if ($kendaraan == 14) {
                $hargaKendaraan = 800000;
            } else if ($kendaraan == 15) {
                $hargaKendaraan = 950000;
            } else if ($kendaraan == 16) {
                $hargaKendaraan = 1250000;
            } else if ($kendaraan == 17) {
                $hargaKendaraan = 790000;
            } else if ($kendaraan == 18) {
                $hargaKendaraan = 1000000;
            } else if ($kendaraan == 19) {
                $hargaKendaraan = 1200000;
            } else if ($kendaraan == 20) {
                $hargaKendaraan = 1300000;
            }
            $total= $hargaWisata + $hargaKendaraan;
        ?>
            <div class="count">
                <h2 class="judul">TOUR AND TRAVEL BALI</h2><br>
                <p id="p1" style="letter-spacing: 5px;">Nama Lengkap <h6><?php echo "$name"; ?></p><br></h6>
                <p id="p2" style="letter-spacing: 4px;">Alamat Lengkap <h6><?php echo "$address"; ?></p><br></h6>
                <p id="p3" style="letter-spacing: 4px;">Nomor Telepon <h6><?php echo "$hp"; ?></p><br></h6>
                <p id="p4" style="letter-spacing: 6px;">Email <h6><?php echo "$email"; ?></p><br></h6>
                <p id="p5" style="letter-spacing: 3px;">Harga Paket Wisata<h6><?php echo " Rp $hargaWisata"; ?></p><br></h6> 
                <p id="p6" style="letter-spacing: 3px;">Harga Sewa Kendaraan <h6> <?php echo "Rp $hargaKendaraan"; ?></p><br></h6> 
                <p id="p7" style="letter-spacing: 3px;" ><h5>TOTAL BAYAR PEMESANAN        = Rp <?php echo "$total"; ?></p> </h5>  
                <br>
                
                <h5>Terimakasih telah melakukan pemesanan, sampai bertemu di BALI.</h5>
                <p> Silahkan lakukan tangkapan layar bukti pemesanan, sebagai tanda bukti.</p>
                    <br> <br>
                    <a href="index.php">kembali halaman home</a>
                    <br> <br> <br>
                    <a href="Logout.php" class="btn btn-primary">Logout</a>
                    
                </p>
            </div>
            <br> <br> <br>  
</div>
    <div class="footer page-top">
        <header>
            <?php include 'footer.php';?>
        </header>
    </div>

</body>
</html>