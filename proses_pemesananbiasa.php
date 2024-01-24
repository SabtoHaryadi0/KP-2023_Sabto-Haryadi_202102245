<?php
session_start();
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "pwa-galon";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jumlah = $_POST["jumlah"];

// Simpan data ke database
$sql = "INSERT INTO pesananbiasa (nama, alamat, jumlah) VALUES ('$nama', '$alamat', '$jumlah')";

if (mysqli_query($conn, $sql)) {
    echo "<meta http-equiv=refresh content=2;URL='index.html'>";
} else {
    echo "Pemesanan gagal: " . mysqli_error($conn);
}

// Tutup koneksi database
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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

</body>

</html>