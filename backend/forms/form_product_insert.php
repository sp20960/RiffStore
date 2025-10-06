<?php include('../header.php')?>
<main>
    <form action="/student023/shop/backend/db/db_product_insert.php" method="GET" class="flex flex-col gap-5 pl-5 pt-10 pb-10">
        <input type="text" name="productName" id="" placeholder="Nombre">
        <input type="text" name= "description" id="" placeholder="Descripción">
        <input type="text" name= "brand" id="" placeholder="Marca">
        <input type="number" name="cost" id="" placeholder="Precio Coste" >
        <input type="number" name="pricePerUnit" id="" placeholder="Precio Final">
        <input type="number" name="frets" id="" placeholder="Numero trastes">
        <input type="text" name="color" id="" placeholder="Color">
        <input type="text" name="bodyMaterial" placeholder="Material del cuerpo">
        <div class="flex flex-col gap-2">
            <label for="tremolo">Tremolo</label>
            <select name="tremolo" id="tremolo">
                <option value="true">Sí</option>
                <option value="false">No</option>
            </select>
        </div>
        </div>
        <input type="text" name="categoryId"placeholder="Categoria">
        <input type="submit" value="Send">
    </form>
</main>
<?php include('../footer.php')?>