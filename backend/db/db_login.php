<?php 
    if(isset($_POST['submit'])){
        // INITIALIZE SESSION
        session_start();
        session_regenerate_id();

        // FETCH POST INFORMATION
        $email = $_POST['email'];
        $pwd = $_POST['pwd']; 

        // CREATE QUERY
        $sql = "SELECT * FROM `023_customers` WHERE email = '$email' AND pwd = '$pwd';";

        // OPEN CONNECTION
        require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connect.php');

        // EXECUTE QUERY AND SAVE RESULT
        $result = mysqli_query($connect, $sql);

        $user = mysqli_fetch_assoc($result);
        // CHECK IF CUSTOMER EXISTS
        if ($user && $user['rol'] == "admin") {
            
            $_SESSION['user'] = $user;
            // REDIRECT USER TO THE ADMINISTRATOR PANEL
           header("Location: http://".$_SERVER['SERVER_NAME'].'/student023/shop/backend/index.php') ;
        } else {
             // REDIRECT USER TO THE LOGIN
            header("Location: http://".$_SERVER['SERVER_NAME'].'/student023/shop/backend/login.php') ;
        }
    }
?>