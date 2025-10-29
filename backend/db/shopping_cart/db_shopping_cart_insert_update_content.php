<?php 

if(isset($_POST['submit'])) {
    //FETCH ALL THE NECESSARY INFORMATION
    $productId = $_POST['productId'];
    $customerId = $_SESSION['user']['customerId'];
    
    // CHECK IF ALREADY EXISTS THE PRODUCT IN THE SHOPPING CART
    // SQL QUERY
    $sql = "SELECT * FROM `023_shopping_carts` WHERE productId = $productId AND customerId = $customerId;";

    //START DB CONNECTION
    require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connect.php');

    // EXECUTE QUERY
    $checkResult = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($checkResult) !== 1){
        // IF NOT ESXISTS INSERT 
        $sql = "INSERT INTO `023_shopping_carts`(customerId, productId, quantity) VALUES($customerId, $productId, 1);";
        //EXECUTE QUERY
        $result = mysqli_query($connect, $sql);
        $executed = true;
    } else {
        //IF EXISTS THE PRODUCT IN THE SHOPPING CART INCREMENT QUANTITY
        $sql = "UPDATE 023_shopping_carts SET quantity = quantity + 1 WHERE customerId = $customerId AND productId = $productId;";
        $result = mysqli_query($connect, $sql);
        $executed = true;
    }
    //CLOSE DB CONNECTION
    mysqli_close($connect);
}
?>