<form action="/student023/shop/backend/admin/products.php" method="POST">
    <input type="hidden" name="productId" value="<?= htmlspecialchars($product['productId']) ?>">
    <button type="submit" name="submit"><i class="fa fa-cart-shopping text-text cursor-pointer"></i></button>
</form>