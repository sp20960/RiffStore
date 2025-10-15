    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/header.php'); ?>
    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connect.php');

    if (!$connect) {
        echo "Eror" + mysqli_connect_error();
    } else {
        echo "It works!";
    }
    ?>
    <main class="px-10 bg-secondary">
        <h1 class="text-text text-xl pt-5 pb-5">¡Bienvenido al panel de administracion!</h1>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>