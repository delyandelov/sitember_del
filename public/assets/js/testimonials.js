document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.testimonials_slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: true,
        speed: 1200,
        breakpoints: {
            768: {
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 50,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 50,
            }
        }
    })
})