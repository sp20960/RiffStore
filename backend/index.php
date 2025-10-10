    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/header.php'); ?>
    <?php 
        include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connect.php'); 
        
        if (!$connect) {
            echo "Eror" + mysqli_connect_error();
        } else {
            echo "It works!";
        }
    ?>
    <main class="pl-5 bg-secondary">
        <h1 class="text-text text-xl pt-5 pb-5">¡Bienvenido al panel de administracion!</h1>
        <div class="flex flex-col gap-5 pb-5">
            <h3 class="text-text">PRODUCTOS</h3>
            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-product">
                <i class="fa-regular fa-folder-open text-accent"></i>
                <p class="text-text">Añadir producto</p>
            </div>

            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="search-product">
                <i class="fa-regular fa-folder-open text-accent"></i>
                <p class="text-text">Ver productos</p>
            </div>

            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="update-product">
                <i class="fa-regular fa-folder-open text-accent   "></i>
                <p class="text-text">Actualizar producto</p>
            </div>
            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="delete-product">
                <i class="fa-regular fa-folder-open text-accent"></i>
                <p class="text-text">Eliminar producto</p>
            </div>
        </div>
        <div class="flex flex-col gap-5 pb-5">
            <h3 class="text-text">CLIENTES</h3>
            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-client">
                <i class="fa-regular fa-user text-accent"></i>
                <p class="text-text">Añadir cliente</p>
            </div>

            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-user text-accent"></i>
                <p class="text-text">Ver clientes</p>
            </div>

            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-user text-accent   "></i>
                <p class="text-text">Actualizar cliente</p>
            </div>
            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-user text-accent   "></i>
                <p class="text-text">Eliminar cliente</p>
            </div>
        </div>
        <div class="flex flex-col gap-5 pb-5">
            <h3 class="text-text">ORDENES</h3>
            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-product">
                <i class="fa-regular fa-clipboard text-accent"></i>
                <p class="text-text">Añadir orden</p>
            </div>

            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-clipboard text-accent"></i>
                <p class="text-text">Ver ordenes</p>
            </div>

            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-clipboard text-accent   "></i>
                <p class="text-text">Actualizar orden</p>
            </div>
            <div class="flex items-center cursor-pointer bg-primary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-clipboard text-accent   "></i>
                <p class="text-text">Eliminar orden</p>
            </div>
        </div>
    </main>
    <script src="/student023/shop/frontend/js/index.js"></script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>