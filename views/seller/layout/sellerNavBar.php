<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $url = $_SERVER['REQUEST_URI'];
?>

<nav class="bg-white border-b border-gray-300 w-screen h-16 fixed">
    <div class="flex justify-between items-center px-6">
        <!-- Ícono de Menú (primary) -->
        <button id="menu-button">
            <i class="fas fa-bars text-primary-500 text-lg"></i>
        </button>
        <!-- Logo (centrado) -->
        <div class="flex items-center gap-3 mx-auto">
            <i class='text-4xl text-center bx bxs-bowl-rice text-primary-500'></i>
            <h1 class="font-semibold text-[2.5rem] text-primary-500">NoshNow</h1>
        </div>
        <!-- Icon Notif and Profile -->
        <div class="space-x-4">
            <!-- <button>
                <i class="fas fa-bell text-primary-500 text-lg"></i>
            </button> -->
            <!-- Profile Button -->
            <button>
                <?php if($_SESSION['role']=='admin') :?>
                    <button class="ry-100 px-4 py-2 rounded-full font-medium text-primary-600" onclick="window.location.href='../../landing'">Back To Landing</button>
                <?php endif; ?>
                <i class="fas fa-user text-primary-500 text-lg" id="profileNav" onclick="window.location.href='../Profile'"></i>
            </button>
        </div>
    </div>
</nav>