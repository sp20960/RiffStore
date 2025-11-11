<?php
    if (isset($_POST['insert']) && $_SESSION['insert'] == true)  {
        $userAction = "insert";
        unset($_SESSION['delete']);
       
        //GET DATA
        $productName = $_POST["productName"];
        $description = $_POST["description"];
        $brand = $_POST["brand"];
        $cost = $_POST["cost"];
        $pricePerUnit = $_POST["pricePerUnit"];
        $frets = $_POST["frets"];
        $color = $_POST["color"];
        $bodyMaterial = $_POST["bodyMaterial"];
        $tremolo = $_POST["tremolo"];
        $categoryId = $_POST["categoryId"];

         //FILE CHECKS AND TREATMENT
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/student023/shop/assets/images/products/".strtolower(str_replace("", "_", $productName));
        $target_file = $target_dir .'/'. basename($_FILES["productImage"]["name"]);
        $isSuccessful = true;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // CHECK IF EXISTS THE DIRECTORY
        if (!is_dir($target_dir)){
            // CREATE DIRECTORY IF NOT EXISTS
            mkdir($target_dir, 0777, true);
        }

        // CHECK FILE SIZE
        if ($_FILES["productImage"]["size"] > 50000000) {
            $messages['insert']["message"] = "El fichero supera los 500MB!";
            $messages['insert']["type"] = "error";
            $isSuccessful = false;
        } 

        // CHECK EXTENSION FORMAT OF THE FILE
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $messages['insert']["message"] = "Solo JPG, JPEG y PNG estan permitidos!.";
            $messages['insert']["type"] = "error";
            echo "";
            $isSuccessful = false;
        }        

        //CHECK IF THE IMAGE EXISTS
        if (file_exists($target_file)) {
            $messages['insert']["message"] = "El fichero ya existe!";
            $messages['insert']["type"] = "error";
            $isSuccessful = false;
        } 

        var_dump($_FILES["productImage"]);
        var_dump($target_file);
        var_dump(is_dir($target_dir));
        var_dump(is_writable($target_dir));

        // Check if $uploadOk is set to 0 by an error
        $uploadOk = true;;
        if ($isSuccessful) {
            if (!move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
                $messages['insert']["message"] = "Ha habido un problema subiendo la imagen!";
                $messages['insert']["type"] = "error";
            } 
        }     
        
        $imagePath = "/student023/shop/assets/images/products/".strtolower(str_replace("", "_", $productName)).'/' .basename($_FILES["productImage"]["name"]);
        include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
        $sql = "INSERT INTO 023_products (productName, `description`, cost, pricePerUnit, brand, frets, color, bodyMaterial, tremolo, categoryId, imagePath)
        VALUES ('$productName', '$description', $cost, $pricePerUnit, '$brand', $frets, '$color', '$bodyMaterial', $tremolo, $categoryId, '$imagePath' )";

        //INERT PRODUCT
        mysqli_query($connect, $sql);

        //CLOSE DB CONEXION
        mysqli_close($connect);  
        
    }
?>
