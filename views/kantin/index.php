<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="tailwind.css">
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NoshNow</title>
  </head>
  <body class="font-poppins">

    <!-- Navbar -->
    <nav class="bg-white border-slate-200 border-b w-full h-16 flex justify-between fixed items-center px-12 z-10">
      <!-- Left Buttons Wrapper -->
      <div class="flex items-center gap-10">
        <!-- NoshNow Title-->
        <div class="flex items-center gap-3">
          <i class='text-4xl text-center bx bxs-bowl-rice text-primary-500'></i>
          <h1 class="font-semibold text-[2.5rem] text-primary-500">NoshNow</h1>
        </div>

        <!-- Buttons -->
        <ul class="flex items-center h-full font-medium *:*:px-4  *:cursor-pointer *:*:py-4 *:align-middle ">
          <li>
            <a class="border-b-4 border-primary-500 text-primary-500" href="index.php">Home</a>
          </li>
          <li>
            <a class="text-gray-500 hover:text-black">Order</a>
          </li>
        </ul>
      </div>

      <!-- Right Buttons Wrapper -->
      <div>
        <button class="bg-primary-100 px-4 py-2 rounded-full font-medium text-primary-600">Sign Up</button>
      </div>

    </nav>

    <!-- Pengganjal :p -->
    <div class="bg-white w-full h-16"></div>

    <div class="w-5/6 h-max flex flex-col gap-6 mx-auto">
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