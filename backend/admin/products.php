<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php'); 
    include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/db/products/db_select_products.php');
?>
<main class="flex flex-col gap-5 bg-secondary p-10">
    <?php 
        foreach ($products as $product){
            echo '<div class="flex border-2 justify-between items-center border-accent rounded-md bg-primary p-4">'.
                    '<div class="flex items-center gap-2">'.
                        '<p class="text-text">'.$product['productId'].'</p>'.
                        '<img class="w-[80px]" src="'.$product['imagePath'].'" '.'alt="">'.
                        '<div class="flex flex-col">'.
                            '<h3 class="text-text">'.$product['productName'].'</h3>'.
                            '<p class="text-text">'.$product['pricePerUnit'].'€'.'</p>'.
                        '</div>'.
                    '</div>'.
                    '<div class="flex gap-3">'.
                        '<form action="/student023/shop/backend/forms/products/form_product_update.php" method="POST">'.
                            '<input type="hidden" '.'name="productId" '.'value="'.$product['productId'].'">'.
                            '<button type="submit"><i class="fa fa-edit text-text cursor-pointer"></i></button>'.
                        '</form>'.
                        '<form action="/student023/shop/backend/forms/products/form_product_delete.php" method="POST">'.
                            '<input type="hidden" '.'name="productId" '.'value="'.$product['productId'].'">'.
                            '<button type="submit"><i class="fa fa-trash text-text cursor-pointer"></i></button>'.
                        '</form>'.
                         
                    '</div>'.
                 '</div>';
        }
    ?>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php'); ?>