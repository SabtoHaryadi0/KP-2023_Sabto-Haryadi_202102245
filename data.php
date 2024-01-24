<?php
// Connect to the database 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "pwa-galon";
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Ambil data pemesanan dari kedua tabel
$sql = "SELECT id, nama, alamat, jumlah, tanggal_pemesanan FROM pesananro ORDER BY tanggal_pemesanan DESC";
$result_pesanan = $conn->query($sql);

$sql2 = "SELECT id, nama, alamat, jumlah, tanggal_pemesanan FROM pesananbiasa ORDER BY tanggal_pemesanan DESC";
$result_tabel_kedua = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Riwayat Pemesanan</h1>

    <h2>Riwayat Pemesanan Air RO</h2>
    <?php
    // Fungsi untuk menghasilkan string acak
    function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    $generated_id = generateRandomString(8);
    if ($result_pesanan->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jumlah</th><th>Tanggal Pemesanan</th></tr>";
        while ($row = $result_pesanan->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["alamat"] . "</td>";
            echo "<td>" . $row["jumlah"] . "</td>";
            echo "<td>" . $row["tanggal_pemesanan"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Tidak ada data pemesanan.</p>";
    }
    ?>

    <h2>Riwayat Pemesanan Air Biasa</h2>
    <?php
    if ($result_tabel_kedua->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jumlah</th><th>Tanggal Pemesanan</th></tr>";
        while ($row = $result_tabel_kedua->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["alamat"] . "</td>";
            echo "<td>" . $row["jumlah"] . "</td>";
            echo "<td>" . $row["tanggal_pemesanan"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Tidak ada data pemesanan.</p>";
    }
    ?>

</body>

</html>