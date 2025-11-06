document.addEventListener("DOMContentLoaded", () => {

  // CAROUSEL FUNCTIONALITY
  const nextArrow = document.querySelector(".next");
  const prevArrow = document.querySelector(".prev");
  const images = document.querySelectorAll(".carousel img");

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
