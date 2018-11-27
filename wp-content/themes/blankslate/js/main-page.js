"use strict";

/* About Doctor - Slider */
(function () {
  $(document).ready(function () {
    $('.doctor-recommends__slider').slick({
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
          arrows: true,
          swipe: true,
          vertical: false,
          dots: true
        }
      }]
    });
    $('.expert-smm__slider').slick({
      dots: false,
      arrows: true,
      dragable: false,
      slidesToShow: 4,
      slidesToScroll: 2,
      infinite: true,
      cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
      responsive: [{
        breakpoint: 1199,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
          arrows: true,
          dots: false,
          swipe: true
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: true,
          dots: false,
          swipe: true
        }
      }]
    });
  });
})();