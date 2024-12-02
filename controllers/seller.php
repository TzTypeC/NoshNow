<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    require __DIR__ . '/../config/connect.php';

    function addProduct($data, $seller_id){
        global $conn;
        $name = htmlspecialchars($data['productName']);
        $stock = htmlspecialchars($data['stock']);
        $price = htmlspecialchars($data['price']);
        $category = htmlspecialchars($data['category']);
        $description = htmlspecialchars($data['description']);
        // var_dump($data);

        $img = uploadImg();
        if(!$img){
            return false;
        }

        $query = "INSERT INTO `Products`
                    VALUES
                (NULL,
                '$seller_id',
                '$name',
                '$description',
                '$price',
                '$stock',
                '$img',
                NULL,
                CURRENT_TIMESTAMP(), 
                CURRENT_TIMESTAMP())"; 

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function uploadImg(){
        $fileName = $_FILES["productImage"]["name"];
        $fileSize = $_FILES["productImage"]["size"];
        $error = $_FILES["productImage"]["error"];
        $tmpDir =  $_FILES["productImage"]["tmp_name"];
    
        // cek apakah ada gambar yg di upload?
        if($error == 4){
            return false;
        }
    
        // cek apakah yg di upload adalah gambar?
        $imgExtensionValid = ['jpg', 'jpeg', 'png'];
        $imgExtension = explode('.', $fileName);
        $imgExtension = strtolower(end($imgExtension));
        if(!in_array($imgExtension, $imgExtensionValid)){
            return false;
        }
    
        // lolos validasi, upload file!
        // generate uniq file name
        $newFileName = uniqid();
        $newFileName .= ".". $imgExtension;
        $uploadDir = __DIR__ . '/../storage/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true); // Buat folder jika belum ada
        }
        
        $destination = $uploadDir . $newFileName;
        if (!move_uploaded_file($tmpDir, $destination)) {
            return false;
        }
        
        return $newFileName;
    }
?>