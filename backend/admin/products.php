<?php
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/admin_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/products/db_select_products.php');
?>


<main class="flex flex-col gap-5 bg-[#f5f5dc] p-10 w-full">
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
        include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/forms/products/form_product_update_call.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/forms/products/form_product_delete_call.php');
        echo    '</div>' .
            '</div>';
    }
    ?>
    <script src="/student023/shop/frontend/js/backend_products.js"></script>
</main>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>
