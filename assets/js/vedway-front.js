document.addEventListener('readystatechange', function () {
    if (document.readyState === 'complete') {
        swiper_hero.init();
        swiper_heart.init();
        swiper_testimonial.init();
        //swiper_atmosphere.init();

    }
});

const swiper_hero = new Swiper('.swiper-container#heroSlider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    centeredSlides: true,
    effect: 'slide',
    init: false,
    autoplay: {
        delay: 5000,
    },
});

const swiper_atmosphere = new Swiper('.swiper-container#atmosSlider', {
    // Optional parameters
    slidesPerView: 'auto',
    loop: false,
    centeredSlides: true,
    effect: 'fade',
});

const atmosGoto = (slideNo) => {
    let atmosTopFg = document.getElementById('atmosTopFg');
    let imgs = '';
    let animName = '';
    let url = atmosTopFg.baseURI + 'wp-content/themes/vedway/assets/images/atmosphere-section/icons/';
    switch (slideNo) {
        case 0:
            imgs = url + 'one.png';
            animName = 'atmosTopSpin'
            break;
        case 1:
            imgs = url + 'two.png';
            break;
        case 2:
            imgs = url + 'three.png';
            break;
        case 3:
            imgs = url + 'four.png';
            break;
        case 4:
            imgs = url + 'five.png';
            break;

        default:
            break;
    }
    console.log(imgs);
    swiper_atmosphere.slideToLoop(slideNo, 500, false);
    atmosTopFg.src = imgs;
    atmosTopFg.style.animationName = animName;

}


const swiper_heart = new Swiper('.swiper-container#heartSlider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    centeredSlides: true,
    effect: 'slide',
    init: false,

});

const swiper_testimonial = new Swiper('.swiper-container#testimonialSlider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    breakpoints: {
        960: {
            slidesPerView: 2,
        },
    },
    spaceBetween: 30,
    centeredSlides: false,
    effect: 'slide',
    init: false,
    autoplay: {
        delay: 5000,
    },
});



/*AOS*/
AOS.init();