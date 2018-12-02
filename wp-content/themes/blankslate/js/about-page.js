"use strict";

(function () {
  $(document).ready(function () {
    $('.headerVideoPlayButton').YouTubePopUp({
      autoplay: 0
    });
    $('#surgeryResultsSliderAbout').slick({
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
    $('#surgeryResultsSliderAbout').slickLightbox({
      itemSelector: 'a.surgery-results__img'
    });
    $('#associationsSliderAbout').slick({
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
    $('#certificatesSliderAbout').slick({
      dots: false,
      arrows: true,
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
          slidesToScroll: 2
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
    $('#certificatesSliderAbout').slickLightbox({
      itemSelector: 'a.doctor-certificates__link'
    });
    /* AboutPage Recommends slider settings */

    var galleryPreviewSettings = {
      rows: 0,
      slidesToShow: 2,
      arrows: false,
      vertical: false,
      draggable: true,
      responsive: [{
        breakpoint: 1999,
        settings: {
          slidesToShow: 3,
          vertical: false
        }
      }]
    };
    var galleryVideoSettings = {
      rows: 0,
      useTransform: false,
      prevArrow: ".arrow-left",
      nextArrow: ".arrow-right",
      fade: true,
      asNavFor: ".gallery",
      dots: true
    };

    function addSlide(slides) {
      slides.forEach(function (slide) {
        $('#recommendsSliderPreviewsAbout').slick('slickAdd', " <div>\n                <div class=\"recommends-slider__preview\" style=\"background-image: url('".concat(slide.preview, "')\">\n                    <svg class=\"\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\"\n                        y=\"0px\" width=\"38px\" height=\"40px\" viewBox=\"0 0 38 40\" enable-background=\"new 0 0 38 40\"\n                        xml:space=\"preserve\">\n                        <g transform=\"translate(0 .373)\">\n                            <ellipse opacity=\"0.604\" fill=\"#243249\" enable-background=\"new    \" cx=\"19\" cy=\"19.627\" rx=\"19\" ry=\"19.627\" />\n                            <g opacity=\"0.803\">\n                                <path fill=\"#FFFFFF\" d=\"M23.57,19.214l-6.287-4.441c-0.195-0.15-0.717-0.15-0.758,0.413v8.883\n                                            c0.046,0.562,0.577,0.572,0.758,0.413l6.286-4.441c0.228-0.164,0.281-0.482,0.117-0.71c-0.032-0.045-0.072-0.084-0.117-0.117\n                                            H23.57z M17.497,23.122v-6.989l4.937,3.494L17.497,23.122z\"\n                                />\n                                <path fill=\"#FFFFFF\" d=\"M19,7.851c-6.286,0-11.4,5.283-11.4,11.776c0,6.494,5.114,11.777,11.4,11.777s11.4-5.283,11.4-11.777\n                                            C30.4,13.134,25.286,7.851,19,7.851z M19,30.399c-5.751,0-10.428-4.83-10.428-10.772c0-5.94,4.677-10.771,10.428-10.771\n                                            s10.428,4.83,10.428,10.771C29.428,25.57,24.75,30.4,19,30.399L19,30.399z\"\n                                />\n                            </g>\n                        </g>\n                    </svg>\n                </div>\n            </div>"));
        $('#recommendsSliderVideosAbout').slick('slickAdd', "<div>\n        <div class=\"recommends-slider__item\" style=\"background-image: url('".concat(slide.preview, "')\">\n            <a class=\"inlinePlayButton\" href=\"").concat(slide.link, "\"></a>\n        </div>\n    </div>"));
      });
    }
    /* AboutPage slider initialization */


    $(function () {
      $('#recommendsSliderPreviewsAbout').slick(galleryPreviewSettings);
      $('#recommendsSliderVideosAbout').slick(galleryVideoSettings);
      addSlide(galleryCollection);
      /* sync preview with video */

      $("#recommendsSliderPreviewsAbout .slick-slide").on("click", function () {
        var index = $(this).attr("data-slick-index");
        $('#recommendsSliderVideosAbout').slick("slickGoTo", index);
      });
      $(".inlinePlayButton:not(.headerVideoPlayButton)").YouTubePopUp({
        autoplay: 0
      });
    });
    /* About Page tabs */

    $(window).on('resize', function (e) {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        tabControl();
      }, 250);
    });
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
  });
})();