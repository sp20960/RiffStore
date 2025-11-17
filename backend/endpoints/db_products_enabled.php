<?php 
    $sql = "SELECT * FROM `023_products` WHERE isEnabled = 1;";
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
    $result = mysqli_query($connect, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($products);
?>