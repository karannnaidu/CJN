$(document).ready(function () {
    $('.testimonials').bxSlider({
        auto: true,
        pause: 7000, //time on each review
        mode: 'fade', // or slide   
        infiniteLoop: true,
        controls: false, // true for arrows
        slideMargin: 0,
        oneToOneTouch: true,
        swipeThreshold: 50,
        touchEnabled: true,
        keyboardEnabled: true,
        wrapperClass: '#bx-wrapper'

    });
});
