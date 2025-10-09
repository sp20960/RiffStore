<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php');

    print_r($_POST);
    $productId = $_POST["productId"];

    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

    $sql = "DELETE FROM products 
            WHERE productId = '$productId'";

     if (mysqli_query($connect,$sql)){
        echo "Record deleted successfully";
    } else{
        echo "ERROR";
    }

    //CLOSE DB CONEXION
    mysqli_close($connect);   
    
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php')
?>