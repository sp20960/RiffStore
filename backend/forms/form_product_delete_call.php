<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php');?>
<main>
    <div class="flex justify-center p-10 bg-secondary min-h-screen items-center">
        <form action="/student023/shop/backend/forms/form_product_delete.php" method="POST" class="flex flex-col gap-10 p-10 bg-primary w-90 h-40 rounded-xl items-center">
            <input type="text" name="productId" id="" placeholder="Id del producto" class="text-text border-1 rounded-sm">
            <input type="submit" value="Eliminar" class="bg-btn text-text rounded-md w-40">
        </form>  
    </div>

</main>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php');?>
