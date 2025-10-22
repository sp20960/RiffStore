<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/admin_header.php');
    //GET DATA
    $productId = $_POST["productId"];

    //START DB CONNECTION
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

    //DELETE QUERY
    $sql = "DELETE FROM 023_products 
            WHERE productId = '$productId'";

     if (mysqli_query($connect,$sql)){
        echo "Record deleted successfully";
    } else{
        echo "ERROR";
    }

    //CLOSE DB CONEXION
    mysqli_close($connect);   
    
    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php')
?>