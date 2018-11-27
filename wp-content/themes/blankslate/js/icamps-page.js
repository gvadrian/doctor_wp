"use strict";

(function () {
  $(document).ready(function () {
    var icampsPhotoGallery = [[
    /* 1st Slider */
    {
      preview: './dist/images/icamps/gallery1/img1.png'
    }, {
      preview: './dist/images/icamps/gallery1/img2.png'
    }, {
      preview: './dist/images/icamps/gallery1/img3.png'
    }, {
      preview: './dist/images/icamps/gallery1/img4.png'
    }, {
      preview: './dist/images/icamps/gallery1/img5.png'
    }, {
      preview: './dist/images/icamps/gallery1/img6.png'
    }, {
      preview: './dist/images/icamps/gallery1/img7.png'
    }, {
      preview: './dist/images/icamps/gallery1/img8.png'
    }], [
    /* 2nd Slider */
    {
      preview: './dist/images/icamps/gallery2/img1.png'
    }, {
      preview: './dist/images/icamps/gallery2/img2.png'
    }, {
      preview: './dist/images/icamps/gallery2/img3.png'
    }, {
      preview: './dist/images/icamps/gallery2/img4.png'
    }, {
      preview: './dist/images/icamps/gallery2/img5.png'
    }, {
      preview: './dist/images/icamps/gallery2/img6.png'
    }, {
      preview: './dist/images/icamps/gallery2/img7.png'
    }, {
      preview: './dist/images/icamps/gallery2/img8.png'
    }], [
    /* 3rd Slider */
    {
      preview: './dist/images/icamps/gallery3/img1.png'
    }, {
      preview: './dist/images/icamps/gallery3/img2.png'
    }, {
      preview: './dist/images/icamps/gallery3/img3.png'
    }, {
      preview: './dist/images/icamps/gallery3/img4.png'
    }, {
      preview: './dist/images/icamps/gallery3/img5.png'
    }, {
      preview: './dist/images/icamps/gallery3/img6.png'
    }, {
      preview: './dist/images/icamps/gallery3/img7.png'
    }, {
      preview: './dist/images/icamps/gallery3/img8.png'
    }], [
    /* 4th Slider */
    {
      preview: './dist/images/icamps/gallery4/img1.png'
    }, {
      preview: './dist/images/icamps/gallery4/img2.png'
    }, {
      preview: './dist/images/icamps/gallery4/img3.png'
    }, {
      preview: './dist/images/icamps/gallery4/img4.png'
    }, {
      preview: './dist/images/icamps/gallery4/img5.png'
    }, {
      preview: './dist/images/icamps/gallery4/img6.png'
    }, {
      preview: './dist/images/icamps/gallery4/img7.png'
    }, {
      preview: './dist/images/icamps/gallery4/img8.png'
    }]];
    var icampsMobSliderSettings = {
      mobileFirst: true,
      prevArrow: ".arrow-left",
      nextArrow: ".arrow-right",
      cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
      responsive: [{
        breakpoint: 1200,
        settings: 'unslick'
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: true,
          dots: true,
          swipe: true,
          dragable: true
        }
      }, {
        breakpoint: 1,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          dots: true,
          swipe: true,
          dragable: true
        }
      }]
    };
    var icampsDeskSliderSettings = {
      mobileFirst: true,
      prevArrow: ".arrow-left",
      nextArrow: ".arrow-right",
      cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
      rows: 2,
      slidesPerRow: 2,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      swipe: false,
      dragable: false
    };
    var icampsSlider = $('.icamps-photos__slider');
    var icampsMobSlider = $('#icampsMobSlider');
    var icampsDeskSlider = $('#icampsDeskSlider');

    function addSlideDesk(slides) {
      var chunkedSlides = chunkArray(slides, 4);
      chunkedSlides.forEach(function (slide) {
        icampsSlider.slick('slickAdd', "<div>\n                    <div style=\"display: flex\">\n                        <div class=\"icamps-photos__slide\">\n                            <a class=\"icamps-photos__slide-img\" style=\"background-image: url('".concat(slide[0].preview, "')\">\n                            </a>\n                        </div>\n                        <div class=\"icamps-photos__slide\">\n                            <a class=\"icamps-photos__slide-img\" style=\"background-image: url('").concat(slide[1] ? slide[1].preview : '', "')\">\n                            </a>\n                        </div>\n                    </div>\n                    <div style=\"display: flex\">\n                        <div class=\"icamps-photos__slide\">\n                            <a class=\"icamps-photos__slide-img\" style=\"background-image: url('").concat(slide[2] ? slide[2].preview : '', "')\">\n                            </a>\n                        </div>\n                        <div class=\"icamps-photos__slide\">\n                            <a class=\"icamps-photos__slide-img\" style=\"background-image: url('").concat(slide[3] ? slide[3].preview : '', "')\">\n                            </a>\n                        </div>\n                    </div>\n                </div>"));
      });
    }

    function addSlideMob(slides) {
      slides.forEach(function (slide) {
        icampsSlider.slick('slickAdd', "<div>\n                    <div class=\"icamps-photos__slide\">\n                        <a class=\"icamps-photos__slide-img\" style=\"background-image: url('".concat(slide.preview, "')\">\n                        </a>\n                    </div>\n                </div>"));
      });
    }

    function getViewport() {
      var viewPortWidth;
      var viewPortHeight; // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight

      if (typeof window.innerWidth != 'undefined') {
        viewPortWidth = window.innerWidth, viewPortHeight = window.innerHeight;
      } // IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
      else if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0) {
          viewPortWidth = document.documentElement.clientWidth, viewPortHeight = document.documentElement.clientHeight;
        } // older versions of IE
        else {
            viewPortWidth = document.getElementsByTagName('body')[0].clientWidth, viewPortHeight = document.getElementsByTagName('body')[0].clientHeight;
          }

      return [viewPortWidth, viewPortHeight];
    }

    if (icampsSlider.length) {
      var wViewport = getViewport();

      if (wViewport[0] > 1200) {
        icampsSlider.slick(icampsDeskSliderSettings);
        addSlideDesk(icampsPhotoGallery[0]);
        $('.icamps-photos__link').click(function () {
          $('.icamps-photos__tab').removeClass('active');
          $(this).parent().addClass('active');
          var targetSlideIndex = $(this).attr('data-tab');

          if (icampsPhotoGallery[targetSlideIndex] === undefined) {
            throw new Error('no slides to display for this category');
            return false;
          }

          icampsSlider.slick('unslick'); // /* Clear element content */

          icampsSlider.empty();
          icampsSlider.slick(icampsDeskSliderSettings);
          addSlideDesk(icampsPhotoGallery[targetSlideIndex]);
        });
      }

      if (wViewport[0] >= 1 && wViewport[0] < 1200) {
        icampsSlider.slick(icampsMobSliderSettings);
        addSlideMob(icampsPhotoGallery[0]);
        $('.icamps-photos__link').click(function () {
          $('.icamps-photos__tab').removeClass('active');
          $(this).parent().addClass('active');
          var targetSlideIndex = $(this).attr('data-tab');

          if (icampsPhotoGallery[targetSlideIndex] === undefined) {
            throw new Error('no slides to display for this category');
            return false;
          }

          icampsSlider.slick('unslick'); // /* Clear element content */

          icampsSlider.empty();
          icampsSlider.slick(icampsMobSliderSettings);
          addSlideMob(icampsPhotoGallery[targetSlideIndex]);
        });
      }
    }
    /**
     * Returns an array with arrays of the given size.
     *
     * @param myArray {Array} array to split
     * @param chunk_size {Integer} Size of every group
     */


    function chunkArray(myArray, chunk_size) {
      var index = 0;
      var arrayLength = myArray.length;
      var tempArray = [];

      for (index = 0; index < arrayLength; index += chunk_size) {
        var myChunk = myArray.slice(index, index + chunk_size); // Do something if you want with the group

        tempArray.push(myChunk);
      }

      return tempArray;
    }
  });
})();