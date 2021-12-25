<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Paket Wisata</title>
        <link rel="stylesheet" href="style2.css" type="text/css">
    </head>
    <body>
        <table>
            <tr>
                <th> Id </th>
                <th> Jenis Paket </th>
                <th> Harga </th>
                <th> Keterangan </th>
            </tr>
            <?php
                include "koneksi.php";

                $query ="SELECT * FROM paketwisata";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result)> 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td> <?php echo $row["Id"] ?> </td>
                <td> <?php echo $row["Jenis_Paket"] ?> </td>
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
    </body>
</html>