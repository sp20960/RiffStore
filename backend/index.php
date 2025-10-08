    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/header.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/config/db_connection.php'); ?>
    <main class="pl-5">
        <h1 class="">¡Bienvenido al panel de administracion!</h1>
        <div class="flex flex-col gap-5 pb-5">
            <h3 class="">PRODUCTOS</h3>
            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-product">
                <i class="fa-regular fa-folder-open text-btn"></i>
                <p class="text-text">Añadir producto</p>
            </div>

            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="search-product">
                <i class="fa-regular fa-folder-open text-btn"></i>
                <p class="text-text">Buscar producto</p>
            </div>

            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="update-product">
                <i class="fa-regular fa-folder-open text-btn   "></i>
                <p class="text-text">Actualizar producto</p>
            </div>
            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="delete-product">
                <i class="fa-regular fa-folder-open text-btn   "></i>
                <p class="text-text">Eliminar producto</p>
            </div>
        </div>
        <div class="flex flex-col gap-5 pb-5">
            <h3 class="">CLIENTES</h3>
            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-client">
                <i class="fa-regular fa-user text-btn"></i>
                <p class="text-text">Añadir cliente</p>
            </div>

            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-user text-btn"></i>
                <p class="text-text">Buscar cliente</p>
            </div>

            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-user text-btn   "></i>
                <p class="text-text">Actualizar cliente</p>
            </div>
            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-user text-btn   "></i>
                <p class="text-text">Eliminar cliente</p>
            </div>
        </div>
        <div class="flex flex-col gap-5 pb-5">
            <h3 class="">ORDENES</h3>
            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45" id="add-product">
                <i class="fa-regular fa-clipboard text-btn"></i>
                <p class="text-text">Añadir orden</p>
            </div>

            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-clipboard text-btn"></i>
                <p class="text-text">Buscar orden</p>
            </div>

            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-clipboard text-btn   "></i>
                <p class="text-text">Actualizar orden</p>
            </div>
            <div class="flex items-center cursor-pointer bg-secondary p-2 rounded-md gap-1 hover:opacity-50 w-45">
                <i class="fa-regular fa-clipboard text-btn   "></i>
                <p class="text-text">Eliminar orden</p>
            </div>
        </div>
    </main>
    <script src="/student023/shop/frontend/js/index.js"></script>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>