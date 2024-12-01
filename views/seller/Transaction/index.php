<?php 
session_start();

    if(!isset($_SESSION['logged'])){
        header("Location: ../../unauthorized");
    } else if($_SESSION['role'] != 'seller' && $_SESSION['role'] != 'admin'){
        header('Location: ../../unauthorized');
    }
?>
<!DOCTYPE html>
<html lang="us">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seller Dashboard</title>
        <link href="../../../assets/css/tailwind.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- Navbar -->
        <?php include '../layout/sellerNavBar.php';?>
        
        <!-- Side Bar -->
        <?php include '../layout/sellerSideBar.php';?>



        <!-- Content -->
        <div class="ml-16 bg-gray-100 h-screen fixed w-full transition-all duration-200 ease-in-out p-5">
            <!-- Maintenance -->
            <?php include '../layout/maintenance.php';?>
        </div>

        <script type="module" src="../../../assets/js/sellerBar.js"></script>
    </body>
</html>
