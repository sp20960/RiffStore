addEventListener('DOMContentLoaded', () => {
    const addProduct = document.getElementById('add-product')
    const logo = document.getElementById('logo')

    addProduct.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/forms/form_product_insert.php'
    })

    logo.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/index.php'
    })
})