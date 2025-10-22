    <?php
        require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/admin_header.php');
        require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connect.php');
    ?>
    <main class="px-10 bg-secondary w-[100%]">
        <h1 class="text-text text-xl pt-5 pb-5">¡Bienvenido al panel de administracion!</h1>
        <?php
            if (!$connect) {
                echo "<p>Eror".mysqli_connect_error().'</p>';
            } else {
                echo "<p>It works!</p>";
            }
        ?>
    </main>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>