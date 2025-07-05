let swiper3;
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        loop: true,
        simulateTouch: false,
        allowTouchMove: false,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 30,
        grabCursor: true,
        effect: "creative",
        creativeEffect: {
            prev: {
                shadow: true,
                translate: ["-20%", 0, -1],
            },
                next: {
                translate: ["100%", 0, 0],
            },
        },
        speed: 800,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    swiper3 = new Swiper(".mySwiper3", {
        effect: "cards",
        grabCursor: true,
        speed: 800,
        /* autoplay: {
            delay: 10000,
            disableOnInteraction: false,
        }, */
    });
    (function () {
        'use strict';

        let swiper4 = null;
        const breakpoint = window.matchMedia('(max-width: 1024px)');

        const enableSwiper = function () {
            swiper4 = new Swiper('.mySwiper4', {
                slidesPerView: 5,
                speed: 800,
                allowTouchMove: true, /* Mobilde kaydırma açık */
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    320: { slidesPerView: 1 }, /* Opsiyonel: Daha küçük ekranlar için */
                    768: { slidesPerView: 3 },
                    1024: { slidesPerView: 5 }
                }
            });
        };

        const breakpointChecker = function () {
            if (breakpoint.matches) {
                if (!swiper4) {
                    enableSwiper();
                }
            } else {
                if (swiper4) {
                    swiper4.destroy(true, true);
                    swiper4 = null;
                }
            }
        };

        breakpointChecker();

        breakpoint.addEventListener('change', breakpointChecker);
    })();
    var swiperGallery = new Swiper(".mySwiperGallery", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        speed: 700,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiperGallery2 = new Swiper(".mySwiperGallery2", {
        loop: true,
        spaceBetween: 10,
        speed: 700,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiperGallery,
        },
        grabCursor: true,
        effect: "creative",
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        creativeEffect: {
            prev: {
                shadow: true,
                translate: ["-20%", 0, -1],
            },
            next: {
                translate: ["100%", 0, 0],
            },
        },
    });
});
function changeStory(element) {
    const slides = document.querySelectorAll('#userStoriesUsers .swiper-slide');
    const index = Array.from(slides).indexOf(element);

    if (swiper3 && index !== -1) {
        swiper3.slideTo(index);
    }
}
