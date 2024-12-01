<?php
session_start();
require '../../config/connect.php';

if(!isset($_SESSION['logged'])){
    header("Location: ../unauthorized");
} else if(isset($_SESSION["logged"]) && $_SESSION["role"] != 'admin'){
    header('Location: ../unauthorized');
}

// Cek apakah ada key yang masih berlaku
$query = "SELECT * FROM GeneratedKeys WHERE expires_at > NOW()";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 0) {
    // Durasi key (contoh: 12 jam)
    $duration = 12 * 60 * 60; // 12 jam dalam detik
    $expires_at = date('Y-m-d H:i:s', time() + $duration);

    // Generate key baru
    $key = bin2hex(random_bytes(4)); // 8 karakter hexadecimal

    // Masukkan key baru ke database
    $insert_query = "INSERT INTO GeneratedKeys (key_value, expires_at) VALUES ('$key', '$expires_at')";
    mysqli_query($conn, $insert_query);
}

// Ambil key yang berlaku
$active_key_query = "SELECT * FROM GeneratedKeys WHERE expires_at > NOW() ORDER BY created_at DESC LIMIT 1";
$active_key_result = mysqli_query($conn, $active_key_query);
$active_key = mysqli_fetch_assoc($active_key_result);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Key</title>
</head>
<body>
    <h1>Current Active Key</h1>
    <p>Key: <strong><?= $active_key['key_value'] ?></strong></p>
    <p>Expires At: <strong><?= $active_key['expires_at'] ?></strong></p>
</body>
</html>
