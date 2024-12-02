<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require '../../controllers/login.php';
require '../../config/checkcookie.php';

check_cookie();

// var_dump($_SESSION);

if(isset($_SESSION['logged'])){
    if($_SESSION['role']=='seller'){
        header("Location: ../seller/index.php?seller=" . $_SESSION['username']);
    }else{
        header('Location: ../landing/');
    }
}

if(isset($_POST["submit"])){
    $login  = login_user($_POST);
    var_dump($login);
    if($login == 'customer'){
        header('Location: ../landing/');
    }else if($login == 'seller'){
        header("Location: ../seller/dashboard");
    }else if($login == 'admin'){
        header("Location: ../landing");
    }else if($login == 'error'){
        $errorMessage['status'] = true;
        $errorMessage['title'] = 'Email / Username Wrong';
        $errorMessage['desc'] = 'Please retype your Email/Password Correctly or make an account ';
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="dUTF-8" />
    <link rel="stylesheet" href="../../assets/css/tailwind.css" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
  </head>
  <body>
    <section class="bg-gray-50 font-poppins">
      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
        <!-- Alert -->
            <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4" style="display:<?php echo isset($errorMessage) && $errorMessage['status'] == true ? "block" : "none" ; ?>" id="alertContainer">
                <div class="flex items-center gap-2 text-red-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path
                        fill-rule="evenodd"
                        d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                        clip-rule="evenodd"
                        />
                    </svg>

                    <strong class="block font-medium" id="alertTitle"><?= $errorMessage['title'] ?></strong>
                </div>

                <p class="mt-2 text-sm text-red-700" id="alertDesc">
                    <?= $errorMessage['desc'] ?>
                </p>
            </div>
        <!-- Alert End -->
            <a href="../landing/index.php" class="flex items-center mb-6 text-5xl font-semibold text-gray-900 mt-4">
                NoshNow    
            </a>
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-semibold leading-tight tracking-tight text-gray-900 md:text-2xl">
                        Login to Your Account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="" method="POST">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@email.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>

                        <div class="">
                            <label for="remember">Remember Me</label>
                            <input class="flex items-center" type="checkbox" name="remember" id="remember">
                        </div>
                        
                        <button type="submit" name="submit" id="btnSubmit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Sign In</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Don't have an account? <a href="./signup.php" class="font-medium text-primary-600 hover:underline ">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- React stuff idfk -->
    <div id="root"></div>
    <script type="module" src="../../assets/js/login.js"></script>
  </body>
</html>
