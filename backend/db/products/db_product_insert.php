<?php
    if (isset($_POST['insert']))  {
        $userAction = "insert";

        unset($_POST['productInsert']);
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
        $imagePath = "/student023/shop/frontend/images/products/ibanez_rg550/image.png";
        
        //INSERT DATA
        include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

        $sql = "INSERT INTO 023_products (productName, `description`, cost, pricePerUnit, brand, frets, color, bodyMaterial, tremolo, categoryId, imagePath)
                VALUES ('$productName', '$description', $cost, $pricePerUnit, '$brand', $frets, '$color', '$bodyMaterial', $tremolo, $categoryId, '$imagePath' )";

        // CONFIRMATION MESSAGE
        if (mysqli_query($connect,$sql)){
            echo "New record created successfully";
        } else{
            echo "ERROR";
        }
        //CLOSE DB CONEXION
        mysqli_close($connect);   
    }
?>
