$('.slider_sl').slick({
    arrows: false,
    dots: true,
    swipe: true,
    prevArrow: $('.arrows-left'),
    nextArrow: $('.arrows-right'),
    // dotsClass: 'my-dots-class',
    slidesToScroll: 1,
    mobileFirst: true,
    slidesToShow: 1,
    dotsClass: 'courses-dots',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                vertical: true,
                dots: true,
                arrows: true
            }
        },
        {
            breakpoint: 768,
            settings: {
               
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 320,
            settings: {
             
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
