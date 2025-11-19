<?php 
    function returnCustomerData($customerId) {
        $sql = "SELECT * FROM 023_customers 
                WHERE customerId = $customerId;";
        require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
        $result = mysqli_query($connect, $sql);
        $userData = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $userData;
    }

    function returnAddressesCustomer($customerId) {
        $sql = "SELECT ad.* FROM `023_addresses` AS ad
                INNER JOIN `023_customers_addresses` AS ca
                ON ad.addressId = ca.addressId
                WHERE ca.customerId = $customerId";;

        require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
        $result = mysqli_query($connect, $sql);
        $addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $addresses;
    }



?>