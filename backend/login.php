<?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/guest_header.php'); ?>
    <main class="h-[calc(100vh-100px)] flex justify-center items-center">
        <div class="bg-primary w-[800px] h-[400px] flex flex-col items-center justify-center py-10 gap-10 rounded-4xl">
            <h1 class="text-text text-[1.5rem]">Inicar sesión</h1>
            <form action="/student023/shop/backend/db/db_login.php" method="POST" class="flex flex-col gap-5 w-[500px]">
                <input type="email" name="email" id="" placeholder="Correo electronico" class="border-1 p-2 rounded-md border-text text-text">
                <input type="password" name="pwd" id="" placeholder="Contraseña" class="border-1 p-2 rounded-md border-text text-text">
                <div class="flex justify-center">
                    <input type="submit" name="submit" value="Log In" class="text-text bg-btn rounded-md py-2 px-10">
                </div>
            </form>
        </div>
    </main>
</body>
</html>