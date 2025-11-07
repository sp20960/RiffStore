<?php     
    if(isset($_POST['delete']) && $_SESSION['delete'] == true){
        $userAction = "delete";
        isset($_SESSION['delete']);
        //GET DATA
        $productId = $_POST["productId"];

        //START DB CONNECTION
        include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

        //DELETE QUERY
        $sql = "DELETE FROM `023_products`
                WHERE productId = $productId";

        mysqli_query($connect, $sql);
    

        //CLOSE DB CONEXION
        mysqli_close($connect);                      
    }
?>