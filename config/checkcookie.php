<?php 
require 'connect.php';

// cek cookie
function check_cookie(){
    global $conn;
    if(isset($_COOKIE['axdy']) && isset($_COOKIE['key'])){
        $id = $_COOKIE['axdy'];
        $key = $_COOKIE['key'];
      
        // ambil usn berdasarkan id
        $query = "SELECT * FROM Users
                    WHERE
                user_id = '$id';";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
      
        // cek cookie dan username
        if(hash('sha256', $row['username']) === $key){
            $_SESSION["logged"] = true;
            $_SESSION["username"] = $row["username"];
            $_SESSION["id"] = $row["user_id"];
            $_SESSION["role"] = $row["role"];
        }
      }
}
?>