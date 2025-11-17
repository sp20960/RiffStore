<?php 
    function returnCustomerData($customerId) {
        $sql = "SELECT * FROM 023_customers 
                WHERE customerId = $customerId;";
        require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
        $result = mysqli_query($connect, $sql);
        $userData = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $userData;
    }



?>