$(document).ready(function () {
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

    var menuButton = $(".menu-button");

    menuButton.on("click", function () {
        $(".navbar-bottom").toggleClass("navbar-bottom_visible");
    });

    var modalButton = $("[data-toggle='modal']");
    var closeButton = $(".modal__close");
    closeButton.on("click", closeModal);
    modalButton.on("click", openModal);
    $(document).keyup(function (e) {
        if (e.key === "Escape" || e.keyCode === 27) {
            closeModal();
        }
    });

    function openModal() {
        var targeModal = $(this).attr("data-href");
        $(targeModal)
            .find(".modal__overlay")
            .addClass("modal__overlay_visible");
        $(targeModal).find(".modal__dialog").addClass("modal__dialog_visible");
    }

    function closeModal() {
        event.preventDefault();
        var modalOverlay = $(".modal__overlay");
        var modalDialog = $(".modal__dialog");
        modalOverlay.removeClass("modal__overlay_visible");
        modalDialog.removeClass("modal__dialog_visible");
    }

    $(".form").each(function () {
        $(this).validate({
            errorClass: "invalid",
            errorElement: "span",
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "The name must be 2 letters or more.",
                },
                email: {
                    required: "We need your email address to contact you",
                    email:
                        "Your email address must be in the format of example@domain.com",
                },
                phone: {
                    required: "Telephone number is required",
                },
            },
        });
    });
    $(".newsletter__subscribe").validate({
        errorClass: "invalid-email",
        messages: {
            email: {
                required: "We need your email address to contact you",
                email:
                    "Your email address must be in the format of example@domain.com",
            },
        },
    });

    $("[type='tel']").mask("+7 (999) 999-99-99");

    AOS.init();
});
