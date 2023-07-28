var swiper = new Swiper(".property-image-slider", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
});