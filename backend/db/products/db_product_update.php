<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/admin_header.php');

    //GET DATA
    $productId = $_POST["productId"];
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

    //START DB CONNECTION
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

    //DELETE QUERY
    $sql = "UPDATE 023_products 
            SET productName = '$productName',
                `description` = '$description',
                brand = '$brand',
                cost = '$cost',
                pricePerUnit = '$pricePerUnit',
                frets = $frets,
                color = '$color',
                bodyMaterial = '$bodyMaterial',
                tremolo = $tremolo,
                categoryId = '$categoryId' 
            WHERE productId = '$productId'";

     if (mysqli_query($connect,$sql)){
        echo "Record updated successfully";
    } else{
        echo "ERROR";
    }

    //CLOSE DB CONEXION
    mysqli_close($connect);   
    
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php')
?>