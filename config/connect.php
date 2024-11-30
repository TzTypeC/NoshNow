<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_NAME'];

$conn = mysqli_connect(
        $hostname,
        $username,
        $password,
        $database
        );
// $datas = mysqli_query($conn,'SELECT * FROM test');
// var_dump(mysqli_fetch_assoc($datas));
?>