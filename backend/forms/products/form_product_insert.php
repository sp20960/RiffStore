<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/admin_header.php');?>
<main>
    <div class="flex justify-center bg-secondary w-[calc(100vw_-_295px)] py-10">
        <form action="/student023/shop/backend/db/products/db_product_insert.php" method="POST" class="flex flex-col gap-10 p-10 bg-primary w-300 rounded-xl">
            <label class="text-text text-center">AÑADIR UN PRODUCTO</label>
            <div class="flex flex-col gap-2">
                <label for="productName" class="text-text">Nombre guitarra</label>
                <input type="text" name="productName" id="" placeholder="Nombre" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]"">
            </div>
             <div class="flex flex-col gap-2">
                <label for="productName" class="text-text">Descripcion</label>
                <input type="text" name= "description" id="" placeholder="Descripción" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
             </div>
             <div class="flex flex-col gap-2">
                <label for="brand" class="text-text">Marca</label>
                <input type="text" name= "brand" id="" placeholder="Marca" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
             </div>
            <div class="flex flex-col gap-2">
                <label for="cost" class="text-text">Precio Coste</label>
                <input type="number" name="cost" id="" placeholder="Precio Coste" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
            </div>
            <div class="flex flex-col gap-2">
                <label for="pricePerUnit" class="text-text">Precio por unidad</label>
                <input type="number" name="pricePerUnit" id="" placeholder="Precio Final" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
            </div>
            <div class="flex flex-col gap-2">
                <label for="frets" class="text-text">Trastes</label>
                <input type="number" name="frets" id="" placeholder="Numero trastes" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
            </div>
            <div class="flex flex-col gap-2">
                <label for="color" class="text-text">Color</label>
                <input type="text" name="color" id="" placeholder="Color" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]"">
            </div>
            <div class="flex flex-col gap-2">
                <label for="bodyMaterial" class="text-text">Material del cuerpo</label>
                <input type="text" name="bodyMaterial" placeholder="Material del cuerpo" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
            </div>
            <div class="flex flex-col gap-2">
                <label for="tremolo" class="text-text">Tremolo</label>
                <select name="tremolo" id="tremolo" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
                    <option value="true">Sí</option>
                    <option value="false">No</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="categoryId" class="text-text">Categoria</label>
                <select name="categoryId" id="categoryId" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
                    <?php 
                        $sql = 'SELECT * FROM `023_categories`;';

                        require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
                        $result = mysqli_query($connect, $sql);
                        $categories = mysqli_fetch_all($result,MYSQLI_ASSOC);
                        
                        foreach($categories as $category) {
                            echo '<option value="'.$category['categoryId'].'">'.$category['categoryName'].'</option>';
                        }
                    
                    ?>
                </select>
            </div>
            <input type="submit" value="Send" name="productInsert" class="bg-btn text-text rounded-md" >
        </form>  
    </div>

</main>
<?php include($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php');?>
