document.addEventListener('DOMContentLoaded', ()=> {
    const products = document.getElementById('manage-products');
    const searchProduct = document.getElementById('search-product');
    const deleteProduct = document.getElementById('delete-product')
    const updateProduct = document.getElementById('update-product')
 
    products.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/admin/products.php'
        console.log("object");
    })

  
})