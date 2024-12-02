<?php 
session_start();

// var_dump($_SESSION["role"]);

require '../../config/checkcookie.php';
require '../../controllers/getdata.php';
check_cookie();

$userInfo = getUsers();
$userInfo = $userInfo[0];

// var_dump($userInfo);

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
    
    <?php include '../layout/header.php';?>
    <!-- Pengganjal :p -->
    <div class="bg-white w-full h-16"></div>
    
    <div class="mx-auto w-4/6 h-max mt-12 divide-y-2 flex flex-col gap-2 items-start ">
        <div class="justify-between flex w-full items-center">
          <div class="flex items-center gap-6 ">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-36 fill-primary-400">
                  <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z"/>
              </svg>
              <div class="flex flex-col gap-2">
                <h1 class="text-6xl font-medium text-primary-500"><?= $_SESSION['username']?></h1>
                <h2 class="font-semibold text-xl text-gray-400">Join date:
                  <span class="font-normal">
                    <?= $userInfo['created_at']?>
                  </span>
                </h2>
              </div>
            </div>
            
            <button class="bg-primary-100 px-4 py-2 rounded-full font-medium text-primary-600 w-32  h-12" onclick="window.location.href='../../controllers/logout.php'">Logout</button>
        </div>

        <div class="border-t border-gray-200 w-full px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-5 sm:gap-3 sm:px-6 items-center">
                <dt class="text-xl font-medium text-gray-500">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">
                  <?= ($userInfo['first_name'] != NULL &&  $userInfo['last_name'] != NULL) ? $userInfo['first_name'] .  $userInfo['last_name'] : 'Belum Diatur' ?>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-5 sm:gap-3 sm:px-6 items-center">
                <dt class="text-xl font-medium text-gray-500">
                    Email
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">
                <?= $userInfo['email']?>
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-5 sm:gap-3 sm:px-6 items-center">
                <dt class="text-xl font-medium text-gray-500">
                    Phone
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-4">
                <?= $userInfo['phone_number'] != NULL ? $userInfo['phone_number'] : 'Belum Diatur';?>
                </dd>
            </div>
            
        </dl>
    </div>
    </div> 
  </body>
</html>