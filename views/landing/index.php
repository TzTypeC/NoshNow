<?php 
session_start();

// var_dump($_SESSION["role"]);

require '../../config/checkcookie.php';
check_cookie();

if(isset($_SESSION['logged']) && $_SESSION['role']=='seller'){
      header("Location: ../seller/Dashboard/");
}

?>

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

    <!-- Main Banner Wrapper -->
    <div class="*:text-white bg-primary-400 w-[99%] h-[50vh] mx-auto flex flex-col rounded-3xl justify-center gap-3">
      <i class='text-9xl text-center bx bxs-bowl-rice drop-shadow-XL'></i>
      <h1 class="font-semibold text-5xl text-center mx-auto">Have a Nosh, Right Now</h1>
      <h3 class="text-lg text-center mx-auto whitespace-pre-line mb-14">Purchase your favorite meals from your favorite places
        here, on our web. As smooth as in the app. Same fast
        delivery. Countless restos to try.
      </h3>
    </div>
    <!-- Main Banner END -->

    <!-- Location field -->
    <div class="bg-white w-[30rem] h-32 absolute left-[50%] -translate-x-[15rem] -translate-y-16 rounded-2xl shadow-xl flex flex-col p-6 gap-2" >
    <span class="text-base">Pilih Sekolah</span>
    <div class="w-full h-12 border border-gray-300 bg-white hover:bg-gray-100 transition-all ease-in-out duration-200 delay-0 rounded-full flex justify-between px-4 cursor-pointer"> 
      <!-- Input Dropdown -->
      <div class="my-auto flex flex-row gap-2.5 items-center">
        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="crimson">
          <path d="M479.59-79q-14.26 0-29.18-5t-26.08-15Q368.67-146.67 316-199.67t-93.67-110.5q-41-57.5-65.66-119.16Q132-491 132-555.33q0-161.06 105.09-257.2Q342.17-908.67 480-908.67q137.83 0 243.25 96.14 105.42 96.14 105.42 257.2 0 64.33-25 126-25 61.66-66 119.16T644-199.67q-52.67 53-107.67 100.67-11.95 10-27.21 15-15.26 5-29.53 5Zm.47-399.67q34.61 0 58.27-23.39 23.67-23.39 23.67-58t-23.73-58.27Q514.55-642 479.94-642T422-618.27q-23.33 23.72-23.33 58.33T422.06-502q23.39 23.33 58 23.33Z"/>
        </svg>
        <span>SMA Negeri 3 Jombang</span>
      </div>

      <i class='bx bxs-chevron-down my-auto text-xl text-gray-500'></i>
    </div>
    </div>

    <!-- Contents -->
    <div class="flex flex-col gap-8 mt-24">  
      <span class="text-center text-2xl font-medium">Kamu mw bli apa bub</span>
      <div class="flex justify-center gap-6 font-medium text-lg items-center *:border *:border-gray-200 *:size-48 *:rounded-2xl hover:*:shadow-xl *:transition-shadow *:duration-200">
        <button>Makanan</button>
        <button>Minuman</button>
        <button>Jajanan</button>
        <button>Perlengkapan Sekolah</button>
        <a href="../kantin" class="last:border-0 last:size-max last:rounded-none last:hover:shadow-none hover:drop-shadow-md justify-center items-center ml-5 object-center text-gray-400">Jelajahi kantin.. ></a>
        
      </div>
   
      <span class="text-center text-2xl font-medium mt-24">Jelajahi menu <span class="underline font-semibold">SMA Negeri 3 Jombang</span></span>
      <div class="w-[75vw] h-max grid grid-cols-4 gap-6 mx-auto *:text-center *:py-5 *:px-6 *:rounded-2xl *:h-[30rem] hover:*:shadow-xl *:transition-shadow *:duration-200">
            <!-- Grid Content Wrapper -->
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-full  *:rounded-xl">
                <img src="./assets/images.jpg" alt="" class="object-cover w-full">
              </div>
              
              
              <!-- Details Wrapper -->
              <div class="flex flex-col h-full ">
                <div class="w-full h-full flex flex-col justify-between text-left">
                  <!-- Product Name & Price -->
                  <div class="flex flex-col gap-2 items-start">
                    <div class="">
                      <h2 class="font-bold text-lg">N-Methyl-2-propanimine</h2>
                      <h2>by <span class="underline italic">Kantin -1</span></h2>
                    </div>
                    <h3 class="text-base line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                  </div>
                  
                  
                  
                </div>
                <div class="flex flex-row justify-between items-center">
                  <h3 class="">12.000</h3>
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              

            </div>
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-full  *:rounded-xl">
                <img src="./assets/images.jpg" alt="" class="object-cover w-full">
              </div>
              
              
              <!-- Details Wrapper -->
              <div class="flex flex-col h-full ">
                <div class="w-full h-full flex flex-col justify-between text-left">
                  <!-- Product Name & Price -->
                  <div class="flex flex-col gap-2 items-start">
                    <div class="">
                      <h2 class="font-bold text-lg">N-Methyl-2-propanimine</h2>
                      <h2>by <span class="underline italic">Kantin -1</span></h2>
                    </div>
                    <h3 class="text-base line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                  </div>
                  
                  
                  
                </div>
                <div class="flex flex-row justify-between items-center">
                  <h3 class="">12.000</h3>
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              

            </div>
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-full  *:rounded-xl">
                <img src="./assets/images.jpg" alt="" class="object-cover w-full">
              </div>
              
              
              <!-- Details Wrapper -->
              <div class="flex flex-col h-full ">
                <div class="w-full h-full flex flex-col justify-between text-left">
                  <!-- Product Name & Price -->
                  <div class="flex flex-col gap-2 items-start">
                    <div class="">
                      <h2 class="font-bold text-lg">N-Methyl-2-propanimine</h2>
                      <h2>by <span class="underline italic">Kantin -1</span></h2>
                    </div>
                    <h3 class="text-base line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                  </div>
                  
                  
                  
                </div>
                <div class="flex flex-row justify-between items-center">
                  <h3 class="">12.000</h3>
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              

            </div>
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-full  *:rounded-xl">
                <img src="./assets/images.jpg" alt="" class="object-cover w-full">
              </div>
              
              
              <!-- Details Wrapper -->
              <div class="flex flex-col h-full ">
                <div class="w-full h-full flex flex-col justify-between text-left">
                  <!-- Product Name & Price -->
                  <div class="flex flex-col gap-2 items-start">
                    <div class="">
                      <h2 class="font-bold text-lg">N-Methyl-2-propanimine</h2>
                      <h2>by <span class="underline italic">Kantin -1</span></h2>
                    </div>
                    <h3 class="text-base line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                  </div>
                  
                  
                  
                </div>
                <div class="flex flex-row justify-between items-center">
                  <h3 class="">12.000</h3>
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              

            </div>
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-full  *:rounded-xl">
                <img src="./assets/images.jpg" alt="" class="object-cover w-full">
              </div>
              
              
              <!-- Details Wrapper -->
              <div class="flex flex-col h-full ">
                <div class="w-full h-full flex flex-col justify-between text-left">
                  <!-- Product Name & Price -->
                  <div class="flex flex-col gap-2 items-start">
                    <div class="">
                      <h2 class="font-bold text-lg">N-Methyl-2-propanimine</h2>
                      <h2>by <span class="underline italic">Kantin -1</span></h2>
                    </div>
                    <h3 class="text-base line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                  </div>
                  
                  
                  
                </div>
                <div class="flex flex-row justify-between items-center">
                  <h3 class="">12.000</h3>
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              

            </div>
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-full  *:rounded-xl">
                <img src="./assets/images.jpg" alt="" class="object-cover w-full">
              </div>
              
              
              <!-- Details Wrapper -->
              <div class="flex flex-col h-full ">
                <div class="w-full h-full flex flex-col justify-between text-left">
                  <!-- Product Name & Price -->
                  <div class="flex flex-col gap-2 items-start">
                    <div class="">
                      <h2 class="font-bold text-lg">N-Methyl-2-propanimine</h2>
                      <h2>by <span class="underline italic">Kantin -1</span></h2>
                    </div>
                    <h3 class="text-base line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                  </div>
                  
                  
                  
                </div>
                <div class="flex flex-row justify-between items-center">
                  <h3 class="">12.000</h3>
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              

            </div>
            <div class="flex flex-col h-full gap-3">
              <!-- Product Image -->
              <div class=" w-full h-full  *:rounded-xl">
                <img src="./assets/images.jpg" alt="" class="object-cover w-full">
              </div>
              
              
              <!-- Details Wrapper -->
              <div class="flex flex-col h-full ">
                <div class="w-full h-full flex flex-col justify-between text-left">
                  <!-- Product Name & Price -->
                  <div class="flex flex-col gap-2 items-start">
                    <div class="">
                      <h2 class="font-bold text-lg">N-Methyl-2-propanimine</h2>
                      <h2>by <span class="underline italic">Kantin -1</span></h2>
                    </div>
                    <h3 class="text-base line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                  </div>
                  
                  
                  
                </div>
                <div class="flex flex-row justify-between items-center">
                  <h3 class="">12.000</h3>
                  <button class="border-2 border-primary-600 bg-white text-primary-600 hover:bg-primary-600 hover:text-white px-4 py-2 rounded-full w-32 h-max font-medium transition-colors duration-100">Pesan</button>
                </div>
              </div>
              

            </div>
            
            <button>ASJOFJSAFAS</button>
            <button>ASJOFJSAFAS</button>
            <button>ASJOFJSAFAS</button>
            <button>ASJOFJSAFAS</button>
            <button>ASJOFJSAFAS</button>
            <button>ASJOFJSAFAS</button>
            <button>ASJOFJSAFAS</button>
            
      </div>
    
      
    </div>


    <!-- si React ngapain bjir -->
    <div id="root"></div>
    <script type="module" src="/src/main.jsx"></script>
  </body>
</html>