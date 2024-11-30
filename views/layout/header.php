<?php 
    $url = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="bg-white border-slate-200 border-b w-full h-16 flex justify-between fixed items-center px-6 z-10">
            <!-- Left Buttons Wrapper -->
            <div class="flex items-center gap-10">
                <!-- NoshNow Title-->
                <div class="flex items-center gap-3">
                    <i class='text-4xl text-center bx bxs-bowl-rice text-primary-500'></i>
                    <h1 class="font-semibold text-[2.5rem] text-primary-500">NoshNow</h1>
                </div>
                <!-- Buttons -->
                <ul class="flex items-center h-full font-medium *:*:px-4  *:cursor-pointer *:*:py-4 *:align-middle ">
                    <!-- <?php var_dump($url)?> -->
                    <?php if($url=='/NoshNow/views/landing/' || $url=='/NoshNow/views/landing/index.php') :?>
                    <li>
                        <a class="border-b-4 border-primary-500 text-primary-500">Home</a>
                    </li>
                    <li>
                        <a class="text-gray-500 hover:text-black" href="../kantin">Kantin</a>
                    </li>
                    <?php elseif($url=='/NoshNow/views/kantin/' || $url=='/NoshNow/views/kantin/index.php') : ?>
                    <li>
                        <a class="text-gray-500 hover:text-black" href="../landing">Home</a>
                    </li>
                    <li>
                        <a class="border-b-4 border-primary-500 text-primary-500">Kantin</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
    
            <!-- Right Buttons Wrapper -->
            <div class="flex items-center gap-3">
                <button class='bg-primary-100 text-primary-600 px-2 py-2 rounded-full bx bx-basket text-2xl'></button>
                <?php if(isset($_SESSION['logged'])) : ?>
                    <span>Welcome, <button class="underline font-medium" ><?= $_SESSION["username"]?></button></span>
                    <button class="bg-primary-100 px-4 py-2 rounded-full font-medium text-primary-600" onclick="window.location.href='../../controllers/logout.php'">Logout</button>
                <?php else : ?>
                    <button class="bg-primary-100 px-4 py-2 rounded-full font-medium text-primary-600" onclick="window.location.href='../auth/signin.php'">Sign In</button>
                <?php endif; ?>
            </div>
        </nav>
        <!-- Navbar END -->
    </header>
</body>
</html>