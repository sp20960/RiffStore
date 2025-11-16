document.addEventListener("DOMContentLoaded", () => {
  const urlProductsEndpoint = "/student023/shop/backend/endpoints/db_select_available_products.php"
  const nextArrow = document.querySelector(".next");
  const prevArrow = document.querySelector(".prev");
  const images = document.querySelectorAll(".carousel img");
  const listProducts = document.getElementById('list-product');

  // async function loadProducts() {
  //   try {
  //     const response = await fetch(urlProductsEndpoint);
  //     const products = await response.json();

  //     showProducts(products);
  //   } catch (error) {
  //     listProducts.innerHTML = <h1>¡Ha habido un problema cargando los productos!</h1>;
  //   }
  // }

  // function showProducts(products) {
  //   if(products != null && products.length != 0){
  //     listProducts.innerHTML = products
  //     .map((product) => 
  //       `
        
  //       `
  //     ).join("");
  //   } else{
  //     listProducts.innerHTML = <h1>¡No hay productos disponibles!</h1>;
  //   }
  // }

  // CAROUSEL FUNCTIONALITY
  function nextImage() {
    let actualIndex;
    images.forEach((image, index) => {
      if (image.classList.contains("active")) {
        actualIndex = +index;
      }
    });

    let nextIndex;
    if (actualIndex !== images.length - 1) {
      nextIndex = actualIndex + 1;
    } else {
      nextIndex = 0;
    }

    images[actualIndex].classList.remove("active");
    images[nextIndex].classList.add("active");
  }

  function prevImage() {
    let actualIndex;
    images.forEach((image, index) => {
      if (image.classList.contains("active")) {
        actualIndex = +index;
      }
    });

    let prevIndex;
    if (actualIndex !== 0) {
      prevIndex = actualIndex - 1;
    } else {
      prevIndex = images.length - 1;
    }

    images[actualIndex].classList.remove("active");
    images[prevIndex].classList.add("active");
  }

  nextArrow.addEventListener("click", () => {
    nextImage();
  });

  prevArrow.addEventListener("click", () => {
    prevImage();
  });
});
