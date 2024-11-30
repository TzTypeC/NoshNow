<?php 
    if(!isset($_SESSION['logged'])){
        header("Location: ../landing");
    } else if(isset($_SESSION["logged"]) && $_SESSION["role"] != 'seller'){
        header('Location: ../landing');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello Seller
</body>
</html>