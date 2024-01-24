<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... -->
</head>

<body>
    <?php
    // Tampilkan notifikasi jika ada
    session_start();
    if (isset($_SESSION['success_message'])) {
        echo "<p style='color: green;'>" . $_SESSION['success_message'] . "</p>";
        unset($_SESSION['success_message']); // Hapus notifikasi setelah ditampilkan
    }

    ?>

    <h1>Form Pemesanan Air Galon</h1>

    <form method="post" action="pemesananro.php">
        <!-- ... -->
    </form>
</body>

</html>