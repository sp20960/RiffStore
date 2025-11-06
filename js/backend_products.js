document.addEventListener('DOMContentLoaded', () => {
    const addProductBtn = document.getElementById('add-product-btn')

    addProductBtn.addEventListener('click', () => {
         window.location.href = '/student023/shop/backend/forms/products/form_product_insert.php'
    })
})