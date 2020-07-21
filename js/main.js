var mySwiper = new Swiper(".swiper-container", {
    // Optional parameters
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".slider-button_next",
        prevEl: ".slider-button_prev",
    },

    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
});
ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [25.078704097883328, 55.135232499999944],
        zoom: 15,
        controls: ["zoomControl"],
    });
}
