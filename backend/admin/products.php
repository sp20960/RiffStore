<?php
$userAction = "";
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/admin_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/products/db_select_products.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/products/db_product_insert.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/products/db_product_update.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/products/db_product_delete.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/shopping_cart/db_shopping_cart_insert_update_content.php');
$messages = ["update" => "Actualizado correctamente", "delete" => "Eliminado correctamente", "insert" => "Insertado correctamente" ,"cart" => "Añadido al carrito" ];
?>


<main class="flex flex-col gap-5 bg-[#f5f5dc] p-10 w-full">
    <div class="absolute top-1 left-[50%] w-[calc(100vw-320px)]">
        <?php if($_SERVER['REQUEST_METHOD'] === "POST"){ ?>
            <div class="bg-primary w-80 flex justify-center items-center py-5 rounded-md gap-2">
           
                <i class="fa-regular fa-check text-green-600"></i>
                <p class="text-text font-bold"><?= $messages["$userAction"] ?></p>
           
            </div>
        <?php } ?>
    </div>
    <div class="flex justify-end">
        <button class="bg-btn text-text p-3 rounded-md cursor-pointer hover:opacity-90" id="add-product-btn">Add product</button>
    </div>
    <?php
    foreach ($products as $product) {
        echo '<div class="flex border-2 justify-between items-center border-accent rounded-md bg-primary p-4">' .
            '<div class="flex items-center gap-2">' .
            '<p class="text-text">' . $product['productId'] . '</p>' .
            '<img class="w-[80px]" src="' . $product['imagePath'] . '" ' . 'alt="">' .
            '<div class="flex flex-col">' .
            '<h3 class="text-text">' . $product['productName'] . '</h3>' .
            '<p class="text-text">' . $product['pricePerUnit'] . '€' . '</p>' .
            '</div>' .
            '</div>' .
            '<div class="flex gap-3">';
        include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/forms/shopping_cart/form_shopping_cart_insert.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/forms/products/form_product_update_call.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/forms/products/form_product_delete_call.php');
        echo    '</div>' .
            '</div>';
    }
    ?>
    <script src="/student023/shop/js/backend_products.js"></script>
</main>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>
