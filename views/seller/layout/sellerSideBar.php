<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $url = $_SERVER['REQUEST_URI'];
    // Pecah URL menjadi array berdasarkan '/'

    $pathParts = explode('/', trim($url, '/'));

    // Ambil dua elemen terakhir dari array
    $lastTwoPaths = array_slice($pathParts, -2);

    // Gabungkan kembali menjadi string dengan '/'
    $finalPath = implode('/', $lastTwoPaths);

    // echo $finalPath; // Output: seller/dashboard atau seller/dashboard/index.php
?>

<div id="sidebar" data-expanded="false" class="w-28 bg-white h-screen rounded-none fixed border-none transition-all duration-200 ease-in-out overflow-hidden">
    <!-- Items -->
    <div class="p-2 space-y-4">
        <!-- Home -->
        <!-- <?php var_dump($finalPath) ?> -->
        <button class="relative px-3 py-3 <?= ($finalPath == 'seller/Dashboard' || $finalPath == 'Dashboard/index.php') ? 'text-primary-500' : 'text-gray-500';?> flex items-center space-x-4 justify-start rounded-lg group" onclick="window.location.href='../Dashboard'">
            <i class="fas fa-home text-lg"></i>
            <span class="font-medium transition-all duration-200 opacity-0" id="home">Home</span>
        </button>

        <!-- Profile -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start <?= ($finalPath == 'seller/Profile' || $finalPath == 'Profile/index.php') ? 'text-primary-500' : 'text-gray-500';?> rounded-lg group" onclick="window.location.href='../Profile'">
            <i class="fas fa-user text-lg"></i>
            <span class="font-medium transition-all duration-200 opacity-0" id="profile"></span>
        </button>

        <!-- Add Product -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start <?= ($finalPath == 'seller/AddProduct' || $finalPath == 'AddProduct/index.php') ? 'text-primary-500' : 'text-gray-500'?> rounded-lg group" onclick="window.location.href='../AddProduct'">
            <i class="fas fa-square-caret-down"></i>
            <span class="font-medium transition-all duration-200 opacity-0" id="addProduct"></span>
        </button>

        <!-- Product List -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start <?= ($finalPath == 'seller/ProductList' || $finalPath == 'ProductList/index.php') ? 'text-primary-500' : 'text-gray-500'?> rounded-lg group" onclick="window.location.href='../ProductList'">
            <i class="fas fa-boxes-stacked"></i>
            <span class="font-medium transition-all duration-200 opacity-0" id="productList"></span>
        </button>

        <!-- Transacciones -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start <?= ($finalPath == 'seller/Transaction' || $finalPath == 'Transaction/index.php') ? 'text-primary-500' : 'text-gray-500'?> rounded-lg group" onclick="window.location.href='../Transaction'">
            <i class="fas fa-exchange-alt"></i>
            <span class="font-medium transition-all duration-200 opacity-0" id="transaction"></span>
        </button>

        <!-- Logout -->
        <button class="relative px-3 py-3 flex items-center space-x-4 justify-start text-gray-500 rounded-lg group" onclick="window.location.href='../../../controllers/logout.php'">
            <i class="fas fa-sign-out-alt"></i>
            <span class="font-medium transition-all duration-200 opacity-0" id="logout"></span>
        </button>
    </div>
</div>