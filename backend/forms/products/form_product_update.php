<?php 
    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/admin_header.php');

    // GET DATA
    $productId = $_POST["productId"];

    // START DB CONNECTION
    require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');

    // COLLECT DATA
    $sql = "SELECT * FROM 023_products WHERE productId = $productId";
    $result = mysqli_query($connect, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // DECLARE VARIABLES TO SAVE PRODUCT INFO
    $productName = $products[0]["productName"];
    $description = $products[0]["description"];
    $cost = $products[0]["cost"];
    $pricePerUnit = $products[0]["pricePerUnit"];
    $brand = $products[0]["brand"];
    $frets = $products[0]["frets"];
    $color = $products[0]["color"];
    $bodyMaterial = $products[0]["bodyMaterial"];
    $tremolo = $products[0]["tremolo"];
    $categoryId = $products[0]["categoryId"];

?>
<main>
    <div class="flex justify-center p-10 bg-secondary w-[calc(100vw_-_280px)]">
        <form action="/student023/shop/backend/db/products/db_product_update.php" method="POST" class="flex flex-col gap-10 p-10 bg-primary w-300 rounded-xl">
            <input type="text" name="productId" value="<?php echo $productId ?>" hidden>
            <div class="flex flex-col gap-2">
                <label for="productName" class="text-text">Nombre guitarra</label>
                <input type="text" name="productName" id="" placeholder="Nombre" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $productName?>">
            </div>
             <div class="flex flex-col gap-2">
                <label for="productName" class="text-text">Descripcion</label>
                <input type="text" name= "description" id="" placeholder="Descripción" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $description?>">
             </div>
             <div class="flex flex-col gap-2">
                <label for="brand" class="text-text">Marca</label>
                <input type="text" name= "brand" id="" placeholder="Marca" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $brand?>">
             </div>
            <div class="flex flex-col gap-2">
                <label for="cost" class="text-text">Precio Coste</label>
                <input type="number" name="cost" id="" placeholder="Precio Coste" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $cost?>">
            </div>
            <div class="flex flex-col gap-2">
                <label for="pricePerUnit" class="text-text">Precio por unidad</label>
                <input type="number" name="pricePerUnit" id="" placeholder="Precio Final" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $pricePerUnit?>">
            </div>
            <div class="flex flex-col gap-2">
                <label for="frets" class="text-text">Trastes</label>
                <input type="number" name="frets" id="" placeholder="Numero trastes" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $frets?>">
            </div>
            <div class="flex flex-col gap-2">
                <label for="color" class="text-text">Color</label>
                <input type="text" name="color" id="" placeholder="Color" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $color?>">
            </div>
            <div class="flex flex-col gap-2">
                <label for="bodyMaterial" class="text-text">Material del cuerpo</label>
                <input type="text" name="bodyMaterial" placeholder="Material del cuerpo" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]" value="<?php echo $bodyMaterial?>">
            </div>
            <div class="flex flex-col gap-2">
                <label for="tremolo" class="text-text">Tremolo</label>
                <select name="tremolo" id="tremolo" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
                    <option value="true" <?php echo ($tremolo == 1) ? "selected" : ""?>>Sí</option>
                    <option value="false" <?php echo ($tremolo == 0) ? "selected" : ""?>>No</option>
                </select>
            </div>
            <div class="flex flex-col gap-2">
                <label for="categoryId" class="text-text">Categoria</label>
                <select name="categoryId" id="tremolo" class="text-text border-1 p-2 rounded-md border-[#363636] bg-[#363636]">
                    <?php 
                        $sql = 'SELECT * FROM `023_categories`;';

                        require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/config/db_connect.php');
                        $result = mysqli_query($connect, $sql);
                        $categories = mysqli_fetch_all($result,MYSQLI_ASSOC);
                        
                        foreach($categories as $category) {
                            if ($category['categoryId'] != $categoryId) {
                                echo '<option value="'.$category['categoryId'].'">'.$category['categoryName'].'</option>';
                            } else {
                                 echo '<option value="'.$category['categoryId'].'" selected>'.$category['categoryName'].'</option>';
                            }
                        }
                    ?>
                </select>
            </div>
            <input type="submit" value="Actualizar" class="bg-btn text-text rounded-md cursor-pointer">
        </form>  
    </div>
</main>
<?php require($_SERVER['DOCUMENT_ROOT'].'/student023/shop/backend/footer.php');?>