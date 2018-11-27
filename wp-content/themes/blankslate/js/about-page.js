"use strict";

tabControl();
/*
We also apply the switch when a viewport change is detected on the fly
(e.g. when you resize the browser window or flip your device from 
portrait mode to landscape). We set a timer with a small delay to run 
it only once when the resizing ends. It's not perfect, but it's better
than have it running constantly during the action of resizing.
*/

var resizeTimer;
$(window).on('resize', function (e) {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(function () {
    tabControl();
  }, 250);
});
/*
The function below is responsible for switching the tabs when clicked.
It switches both the tabs and the accordion buttons even if 
only the one or the other can be visible on a screen. We prefer
that in order to have a consistent selection in case the viewport
changes (e.g. when you esize the browser window or flip your 
device from portrait mode to landscape).
*/

function tabControl() {
  var tabs = $('.tabbed-content').find('.tabs');

  if (tabs.is(':visible')) {
    tabs.find('a').on('click', function (event) {
      event.preventDefault();
      var target = $(this).attr('href'),
          tabs = $(this).parents('.tabs'),
          buttons = tabs.find('a'),
          item = tabs.parents('.tabbed-content').find('.item');
      buttons.removeClass('active');
      item.removeClass('active');
      $(this).addClass('active');
      $(target).addClass('active');
    });
  } else {
    $('.item').on('click', function () {
      var container = $(this).parents('.tabbed-content'),
          currId = $(this).attr('id'),
          items = container.find('.item');
      container.find('.tabs a').removeClass('active');
      items.removeClass('active');
      $(this).addClass('active');
      container.find('.tabs a[href$="#' + currId + '"]').addClass('active');
    });
  }
}

(function () {
  $(document).ready(function () {
    $('.doctor-associations__slider').slick({
      dots: false,
      // centerMode: true,
      // fade: true,
      arrows: true,
      // autoplay:true,
      // autoplaySpeed:5000,
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
    $('.doctor-certificates__slider').slick({
      dots: false,
      // centerMode: true,
      // fade: true,
      arrows: true,
      // autoplay:true,
      // autoplaySpeed:5000,
      dragable: false,
      slidesToShow: 6,
      slidesToScroll: 2,
      centerMode: false,
      infinite: true,
      cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
      responsive: [{
        breakpoint: 1199,
        settings: {
          arrows: true,
          dots: false,
          swipe: true,
          centerMode: true,
          slidesToShow: 4,
          slidesToScroll: 4
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