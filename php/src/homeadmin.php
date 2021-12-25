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
<body >

    <div class="header">
        <header>
            <?php include 'header.php';?>
        </header>
    </div>
    
    <br><br>
    <br><br>


    <div class="container page-top">
        <div class="card mb-3" style="width: 80rem;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/paketwisata.jpg" class="card-img-top" alt="">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Paket Wisata</h5>
                    <p class="card-text"><a href="crudwisata.php">Data Daftar Paket Wisata</a> </p>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="width: 80rem;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/mobil1.jpg" class="card-img-top" alt="">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Paket Sewa Mobil</h5>
                    <p class="card-text"><a href="crudmobil.php">Data Daftar Paket Sewa Mobil</a> </p>
                </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="width: 80rem;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/bus1.jpg" class="card-img-top" alt="">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Paket Sewa Bus</h5>
                    <p class="card-text"><a href="crudbus.php">Data Daftar Paket Sewa Bus</a> </p>
                </div>
                </div>
            </div>
        </div>
    </div>



    <div class="footer">
        <header>
            <?php include 'footer.php';?>
        </header>
    </div>

</body>
</html>