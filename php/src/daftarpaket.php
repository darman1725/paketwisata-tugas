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

            <div class="menu">
                <header>
                    <?php include 'menu.php';?>
                </header>
            </div>

            <div class="container page-top">
                <div class="row">
                    <div class="col" >
                        <div class="card" style="width: 21rem;">
                            <img src="img/paketwisata.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Paket Wisata</b></h3>
                                    <p class="card-text">Beragam pilihan wisata di Bali seperti<br>
                                    berbagai macam pantai,gunung dan tempat wisata lainnya.<br>
                                    Dengan harga yang dijamin murah dan terjangkau.<br>
                                    Khususnya untuk keluarga tercinta</p>
                                    <a href="paketwisata.php" class="btn btn-primary">Read More</a>
                                </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 21rem;">
                            <img src="img/mobil1.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Paket Sewa Mobil</b></h3>
                                    <p class="card-text">Beragam pilihan Mobil untuk menikmati liburan anda.<br>
                                    Harga berkualitas dan fasilitas lengkap seperti Driver dan BBM</p>
                                    <a href="paketmobil.php" class="btn btn-primary">Read More</a>
                                </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 21rem;">
                            <img src="img/bus1.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Paket Sewa Bus</b></h3></b>
                                    <p class="card-text">Beragam pilihan Bus untuk menikmati liburan anda.<br>
                                    Harga berkualitas dan fasilitas lengkap seperti Driver dan BBM</p>
                                    <a href="paketbus.php" class="btn btn-primary">Read More</a>
                                </div>
                        </div>
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