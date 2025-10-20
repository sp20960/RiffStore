    <?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/admin_header.php'); ?>
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connect.php');

    if (!$connect) {
        echo "Eror" + mysqli_connect_error();
    } else {
        echo "It works!";
    }
    ?>
    <main class="px-10 bg-secondary w-[100%]">
        <h1 class="text-text text-xl pt-5 pb-5">¡Bienvenido al panel de administracion!</h1>
    </main>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>