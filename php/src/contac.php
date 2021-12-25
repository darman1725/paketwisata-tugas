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
                    <div class="col text-LEFT">
                        <h1>GET IN TOUCH</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col" >
                        <p>Anda punya pertanyaan atau butuh bantuan<br> 
                        untuk merencanakan liburan anda?</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col" >
                        <p><h3><b>Kantor Kami</b></h3></p>
                        <p>Renon Denpasar Timur, 
                        Jl. Raya Puputan No.20 X, Panjer, 
                        Kec. Denpasar Sel., Kota Denpasar, Bali 80226</p>
                    </div>

                    <div class="col" >
                        <p><h3><b>Email atau<br>
                            Hubungi Kami
                        </b></h3></p>
                        <p>Email :<br>
                        tourandtravelbali@gmail.com</p>
                        <p>Whatsapp :<br>
                        081321445761</p>
                        <p>Phone :<br>
                        0341-55121345</p>
                    </div>

                    <div id="googleMap" style="width:50%;height:400px;"></div>

                    <script>
                        function viewMap(){
                        var mapProp= {
                            center:new google.maps.LatLng(-7.9676844,112.6340559),
                            zoom:10,
                        };
                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-M1QcYfyLUGFnWbxKubNdl2zrpXResFc&callback=viewMap"></script>
                </div>

            </div>

            <div class="footer page-top">
                <header>
                    <?php include 'footer.php';?>
                </header>
            </div>
        </body>
    </html>