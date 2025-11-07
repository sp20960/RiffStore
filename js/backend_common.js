addEventListener('DOMContentLoaded', () => {
    const logo = document.getElementById('logo');
    const products = document.getElementById('manage-products');
    const shoppingCart = document.getElementById('shopping-cart');
    const profileDropdownContent = document.getElementById('profile-dropdown-content');
    const profile = document.getElementById('profile');

    products.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/admin/products.php'
    })

    shoppingCart.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/admin/shopping_cart.php'
    })

    logo.addEventListener('click', () => {
        window.location.href = '/student023/shop/backend/index.php'
    })

    profile.addEventListener('click', () => {
        if(profileDropdownContent.classList.contains('hidden')){
            profileDropdownContent.classList.add('flex');
        } else {
            profileDropdownContent.classList.add('hidden')
        }
        
    })
})