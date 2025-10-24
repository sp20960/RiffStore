<?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/guest_header.php'); ?>
    <main class="h-[calc(100vh-100px)] bg-[#5f595957] flex justify-center items-center">
        <div class="bg-primary w-[400px] h-[400px] flex flex-col items-center justify-center py-10 gap-10 rounded-4xl shadow-2xl">
            <h1 class="text-text text-[1.5rem]">Inicar sesión</h1>
            <form action="/student023/shop/backend/db/db_login.php" method="POST" class="flex flex-col gap-5 w-[300px]">
                <input type="email" name="email" id="" placeholder="Correo electronico" class="border p-2 rounded-md border-text text-text">
                <input type="password" name="pwd" id="" placeholder="Contraseña" class="border p-2 rounded-md border-text text-text">
                <div class="flex justify-center">
                    <input type="submit" name="submit" value="LogIn" class="text-text bg-btn rounded-md py-2 px-10">
                </div>
            </form>
        </div>
    </main>
</body>
</html>