<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/header.php');?>
<main>
    <div class="flex justify-center p-10 bg-secondary">
        <form action="/student023/shop/backend/db/db_product_insert.php" method="POST" class="flex flex-col gap-10 p-10 bg-primary w-300 rounded-xl">
            <input type="text" name="productName" id="" placeholder="Nombre" class="text-text">
            <input type="text" name= "description" id="" placeholder="Descripción" class="text-text">
            <input type="text" name= "brand" id="" placeholder="Marca" class="text-text">
            <input type="number" name="cost" id="" placeholder="Precio Coste" class="text-text">
            <input type="number" name="pricePerUnit" id="" placeholder="Precio Final" class="text-text">
            <input type="number" name="frets" id="" placeholder="Numero trastes" class="text-text">
            <input type="text" name="color" id="" placeholder="Color" class="text-text">
            <input type="text" name="bodyMaterial" placeholder="Material del cuerpo" class="text-text">
            <div class="flex flex-col gap-2">
                <label for="tremolo" class="text-text">Tremolo</label>
                <select name="tremolo" id="tremolo" class="text-text">
                    <option value="true">Sí</option>
                    <option value="false">No</option>
                </select>
            </div>
            <input type="text" name="categoryId"placeholder="Categoria" class="text-text">
            <input type="submit" value="Send" class="bg-btn text-text rounded-md">
        </form>  
    </div>

</main>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php');?>
