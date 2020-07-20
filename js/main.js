var mySwiper = new Swiper(".swiper-container", {
    // Optional parameters
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".slider-button__next",
        prevEl: ".slider-button__prev",
    },

    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
});