<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require '../../config/connect.php';

function regist_user($data) {
    global $conn;

    // Ambil data dari parameter $data
    $username = mysqli_real_escape_string($conn, $data['username']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $password = mysqli_real_escape_string($conn, $data['password']);

    // Periksa apakah username sudah digunakan
    $checkUsername = mysqli_query($conn, "SELECT username FROM Users WHERE username = '$username'");
    if (mysqli_fetch_assoc($checkUsername)) {
        return 'username_already_used';
    }

    $checkEmail = mysqli_query($conn, "SELECT email FROM Users WHERE email = '$email'");
    if (mysqli_fetch_assoc($checkEmail)) {
        return 'email_already_used';
    }


    // Hash password untuk keamanan
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memasukkan data ke tabel Users
    $query = "INSERT INTO `Users` 
        (`user_id`, 
         `username`, 
         `email`, 
         `password`, 
         `first_name`, 
         `last_name`, 
         `phone_number`, 
         `address`, 
         `role`, 
         `school`, 
         `created_at`, 
         `updated_at`) 
            VALUES 
        (NULL, 
         '$username', 
         '$email', 
         '$hashedPassword', 
         NULL, 
         NULL, 
         NULL, 
         NULL, 
         'customer', 
         'SMA Negeri 3 Jombang', 
         CURRENT_TIMESTAMP(), 
         CURRENT_TIMESTAMP()
        );";

    // Jalankan query
    $result = mysqli_query($conn, $query);

    // Kembalikan status berdasarkan hasil query
    return $result ? "success" : "failed: " . mysqli_error($conn);
}

function seller_regist($data){
    global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $canteenName = mysqli_real_escape_string( $conn, $data["canteenName"]);
    $keys = mysqli_real_escape_string( $conn, $data["keys"]);

    // Periksa apakah username sudah digunakan
    $checkUsername = mysqli_query($conn, "SELECT username FROM Users WHERE username = '$username'");
    if (mysqli_fetch_assoc($checkUsername)) {
        return 'username_already_used';
    }

    $checkEmail = mysqli_query($conn, "SELECT email FROM Users WHERE email = '$email'");
    if (mysqli_fetch_assoc($checkEmail)) {
        return 'email_already_used';
    }

    // cek apakah key valid
    $queryKey = "SELECT * FROM GeneratedKeys WHERE key_value = '$keys' AND expires_at > NOW()";
    $resultKey = mysqli_query($conn, $queryKey);
    
    if(mysqli_num_rows($resultKey) === 0){
        return "invalid_key";
    }
    
    // delete key jika berhasil
    $queryDeleteKey = "DELETE FROM GeneratedKeys WHERE key_value = '$keys'";
    mysqli_query($conn, $queryDeleteKey);

    // Hash Password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memasukkan data ke tabel Users
    $queryUsers = "INSERT INTO `Users` 
        (`user_id`, 
         `username`, 
         `email`, 
         `password`, 
         `first_name`, 
         `last_name`, 
         `phone_number`, 
         `address`, 
         `role`, 
         `school`, 
         `created_at`, 
         `updated_at`) 
            VALUES 
        (NULL, 
         '$username', 
         '$email', 
         '$hashedPassword', 
         NULL, 
         NULL, 
         NULL, 
         NULL, 
         'seller', 
         'SMA Negeri 3 Jombang', 
         CURRENT_TIMESTAMP(), 
         CURRENT_TIMESTAMP()
        );";

    $resultAddUser = mysqli_query($conn, $queryUsers);
    // Ambil user_id yang baru saja dibuat
    $userId = mysqli_insert_id($conn);

    $querySeller = "INSERT INTO `Sellers` 
        (`seller_id`, 
         `user_id`, 
         `store_name`, 
         `school`, 
         `description`, 
         `rating`, 
         `created_at`, 
         `updated_at`) 
            VALUES 
        (NULL, 
         '$userId', 
         '$canteenName', 
         'SMA Negeri 3 Jombang', 
         NULL, 
         NULL, 
         CURRENT_TIMESTAMP(), 
         CURRENT_TIMESTAMP()
        );";

    $resultAddSeller = mysqli_query($conn, $querySeller);

    return $resultAddSeller == $resultAddUser ? "success":"failed : " . mysqli_error($conn);
}
?>