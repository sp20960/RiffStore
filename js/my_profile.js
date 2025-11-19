document.addEventListener('DOMContentLoaded', () => {
    const btnNoAddress = document.getElementById("button-no-address");
    const containerAddAddress = document.getElementById('container-add-address');
    const closeAddAddress = document.getElementById('close-add-address');
    const showAddressInfo = document.querySelectorAll('#show-address-info') || null

    btnNoAddress.addEventListener('click', () => {
        containerAddAddress.classList.add('flex!')
    })

    closeAddAddress.addEventListener('click', () => {
        containerAddAddress.classList.remove('flex!')
    })

    if(showAddressInfo != null){
        showAddressInfo.forEach((element) => {
            element.addEventListener('click', (e) => {
                e.target.parentElement.nextElementSibling.classList.toggle('block!');
            })
        })
    }
})