$(document).ready(function () {
    new Swiper(".hotel-slider", {
        loop: !0,
        navigation: {
            nextEl: ".hotel-slider__button_next",
            prevEl: ".hotel-slider__button_prev",
        },
        keyboard: { enabled: !0, onlyInViewport: !1 },
    }),
        new Swiper(".reviews-slider", {
            loop: !0,
            navigation: {
                nextEl: ".reviews-slider__button_next",
                prevEl: ".reviews-slider__button_prev",
            },
            keyboard: { enabled: !0, onlyInViewport: !1 },
        });
    ymaps.ready(function () {
        new ymaps.Map("map", {
            center: [25.078704097883328, 55.135232499999944],
            zoom: 15,
            controls: ["zoomControl"],
        });
    }),
        $(".menu-button").on("click", function () {
            $(".navbar-bottom").toggleClass("navbar-bottom_visible");
        });
    var e = $("[data-toggle='modal']");
    function o() {
        event.preventDefault();
        var e = $(".modal__overlay"),
            o = $(".modal__dialog");
        e.removeClass("modal__overlay_visible"),
            o.removeClass("modal__dialog_visible");
    }
    $(".modal__close").on("click", o),
        e.on("click", function () {
            var e = $(this).attr("data-href");
            $(e).find(".modal__overlay").addClass("modal__overlay_visible"),
                $(e).find(".modal__dialog").addClass("modal__dialog_visible");
        }),
        $(document).keyup(function (e) {
            ("Escape" !== e.key && 27 !== e.keyCode) || o();
        }),
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
                    phone: { required: "Telephone number is required" },
                },
            });
        }),
        $(".newsletter__subscribe").validate({
            errorClass: "invalid-email",
            messages: {
                email: {
                    required: "We need your email address to contact you",
                    email:
                        "Your email address must be in the format of example@domain.com",
                },
            },
        }),
        $("[type='tel']").mask("+7 (999) 999-99-99"),
        AOS.init();
});
