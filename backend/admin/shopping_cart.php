<?php
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/admin_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/shopping_cart/db_shopping_cart_select.php');
?>

<main class="flex gap-5 bg-[#f5f5dc] p-10 w-full">
    <div class="w-[50%] flex flex-col gap-5">
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
                    '<div class="flex items-center gap-5">';
                        echo '<div class="flex flex-col items-center">'.
                                '<p class="text-text">Quantity</p>'.
                                '<p class="text-text">'.$product['quantity'].'</p>'.
                              '</div>';
                        include($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/forms/shopping_cart/form_shopping_cart_delete_call.php');
           echo    '</div>' .
                '</div>';
        }
        ?>
    </div>

</main>


<?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>