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
        <div class="ml-16 bg-gray-100 h-screen transition-all duration-200 ease-in-out pt-24">
            <div class="flex flex-col">
                <div class="flex flex-row justify-evenly">
                    <article class="flex items-center gap-4 rounded-lg border border-gray-100 w-1/4 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-8"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                            >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                            />
                            </svg>
                        </span>

                        <div>
                            <p class="text-2xl font-medium text-gray-900">Rp.0.00</p>

                            <p class="text-sm text-gray-500">Balance</p>
                        </div>
                    </article>
                    <article class="flex items-center gap-4 rounded-lg border border-gray-100 w-1/4 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                            <i class="fa-solid fa-bag-shopping text-xl"></i>
                        </span>
                            
                        <div>
                            <p class="text-2xl font-medium text-gray-900">0</p>
                            
                            <p class="text-sm text-gray-500">Items Sold</p>
                        </div>
                    </article>
                    <article class="flex items-center gap-4 rounded-lg border border-gray-100 w-1/4 bg-white p-6">
                        <span class="rounded-full bg-blue-100 p-3 text-blue-600">
                            <i class="fa-solid fa-box text-xl"></i>
                        </span>

                        <div>
                            <p class="text-2xl font-medium text-gray-900">0</p>

                            <p class="text-sm text-gray-500">Total Product</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <script type="module" src="../../../assets/js/sellerBar.js"></script>
    </body>
</html>
