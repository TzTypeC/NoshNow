<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require '../../config/connect.php';

function login_user($data) {
    global $conn;

    // Escape input untuk mencegah SQL injection
    $email = mysqli_real_escape_string($conn, $data['email']);
    $password = mysqli_real_escape_string($conn, $data['password']);

    $query = "SELECT * FROM Users WHERE email = '$email';";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Cek password
        if (password_verify($password, $row["password"])) {
            // Jika login sukses, set session
            $_SESSION["logged"] = true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["id"] = $row["user_id"];
            $_SESSION["role"] = $row["role"];

            // Jika pengguna memilih untuk tetap login, set cookie
            if (isset($data["remember"])) {
                setcookie("axdy", $row['user_id'], time() + 60 * 60 * 24 * 30, '/'); // 30 hari
                setcookie("key", hash("sha256", $row["username"]), time() + 60 * 60 * 24 * 30, '/'); // 30 hari
            }

            return $row['role']; // Pengguna berhasil login
        }
        return 'error'; // Jika tidak ada pengguna yang cocok atau password salah
    }
    return 'error'; // Jika tidak ada pengguna yang cocok atau password salah
    
}
?>
