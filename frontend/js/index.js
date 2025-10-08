document.addEventListener('DOMContentLoaded', ()=> {
    const addProduct = document.getElementById('add-product');
    const searchProduct = document.getElementById('search-product');
    const deleteProduct = document.getElementById('delete-product')
    const updateProduct = document.getElementById('update-product')
 
    addProduct.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/forms/form_product_insert.php'
    })

    searchProduct.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/forms/form_product_select.php'
    })

    deleteProduct.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/forms/form_product_delete_call.php'
    })

    updateProduct.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/forms/form_product_update_call.php'
    })
})