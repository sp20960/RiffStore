<?php 
    if (isset($_POST['updateAddress'])){

        //GET DATA
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $addressId = $_POST["addressId"];
        $address = $_POST["address"];
        $additionalData = $_POST["additionalData"];
        $province = $_POST["province"];
        $city = $_POST["city"];
        $zipCode = $_POST["zipCode"];

        //START DB CONNECTION
        include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

        //DELETE QUERY
        $sql = "UPDATE 023_addresses 
                SET `name` = '$name',
                    lastName = '$lastName',
                    `address` = '$address',
                    additionalData = '$additionalData',
                    zipCode = '$zipCode',
                    city = '$city',
                    province = '$province' 
                WHERE addressId = $addressId; ";

        mysqli_query($connect, $sql);

        //CLOSE DB CONEXION
        mysqli_close($connect);   
    }
?>