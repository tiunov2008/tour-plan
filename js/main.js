var hotelSlider = new Swiper(".hotel-slider", {
    // Optional parameters
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".hotel-slider__button_next",
        prevEl: ".hotel-slider__button_prev",
    },

    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
});

var reviewsSlider = new Swiper(".reviews-slider", {
    // Optional parameters
    loop: true,

    // Navigation arrows
    navigation: {
        nextEl: ".reviews-slider__button_next",
        prevEl: ".reviews-slider__button_prev",
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
