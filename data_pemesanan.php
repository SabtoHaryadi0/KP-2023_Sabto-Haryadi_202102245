<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <style>
        h1 {
            text-align: center;
            color: #333;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        th,
        td {
            border: 4px solid #ddd;
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
        }

        th {
            background-color: #f8f8f8;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .success-message {
            color: #27ae60;
            font-weight: bold;
            margin-bottom: 15px;
        }

        /* Media Queries */

        /* Laptop */
        @media(max-width: 1366px) {
            html {
                font-size: 75%;
            }
        }

        /* Tablet */
        @media(max-width: 768px) {
            html {
                font-size: 62.5%;
            }
        }

        /* Mobile */
        @media(max-width: 450px) {
            html {
                font-size: 55%;
            }
        }

        /* Media Queries End */
    </style>

</head>

<body>
    <h1>Data Pemesanan Air galon</h1>
    <br>

    <div class="ro">
        <h3>Data pemesanan air RO</h3>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Pengantaran</th>
            </tr>

            <?php
            include "koneksi.php";
            $no = 1;
            $ambildata = mysqli_query($koneksi, "select * from pesananro");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo " 
            <tr>
                <td>$no</td>
                <td>$tampil[nama]</td>
                <td>$tampil[alamat]</td>
                <td>$tampil[jumlah]</td>
                <td>$tampil[tanggal_pemesanan]</td>
                <td><a href='?kode=$tampil[nama]'>Konfirmasi</td>
            </tr>
            ";
                $no++;
            }

            ?>

        </table>

        <?php
        if (isset($_GET['kode'])) {
            mysqli_query($koneksi, "delete from pesananro where nama='$_GET[kode]'");
            echo "Data terkonfirmasi";
            echo "<meta http-equiv=refresh content=2;URL='data_pemesanan.php'>";
        }
        ?>
    </div>
    <br>
    <div class="biasa">
        <h3>Data pemesanan air biasa</h3>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Pengantaran</th>
            </tr>

            <?php
            include "koneksi.php";
            $no = 1;
            $ambildata = mysqli_query($koneksi, "select * from pesananbiasa");
            while ($tampil = mysqli_fetch_array($ambildata)) {
                echo " 
            <tr>
                <td>$no</td>
                <td>$tampil[nama]</td>
                <td>$tampil[alamat]</td>
                <td>$tampil[jumlah]</td>
                <td>$tampil[tanggal_pemesanan]</td>
                <td><a href='?tombol=$tampil[nama]'>Konfirmasi</td>
            </tr>
            ";
                $no++;
            }

            ?>

        </table>
        <?php
        if (isset($_GET['tombol'])) {
            mysqli_query($koneksi, "delete from pesananbiasa where nama='$_GET[tombol]'");
            echo "Data terkonfirmasi";
            echo "<meta http-equiv=refresh content=2;URL='data_pemesanan.php'>";
        }
        ?>
    </div>


</body>

</html>