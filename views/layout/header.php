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
                    <?php if($url=='/NoshNow/views/landing/') :?>
                    <li>
                        <a class="border-b-4 border-primary-500 text-primary-500">Home</a>
                    </li>
                    <li>
                        <a class="text-gray-500 hover:text-black" href="../kantin">Kantin</a>
                    </li>
                    <?php else : ?>
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
            <div>
                <button class="bg-primary-100 px-4 py-2 rounded-full font-medium text-primary-600">Sign Up</button>
            </div>
        </nav>
        <!-- Navbar END -->
    </header>
</body>
</html>