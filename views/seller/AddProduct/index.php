<?php 
    session_start();

    require '../../../controllers/seller.php';
    require '../../../controllers/getdata.php';
    require '../../../config/checkcookie.php';

    check_cookie();

    if(!isset($_SESSION['logged'])){
        header("Location: ../../unauthorized");
    } else if($_SESSION['role'] != 'seller' && $_SESSION['role'] != 'admin'){
        header('Location: ../../unauthorized');
    }

    // var_dump($seller_id);
    if(isset($_POST['submit'])){
        $seller_id = getSeller();
        $seller_id = $seller_id[0]['seller_id'];
        $result = addProduct($_POST, $seller_id);
        if($result > 0){
            header("Location: ../Dashboard");
        }
    }

    // var_dump($_SESSION)
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
        <div class="ml-16 bg-gray-100 h-screen transition-all duration-200 ease-in-out pt-24 px-8">
            <div class="bg-white w-full rounded-xl p-6 flex flex-col justify-center">
                    <h1 class="mt-6 text-6xl text-primary-400 font-bold text-center">Add your Product</h1>
                    <h3 class="my-6 text-center font-normal text-lg text-gray-600">Let customers know what you're selling!</h3>
                    <form action="" method="POST" class="px-20 *:mb-6" enctype="multipart/form-data">
                        <div>
                            <label class="sr-only" for="name">Product Name</label>
                            <input
                            class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                            placeholder="Product Name"
                            type="text"
                            name="productName"
                            id="Product-Name"
                            />
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div>
                            <label class="sr-only" for="email">Price</label>
                            <input
                                class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                                placeholder="Price"
                                type="number"
                                name="price"
                                id="email"
                            />
                            </div>

                            <div>
                            <label class="sr-only" for="Stock">Stock</label>
                            <input
                                class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                                placeholder="Stock"
                                type="number"
                                name="stock"
                                id="Stock"
                            />
                            </div>

                            <div>
                            <label class="sr-only" for="Category">Category</label>
                            <input
                                class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                                placeholder="Category [Makanan - Minuman]"
                                type="text"
                                name="category"
                                id="Category"
                            />
                            </div>
                        </div>
                        <div>
                            <label class="" for="productImage">Product Image</label>
                            <div class="w-full rounded-lg border border-gray-200 p-3 text-sm mt-1">
                                <input
                                class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-400 file:text-white hover:file:bg-primary-500"
                                placeholder="Product Image"
                                type="file"
                                name="productImage"
                                id="productImage"
                                />
                            </div>
                        </div>
                        <div>
                            <label class="sr-only" for="Description">Description</label>
                            <textarea
                            class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                            placeholder="Description"
                            name="description"
                            rows="4"
                            id="Description"
                            ></textarea>
                        </div>
                        <div>
                            <button
                            class="group relative inline-block overflow-hidden border rounded-lg border-primary-600 px-8 py-3 focus:outline-none focus:ring"
                            type="submit"
                            name="submit"
                            >
                            <span
                                class="absolute inset-y-0 left-0 w-[2px] bg-primary-600 transition-all group-hover:w-full group-active:bg-primary-500"
                            ></span>
                            <span
                                class="relative text-sm font-medium text-primary-600 transition-colors group-hover:text-white"
                            >
                                Submit
                            </span>
                            </button>
                        </div>
                    </form>
            </div>
        </div>

        <script type="module" src="../../../assets/js/sellerBar.js"></script>
    </body>
</html>
