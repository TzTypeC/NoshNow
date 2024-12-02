<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../../assets/css/tailwind.css">
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NoshNow</title>
  </head>
  <body class="font-poppins">

    <!-- Navbar -->
    <?php include '../layout/header.php';?>

    <!-- Pengganjal :p -->
    <div class="bg-white w-full h-16"></div> 
    <div class="w-[calc(100%_-_48px)] xl:w-[calc(100%_-_240px)]  h-max flex flex-col gap-6 mx-auto mt-8">
        <h1 class="text-4xl border-b pb-3 border-gray-200 font-semibold">Kantin 1</h1>
        <div class="flex flex-col md:flex-row gap-6">
          <!-- Store Banner -->
          <div class="w-full h-48 md:w-96 md:h-[40rem] rounded-2xl bg-clip-border">
            <img src="../../assets/img/default-md.svg" alt="" class="w-full h-full object-cover rounded-2xl ">
          </div>
          
          <!-- Store Products/Grid -->
          <div class="w-full h-max grid grid-rows-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 mx-auto *:text-center *:py-5 *:px-6 *:rounded-2xl *:h-[30rem] hover:*:shadow-xl *:transition-shadow *:duration-200">
            
            <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-1/2 *:rounded-xl">
                <img src="../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
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
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              <!-- Details END -->
            </div>
            <!-- Product Card END-->

            <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-1/2 *:rounded-xl">
                <img src="../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
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
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              <!-- Details END -->
            </div>
            <!-- Product Card END-->

            <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-1/2 *:rounded-xl">
                <img src="../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
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
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              <!-- Details END -->
            </div>
            <!-- Product Card END-->

            <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-1/2 *:rounded-xl">
                <img src="../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
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
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              <!-- Details END -->
            </div>
            <!-- Product Card END-->

            <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-1/2 *:rounded-xl">
                <img src="../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
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
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              <!-- Details END -->
            </div>
            <!-- Product Card END-->

            <!-- Product Card *UNTUK TEMPLATE PRODUK, COPAS-ABLE-->
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-1/2 *:rounded-xl">
                <img src="../../assets/img/product.png" alt="" class="object-cover w-full h-full"> 
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
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              <!-- Details END -->
            </div>
            <!-- Product Card END-->

            

      </div>

        </div>
      </div>
      
  </body>
</html>