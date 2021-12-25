<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1 px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
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
            <div class="row">
                <div class="col text-left">
                    <br> <br>
                    <h3>DAFTAR PAKET SEWA BUS</h3>
                    <br>
                </div>
            </div>

        <table>
            <tr>
                <th> Id </th>
                <th> Jenis Bus </th>
                <th> Harga </th>
                <th> Keterangan </th>
            </tr>
            <?php
                include "koneksi.php";

                $query ="SELECT * FROM paketbus";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> <?php echo $row["Id"] ?> </td>
                <td> <?php echo $row["Jenis_Bus"] ?> </td>
                <td> <?php echo $row["Harga"] ?> </td>
                <td> <?php echo $row["Keterangan"] ?> </td>
            <?php 
                }
            }
            else {
                echo "0 result";
            }
            ?>
            </tr>
        </table>
        <br> <br>
        <a href="paketwisata.php">Lihat Daftar Paket Wisata</a> <br> <br>
        <a href="paketmobil.php">Lihat Daftar Paket Sewa Mobil</a>

        <br> <br>
        <?php
        echo "Silahkan Klik --> "
        ?>
        <a href="booking.php" class="btn btn-primary">Booking</a>
        <?php
        echo "Untuk Pemesanan Paket."
        ?>
    </div>


</div>
    <div class="footer page-top">
        <header>
            <?php include 'footer.php';?>
        </header>
    </div>

</body>
</html>