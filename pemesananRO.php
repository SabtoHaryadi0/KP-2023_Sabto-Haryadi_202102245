<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/stylePesan.css">
    <title>Form Pemesanan Air Galon</title>
</head>

<body>

    <h1>Form Pemesanan Air Galon RO</h1>

    <form id="formPemesanan" method="post" action="proses_pemesanan.php">
        <label for=" nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required></textarea><br>

        <label for="jumlah">Jumlah Galon:</label>
        <input type="number" name="jumlah" required><br>

        <input type="submit" value="Pesan">
        <a href="index.html" class="custom-button">
            <<< back </a>
    </form>

</body>