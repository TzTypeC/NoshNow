<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    require __DIR__ . '/../config/connect.php';

    function getUsers(){
        global $conn;
        $id = $_SESSION['id'];
        // var_dump($id);
        $query = "SELECT * FROM `Users`
                    WHERE
                user_id = $id";
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }    
    function getSeller(){
        global $conn;
        global $conn;
        $id = $_SESSION['id'];
        // var_dump($id);
        $query = "SELECT * FROM `Sellers`
                    WHERE
                user_id = $id";
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
?>