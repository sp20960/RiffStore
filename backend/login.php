<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/includes/guest_header.php'); 
$errors = [];

 if(isset($_POST['submit'])){
        // INITIALIZE SESSION
        session_start();
        session_regenerate_id();

        // FETCH POST INFORMATION
        $email = $_POST['email'];
        $pwd = $_POST['pwd']; 

        if(empty($pwd)) {
            $errors['pwd'] = "Este campo es obligatorio!";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email incorrecto!";
        }

        if(empty($email)) {
            $errors['email'] = "Este campo es obligatorio!";
        }

        if (!array_filter($errors)){
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
                $errors['fail'] = "Email o contraseña incorrecto!";
            }
        }
        
    }
?>
    <main class="h-[calc(100vh-100px)] bg-[#5f595957] flex justify-center items-center">
        <div class="bg-primary w-[400px] h-[400px] flex flex-col items-center justify-center py-10 gap-10 rounded-4xl shadow-2xl">
            <h1 class="text-text text-[1.5rem]">Inicar sesión</h1>
            <form action="login.php" method="POST" class="flex flex-col gap-5 w-[300px]">
                <input type="email" name="email" id="" placeholder="Correo electronico" class="border p-2 rounded-md border-text text-text">
                <?php 
                    if(isset($errors["email"])){
                        echo '<small class="text-red-500">'.$errors["email"].'</small>';
                        unset($errors["email"]);
                    }
                ?>
                <input type="password" name="pwd" id="" placeholder="Contraseña" class="border p-2 rounded-md border-text text-text">
                <?php 
                    if(isset($errors["pwd"])){
                        echo '<small class="text-red-500">'.$errors["pwd"].'</small>';
                        unset($errors["pwd"]);
                    }
                ?>
                <?php 
                    if(isset($errors["fail"])){
                        echo '<small class="text-red-500">'.$errors["fail"].'</small>';
                        unset($errors["fail"]);
                    }
                ?>
                <div class="flex justify-center">
                    <input type="submit" name="submit" value="LogIn" class="text-text bg-btn rounded-md py-2 px-10">
                </div>


            </form>
        </div>
    </main>
</body>
</html>