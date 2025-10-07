<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php')?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connection.php')?>
<?php
    
    //GET DATA
    print_r($_GET);
    $productName = $_GET["productName"];
    $description = $_GET["description"];
    $brand = $_GET["brand"];
    $cost = $_GET["cost"];
    $pricePerUnit = $_GET["pricePerUnit"];
    $frets = $_GET["frets"];
    $color = $_GET["color"];
    $bodyMaterial = $_GET["bodyMaterial"];
    $tremolo = $_GET["tremolo"];
    $categoryId = $_GET["categoryId"];

    //INSERT DATA
    $sql = "INSERT INTO products (productName, `description`, cost, pricePerUnit, brand, frets, color, bodyMaterial, tremolo, categoryId)
            VALUES ('$productName', '$description', $cost, $pricePerUnit, '$brand', $frets, '$color', '$bodyMaterial', $tremolo, $categoryId )";

    // CONFIRMATION MESSAGE
    if (mysqli_query($connect,$sql)){
        echo "New record created successfully";
    } else{
        echo "ERROR";
    }
    
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php')?>
