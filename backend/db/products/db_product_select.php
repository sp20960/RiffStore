<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/admin_header.php');
    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

    // SAVE QUERY TO COLLECT PRODUCT DATA
    $sql = "SELECT *
            FROM `023_products` AS pr
            INNER JOIN `023_categories` AS ct 
            ON pr.categoryId = ct.categoryId;";

   

    // EXECUTE QUERY AND SAVE DATA
    $result = mysqli_query($connect, $sql);
    // CLOSE CONEXION
    mysqli_close($connect);
    // CONVERT DATA COLLECTED IN TO AN ASSOCIATIVE ARRAY
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // SEND TO THE FROENTEND THE PRODUCTS
    echo '<div class="flex flex-col gap-5 bg-secondary pl-2 pt-5" >';
    foreach ($products as $product) {
        echo '<p class="text-text">'.$product['productId'].' | '.$product['productName'].' | '.$product['description'].' | '.$product['cost'].' | '.$product['pricePerUnit'].' | '.
                   $product['brand'].' | '.$product['frets'].' | '.$product['color'].' | '.$product['bodyMaterial'].' | '
                   .$product['categoryName'].' | '.$product['insertedOn'].'</p>'.
                   '<hr>';
    };
    echo '</div>';

    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php')
?>