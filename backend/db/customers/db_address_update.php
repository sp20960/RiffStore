<?php 
    if (isset($_POST['updateAddress'])){

         //GET DATA
        $productId = $_POST["address"];
        $productName = $_POST["additionalData"];
        $description = $_POST["province"];
        $brand = $_POST["city"];
        $cost = $_POST["zipCode"];
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

        mysqli_query($connect, $sql);

        //CLOSE DB CONEXION
        mysqli_close($connect);   
    }
?>