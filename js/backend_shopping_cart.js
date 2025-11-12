document.addEventListener('DOMContentLoaded', () => {
    const urlShoppingCartUpdateEndpoint = "/student023/shop/backend/endpoints/db_shopping_cart_update"
    const minusIcons = document.querySelectorAll('#minus-icon');
    const plusIcon = document.getElementById('plus-icon');

    async function updateShoppingCart(quantity, productId) {
        try {
            let response = await fetch(urlShoppingCartUpdateEndpoint + `?quantity=${quantity}&productId=${productId}`);
            let subtotals = await response.json();
        } catch (error) {
            
        }
        
    }

    minusIcons.forEach((icon) => {
        icon.addEventListener('click', (e) => {
            if(+icon.innerText === 1) {
                return;
            }   

            let quantity = e.target.nextSibling.innerText;
            let productId = e.target.parentElement.attributes['data-product'].value;

            updateShoppingCart(quantity, productId);
        });
    });

    // minusIcon.addEventListener('click', () => {
    //     if (+minusIcon.innerText === 1) {
    //         return;
    //     }         
    // })
});