document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.projects_slider', {
        effect: 'fade',
        centeredSlides: true,
        autoplay: true,
        speed: 700,
        slidesPerView: 1,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    })
})