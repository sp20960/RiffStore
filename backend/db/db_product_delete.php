<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php');
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connection.php');

    print_r($_POST);
    $productName = $_POST["productId"];

    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connection.php');

    $sql = "DELETE FROM products 
            WHERE productId = '$productName'";

     if (mysqli_query($connect,$sql)){
        echo "Record deleted successfully";
    } else{
        echo "ERROR";
    }

    //CLOSE DB CONEXION
    mysqli_close($connect);   
    
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php')
?>