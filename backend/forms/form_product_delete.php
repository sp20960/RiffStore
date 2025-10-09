<?php 
    $productId = $_POST["productId"];
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php');?>
<main>
    <div class="flex justify-center p-10 bg-secondary">
        <div class="bg-primary w-100 flex flex-col gap-8 p-10 rounded-2xl">
            <h1 class="text-text text-center">Are you sure you want to delete this product_id <?php echo $productId?></h1>
            <div class="flex justify-center gap-40">
                <button class="bg-btn text-text rounded-sm w-20 p-1 cursor-pointer">Atras</button>
                <form action="/student023/shop/backend/db/db_product_delete.php" method="POST" class="">
                    <input type="text" name="productId" value="<?php echo 'productId'?>" hidden>
                    <input type="submit" value="Aceptar" class="text-text bg-btn w-20 p-1 rounded-sm cursor-pointer">
                </form>
            </div>
        </div>
    </div>

</main>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php');?>
