<?php 
session_start();

    if(!isset($_SESSION['logged'])){
        header("Location: ../../unauthorized");
    } else if($_SESSION['role'] != 'seller' && $_SESSION['role'] != 'admin'){
        header('Location: ../../unauthorized');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    <link rel="stylesheet" href="../../../assets/css/tailwind.css">
</head>
<body>
    <h1>Hello <?= $_SESSION['username'] ?></h1>
</body>
</html>
