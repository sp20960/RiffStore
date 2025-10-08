document.addEventListener('DOMContentLoaded', ()=> {
    const addProduct = document.getElementById('add-product');
    const searchProduct = document.getElementById('search-product');
 
    addProduct.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/forms/form_product_insert.php'
    })

    searchProduct.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/forms/form_product_select.php'
        console.log("object");
    })
})