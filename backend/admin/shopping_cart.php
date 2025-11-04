<?php
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/admin_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/db/shopping_cart/db_shopping_cart_select.php');
?>

<main class="flex gap-5 bg-[#f5f5dc] p-10 w-full">
    <div class="w-full flex flex-row gap-5">
        <div class="flex flex-col justify-center gap-5 w-[50%]">
        <?php
        $totalPrice = 0;
        foreach ($products as $product) {
            $totalPrice += $product['pricePerUnit'] * $product['quantity'];
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
                        require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/forms/shopping_cart/form_shopping_cart_delete_call.php');
           echo    '</div>' .
                '</div>';
        }
        ?>
        </div>
        <div class="flex justify-center items-center w-[50%]">
            <div class="bg-primary w-[50%] flex flex-col justify-center items-center py-10 gap-5 rounded-xl">
                <div class="">
                    <h3 class="text-text text-2xl font-bold text-center">Total: <?php echo htmlspecialchars($totalPrice)?>€</h3>
                    <p class="text-text">Todos los precios incluyen <span class="font-bold">IVA</span></p>
                </div>
                <div>
                    <button class="bg-btn rounded-md py-3 px-10 font-bold text-text cursor-pointer">IR A CAJA<i class="fa-regular fa-arrow-right"></i></button> 
                </div>
            </div>
        </div>
    </div>

</main>


<?php require($_SERVER['DOCUMENT_ROOT'] . '/student023/shop/backend/footer.php'); ?>