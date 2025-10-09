<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php');?>
<main class=" bg-secondary" style="height: calc(100vh - 114px);">
    <div class="flex justify-center p-10 items-center h-[100%]">
        <form action="/student023/shop/backend/forms/form_product_update.php" method="POST" class="flex flex-col gap-5 justify-center items-center bg-primary w-90 h-40 rounded-xl ">
            <label class="text-text">ACTUALIZAR UN PRODUCTO</label>
            <input type="text" name="productId" id="" placeholder="Id del producto" class="text-text border-1 rounded-sm">
            <input type="submit" value="Buscar" class="bg-btn text-text rounded-md w-40">
        </form>  
    </div>

</main>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php');?>
