<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'pwa-galon');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username dan password sesuai dengan data di database
    if ($username === 'user1' && $password === 'user3') {
        // Autentikasi berhasil
        $_SESSION['username'] = $username;
        header('Location: data_pemesanan.php'); // Redirect ke halaman setelah login
        exit();
    } else {
        // Autentikasi gagal
        $error = "Username atau password salah.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Proses Login</title>
</head>

<body>
    <?php if (isset($error)) { ?>
        <p style="color: red;">
            <?php echo $error; ?>
        </p>
    <?php } ?>
</body>

</html>