<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();
setcookie('axdy', '', time() -60*60*24*31,'/');
setcookie('key', '', time() -60*60*24*31,'/');
header("Location: ../views/landing/");
?>