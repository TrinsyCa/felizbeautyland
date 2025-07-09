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
        lazy: true,
    });
    var swiperGallery2 = new Swiper(".mySwiperGallery2", {
        loop: true,
        spaceBetween: 10,
        speed: 700,
        lazy: true,
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
    const reservationCategoryBtn = document.querySelectorAll(".reservation-category-btn");
    const reservationList = document.querySelectorAll(".reservation-list");

    const reservationCategoryBox = document.querySelectorAll(".reservation-category-box");
    const lastBox = reservationCategoryBox[reservationCategoryBox.length - 1];

    if (lastBox) {
        const observer = new MutationObserver(() => {
            if (lastBox.classList.contains('activeAnim')) {
                reservationCategoryBtn.forEach((btn) => {
                    btn.style.pointerEvents = 'all';
                });
            } else {
                reservationCategoryBtn.forEach((btn) => {
                    btn.style.pointerEvents = 'none';
                });
            }
        });
        observer.observe(lastBox, { attributes: true, attributeFilter: ['class'] });
    }

    reservationCategoryBtn.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const currentReservationList = this.nextElementSibling;
            const currentReservationItem = currentReservationList.querySelector(".reservation-item");

            reservationCategoryBtn.forEach(function(rCategoryBtn) {
                rCategoryBtn.classList.remove('active');
                const currentReservationBoxes = currentReservationItem.querySelectorAll('.reservation-box');
                currentReservationBoxes.forEach((box, i) => {
                    box.classList.remove('showAnim');
                });
                if(currentReservationList.classList.contains('scrollActive')) {
                    setTimeout(() => {
                        currentReservationList.classList.remove('scrollActive');
                    }, 400);
                }
            });

            reservationList.forEach(function(rListBtn) {
                if (rListBtn !== currentReservationList) {
                    rListBtn.style.height = '0px';
                    rListBtn.classList.remove('active');
                    const currentReservationBoxes = currentReservationItem.querySelectorAll('.reservation-box');
                    currentReservationBoxes.forEach((box) => {
                        box.classList.remove('showAnim');
                    });
                    if(currentReservationList.classList.contains('scrollActive')) {
                        setTimeout(() => {
                            currentReservationList.classList.remove('scrollActive');
                        }, 400);
                    }
                }
            });

            if (currentReservationList.classList.contains('active')) {
                currentReservationList.style.height = '0px';
                currentReservationList.classList.remove('active');

                if(currentReservationList.classList.contains('scrollActive')) {
                    setTimeout(() => {
                        currentReservationList.classList.remove('scrollActive');
                    }, 400);
                }
            } else {
                currentReservationList.style.height = 'auto';
                const fullHeight = currentReservationItem.offsetHeight;

                currentReservationList.style.height = '0px';
                currentReservationList.scrollIntoView({ behavior: "smooth", block: "start" });
                window.scrollBy({ top: -200, left: 0, behavior: "smooth" });
                currentReservationItem.scrollIntoView({ behavior: "smooth", block: "start" });

                requestAnimationFrame(function() {
                    btn.classList.add('active');
                    const computedMaxHeight = window.getComputedStyle(currentReservationList).maxHeight;
                    const maxHeightValue = parseInt(computedMaxHeight) + 50 || 0;
                    if(maxHeightValue <= fullHeight) {
                        currentReservationList.classList.add('scrollActive');
                    }
                    currentReservationList.style.height = fullHeight + 'px';
                    currentReservationList.classList.add('active');
                    const currentReservationBoxes = currentReservationItem.querySelectorAll('.reservation-box');
                    currentReservationBoxes.forEach((box, i) => {
                        setTimeout(() => {
                            box.classList.add('showAnim');
                        }, i * 250);
                    });
                });
            }
        });
    });

    const reservationsInput = document.getElementsByName("reservations")[0];
    const reservateBtns = document.querySelectorAll('.reservate-btn');

    reservateBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            btn.classList.toggle('checked');
            const p = btn.previousElementSibling;
            if (!p || p.tagName !== 'P') return;
            const text = p.textContent.trim();

            let value = reservationsInput.value || "";

            if (btn.classList.contains('checked')) {
                if (!value.includes(text + ',')) {
                    value += text + ',';
                }
                btn.innerText = '✓ Randevu Eklendi';
            } else {
                value = value.replace(text + ',', '');
                btn.innerText = '+ Randevu Ekle';
            }

            reservationsInput.value = value.trim();
        });
    });
});
function changeStory(element) {
    const slides = document.querySelectorAll('#userStoriesUsers .swiper-slide');
    const index = Array.from(slides).indexOf(element);

    if (swiper3 && index !== -1) {
        swiper3.slideTo(index);
    }
}
