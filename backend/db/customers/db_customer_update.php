<?php 
 if(isset($_POST['updateCustomer'])){
        $customerId = $_SESSION['customerId'];
        $firstName = $_POST['firstName'];
        $nif = $_POST['nif'];
        $phone = $_POST['phone'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];

        $sql = "UPDATE 023_customers
                SET firstName = '$firstName',
                    nif = '$nif',
                    phone = '$phone',
                    lastName = '$lastName'
                    email = '$email'
                WHERE customerId = $customerId";
        include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
       mysqli_query($connect, $sql);
       mysqli_close($connect);
    }
?>