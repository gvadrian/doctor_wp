"use strict";

(function () {
  $(document).ready(function () {
    $('#procedureResulstSlider').slick({
      dots: true,
      arrows: true,
      vertical: false,
      dragable: false,
      fade: true,
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
    $('#procedureResulstSlider').slickLightbox({
      itemSelector: 'a.surgery-results__img'
    });
  });
})();