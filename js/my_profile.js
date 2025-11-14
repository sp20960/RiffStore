document.addEventListener('DOMContentLoaded', () => {
    const btnNoAddress = document.getElementById("button-no-address");
    const containerNoAddress = document.getElementById('container-no-address');

    btnNoAddress.addEventListener('click', () => {
        containerNoAddress.classList.add('flex!')
        containerNoAddress.parentElement.classList.remove('hover:scale-101')
    })
})