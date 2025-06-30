document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        speed: 1000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        loop: true,
    });
});
