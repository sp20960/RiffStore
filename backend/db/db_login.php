<?php 
    if($_POST['submit']){
        echo 'works';
        // FETCH POST INFORMATION
        $email = $_POST['email'];
        $pwd = $_POST['pwd']; 
        // CREATE QUERY
        $sql = "SELECT * FROM `023_customers` WHERE email = '$email' AND pwd = '$pwd';";

        // OPEN CONNECTION
        require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connect.php');
        // EXECUTE QUERY AND SAVE RESULT
        $result = mysqli_query($connect, $sql);
        // CHECK IF CUSTOMER EXISTS
        if ($result) {
            // INITIALIZE SESSION
            echo 'llego aqui';
            session_start();
            $_SESSION['test'] = "iker";
        }

        
    }
   
?>