<?php require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php');?>
<main class=" bg-secondary" style="height: calc(100vh - 114px);">
    <div class="flex justify-center p-10 items-center h-[100%]">
        <form action="/student023/shop/backend/db/products/db_product_select.php" method="POST" class="flex flex-col gap-5 justify-center items-center bg-primary w-90 h-40 rounded-xl ">
            <label class="text-text">BUSCAR UN PRODUCTO</label>
            <input type="submit" value="Buscar" class="bg-btn text-text rounded-md w-40 cursor-pointer">
        </form>  
    </div>

</main>
<?php require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php');?>