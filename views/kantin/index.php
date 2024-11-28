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
    <div class="w-5/6 h-max flex flex-col gap-6 mx-auto mt-8">
        <h1 class="text-4xl border-b pb-3 border-gray-200">Kantin 1</h1>
        <div class="flex gap-6">
          <div class="w-96 h-[36rem] bg-green-500 rounded-2xl"></div>
          <div class="w-full h-max grid grid-cols-3 gap-5 *:border-gray-200 *:border *:text-center *:py-5 *:px-6 *:rounded-2xl *:h-52">
            <!-- Grid Content Wrapper -->
            <div class="flex flex-row h-full">
              <!-- Details Wrapper -->
              <div class="w-8/12  flex flex-col justify-between text-left">
                <!-- Product Name & Price -->
                <div class="flex flex-col gap-2 items-start">
                  <h2 class="font-bold">N-Methyl-2-propanimine</h2>
                  <h3 class="text-[0.8rem]/[1rem] line-clamp-4 ">Kristal biru murni yang sedap dikonsumsi baik itu disedut maupun dibakar dan dihirup</h3>
                </div>

                <h3 class="">12.000</h3>

                <!-- Order Button -->
                
              </div>

              <!-- Product Image -->
              <div class="flex flex-col items-center gap-2">
                <div class=" w-2/3 h-full  *:rounded-xl">
                  <img src="./assets/images.jpg" alt="" class="object-cover h-full">
                </div>
                <button class="bg-primary-100 px-4 py-2 rounded-full w-2/3 font-medium text-primary-600">Pesan</button>
              </div>
            </div>
            <button>ASJOFJSAFAS</button>
            <button>ASJOFJSAFAS</button>
            
          </div>
        </div>
      </div>
      
  </body>
</html>