"use strict";

(function () {
  $(document).ready(function () {
    $('.procedure-slider__slider').slick({
      dots: true,
      // centerMode: true,
      // fade: true,
      arrows: true,
      // autoplay:true,
      // autoplaySpeed:5000,
      vertical: true,
      dragable: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
      responsive: [{
        breakpoint: 1199,
        settings: {
          arrows: false,
          swipe: true,
          vertical: false
        }
      }]
    });
  });
})();