<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
    
    // WRITE QUERY
    $sql = "SELECT * FROM 023_products;";

    //EXECUTE QUERY
    $result = mysqli_query($connect, $sql);
    
    // FETCH ALL THE PRODUCTS
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>