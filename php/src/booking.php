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
                <div class="price">
                    <div class="check">
                        <h3>SILAHKAN ISI DATA DIRI ANDA!</h3>
                        <br>
                        <form action="price.php" method="POST">
                        <p class="name">Nama Lengkap<input id="name" name="name" type="text" required></p>
                        <br>
                        <p class="address">Alamat Lengkap<input id="address" name="address" type="text" required></p>
                        <br>
                        <p class="hp">Nomor Telepon<input id="hp" name="hp" type="text" required></p>
                        <br>
                        <p class="email">Email <input id="email" name="email" type="text" required></p>
                        <br>
                        <p class="wisata">Jenis Paket Wisata
                            <select id="wisata" name="wisata" size="1">
                                <option value=1>Wisata 3 Pantai<option value=2>Wisata 5 Pantai<option value=3>Wisata 1
                                <option value=4>Wisata 2<option value=5>Wisata 3<option value=6>Wisata 4<option value=7>Wisata 5
                                <option value=8>Wisata 6<option value=9>Wisata 3 Gunung<option value=10>Wisata Gunung dan Pantai
                            </select>
                        </p>
                        <br>

                        <p class="kendaraan">Jenis Sewa Kendaraan
                            <select id="kendaraan" name="kendaraan" size="1">
                                <option value=1>Alphard<option value=2>Innova Reborn<option value=3>New Avanza
                                <option value=4>Grand Innova<option value=5>Camry<option value=6>Fortuner VRZ<option value=7>Mobil Sedan
                                <option value=8>Isuzu Panther<option value=9>Alya<option value=10>Rush TRD<option value=11>ELF Short
                                <option value=12>ELF Long<option value=13>Hiace Commuter<option value=14>Medium Bus
                                <option value=15>Big Bus<option value=16>SHD Bus<option value=17>Microbus
                                <option value=18>Minivan<option value=19>Toyota HIACE<option value=20>Isuzu NQR 71
                            </select>
                        </p>
                        <br>
                
                        <button class="button" onclick="take(name, address, hp, email, wisata, kendaraan)"  >Pesan</button>
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