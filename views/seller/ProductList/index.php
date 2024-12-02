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
        <div class="ml-16 bg-gray-100 h-max pb-12 transition-all duration-200 ease-in-out pt-24 flex flex-col gap-4">
            <h1 class="text-4xl w-4/5 mx-auto border-b pb-3 border-gray-200 font-semibold">Makanan</h1>
            <div class="w-4/5 h-max grid grid-rows-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 mx-auto *:text-center *:py-5 *:px-6 *:rounded-2xl *:h-[30rem] hover:*:shadow-xl *:transition-shadow *:duration-200">
                <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
                <div class="flex flex-col h-full gap-3 bg-white">
                <!-- Product Image -->
                <div class=" w-full h-1/2 *:rounded-xl">
                    <img src="../../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
                </div>

                <!-- Details  -->
                <div class="flex flex-col h-full ">
                    <!-- Title & Description-->
                    <div class="w-full h-full flex flex-col justify-between text-left">
                    <div class="flex flex-col gap-2 items-start">
                        <div class="">
                        <h2 class="font-bold text-lg">Produk</h2>
                        </div>
                        <h3 class="text-base line-clamp-4 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis facilis, doloribus nostrum neque dolores quaerat aut eligendi earum error nesciunt dignissimos incidunt quidem obcaecati adipisci molestias necessitatibus. Eum, earum consequuntur.</h3>
                    </div>
                    </div>
                    <!-- Price -->
                    <div class="flex flex-row justify-between items-center">
                    <h3 class="">12.000</h3>
                    <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Hapus</button>
                    </div>
                </div>
                <!-- Details END -->
                </div>
                <!-- Product Card END-->       
            </div>
            <h1 class="text-4xl w-4/5 mx-auto border-b pb-3 border-gray-200 font-semibold">Minuman</h1>
            <div class="w-4/5 h-max grid grid-rows-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 mx-auto *:text-center *:py-5 *:px-6 *:rounded-2xl *:h-[30rem] hover:*:shadow-xl *:transition-shadow *:duration-200">
                <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
                <div class="flex flex-col h-full gap-3 bg-white">
                <!-- Product Image -->
                <div class=" w-full h-1/2 *:rounded-xl">
                    <img src="../../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
                </div>

                <!-- Details  -->
                <div class="flex flex-col h-full ">
                    <!-- Title & Description-->
                    <div class="w-full h-full flex flex-col justify-between text-left">
                    <div class="flex flex-col gap-2 items-start">
                        <div class="">
                        <h2 class="font-bold text-lg">Produk</h2>
                        </div>
                        <h3 class="text-base line-clamp-4 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis facilis, doloribus nostrum neque dolores quaerat aut eligendi earum error nesciunt dignissimos incidunt quidem obcaecati adipisci molestias necessitatibus. Eum, earum consequuntur.</h3>
                    </div>
                    </div>
                    <!-- Price -->
                    <div class="flex flex-row justify-between items-center">
                    <h3 class="">12.000</h3>
                    <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Hapus</button>
                    </div>
                </div>
                <!-- Details END -->
                </div>
                <!-- Product Card END-->       
            </div>
            <h1 class="text-4xl w-4/5 mx-auto border-b pb-3 border-gray-200 font-semibold">Jajanan</h1>
            <div class="w-4/5 h-max grid grid-rows-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 mx-auto *:text-center *:py-5 *:px-6 *:rounded-2xl *:h-[30rem] hover:*:shadow-xl *:transition-shadow *:duration-200">
                <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
                <div class="flex flex-col h-full gap-3 bg-white">
                <!-- Product Image -->
                <div class=" w-full h-1/2 *:rounded-xl">
                    <img src="../../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
                </div>

                <!-- Details  -->
                <div class="flex flex-col h-full ">
                    <!-- Title & Description-->
                    <div class="w-full h-full flex flex-col justify-between text-left">
                    <div class="flex flex-col gap-2 items-start">
                        <div class="">
                        <h2 class="font-bold text-lg">Produk</h2>
                        </div>
                        <h3 class="text-base line-clamp-4 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis facilis, doloribus nostrum neque dolores quaerat aut eligendi earum error nesciunt dignissimos incidunt quidem obcaecati adipisci molestias necessitatibus. Eum, earum consequuntur.</h3>
                    </div>
                    </div>
                    <!-- Price -->
                    <div class="flex flex-row justify-between items-center">
                    <h3 class="">12.000</h3>
                    <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Hapus</button>
                    </div>
                </div>
                <!-- Details END -->
                </div>
                <!-- Product Card END-->       
            </div>
            
        </div>
        <script type="module" src="../../../assets/js/sellerBar.js"></script>
    </body>
</html>
