<?php 
    require '../config/connectdb.php';

    $datas = mysqli_query($conn,'SELECT * FROM test');
    $res = mysqli_fetch_assoc($datas);
    var_dump($res);
?>