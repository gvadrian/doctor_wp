
(function () {
    $(document).ready(function () {

        /* Icamps Page Photo Slider */

        var icampsPhotoGallery = [
            [ /* 1st Slider */
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
                }
            ], [ /* 2nd Slider */
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
                }
            ], [ /* 3rd Slider */
                {
                    preview: './dist/images/icamps/gallery3/img1.png',
                }, {
                    preview: './dist/images/icamps/gallery3/img2.png',
                }, {
                    preview: './dist/images/icamps/gallery3/img3.png',
                }, {
                    preview: './dist/images/icamps/gallery3/img4.png',
                }, {
                    preview: './dist/images/icamps/gallery3/img5.png',
                }, {
                    preview: './dist/images/icamps/gallery3/img6.png',
                }, {
                    preview: './dist/images/icamps/gallery3/img7.png',
                }, {
                    preview: './dist/images/icamps/gallery3/img8.png',
                }
            ], [ /* 4th Slider */
                {
                    preview: './dist/images/icamps/gallery4/img1.png',
                }, {
                    preview: './dist/images/icamps/gallery4/img2.png',
                }, {
                    preview: './dist/images/icamps/gallery4/img3.png',
                }, {
                    preview: './dist/images/icamps/gallery4/img4.png',
                }, {
                    preview: './dist/images/icamps/gallery4/img5.png',
                }, {
                    preview: './dist/images/icamps/gallery4/img6.png',
                }, {
                    preview: './dist/images/icamps/gallery4/img7.png',
                }, {
                    preview: './dist/images/icamps/gallery4/img8.png',
                }
            ]
        ];

        var icampsMobSliderSettings = {
            mobileFirst: true,
            arrows: true,
            cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',

            responsive: [
                {
                    breakpoint: 1200,
                    settings: 'unslick'
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: true,
                        dots: true,
                        swipe: true,
                        dragable: true,
                    }
                },
                {
                    breakpoint: 1,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: true,
                        swipe: true,
                        dragable: true,
                    }
                }
            ]
        };

        var icampsDeskSliderSettings = {
            mobileFirst: true,
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
                icampsDeskSlider.slick('slickAdd',
                `<div>
                    <div style="display: flex">
                        <div class="icamps-photos__slide">
                            <a href="${slide[0].preview}" class="icamps-photos__slide-img" style="background-image: url('${slide[0].preview}')">
                            </a>
                        </div>
                        <div class="icamps-photos__slide">
                            <a href="${slide[1] ? slide[1].preview : '' }" class="icamps-photos__slide-img" style="background-image: url('${slide[1] ? slide[1].preview : '' }')">
                            </a>
                        </div>
                    </div>
                    <div style="display: flex">
                        <div class="icamps-photos__slide">
                            <a href="${slide[2] ? slide[2].preview : '' }" class="icamps-photos__slide-img" style="background-image: url('${slide[2] ? slide[2].preview : '' }')">
                            </a>
                        </div>
                        <div class="icamps-photos__slide">
                            <a href="${slide[3] ? slide[3].preview : '' }" class="icamps-photos__slide-img" style="background-image: url('${slide[3] ? slide[3].preview : '' }')">
                            </a>
                        </div>
                    </div>
                </div>`);
            })
        }

        function addSlideMob(slides) {

            slides.forEach(function (slide) {
                icampsMobSlider.slick('slickAdd',
                `<div>
                    <div class="icamps-photos__slide">
                        <a href="${slide.preview}" class="icamps-photos__slide-img" style="background-image: url('${slide.preview}')">
                        </a>
                    </div>
                </div>`);
            })
        }

        function getViewport() {

            var viewPortWidth;
            var viewPortHeight;

            // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
            if (typeof window.innerWidth != 'undefined') {
                viewPortWidth = window.innerWidth,
                    viewPortHeight = window.innerHeight
            }

            // IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
            else if (typeof document.documentElement != 'undefined'
                && typeof document.documentElement.clientWidth !=
                'undefined' && document.documentElement.clientWidth != 0) {
                viewPortWidth = document.documentElement.clientWidth,
                    viewPortHeight = document.documentElement.clientHeight
            }

            // older versions of IE
            else {
                viewPortWidth = document.getElementsByTagName('body')[0].clientWidth,
                    viewPortHeight = document.getElementsByTagName('body')[0].clientHeight
            }
            return [viewPortWidth, viewPortHeight];
        }

        if (icampsSlider.length) {

            $('.icamps-photos__slider').slickLightbox({
                itemSelector: 'a[href]'
            });

            var wViewport = getViewport();

            if (wViewport[0] > 1200) {
                icampsDeskSlider.slick(icampsDeskSliderSettings);

                // addSlideDesk(icampsPhotoGallery[0]);

                $('.icamps-photos__link').click(function () {

                    $('.icamps-photos__tab').removeClass('active');
                    $(this).parent().addClass('active');

                    var targetSlideIndex = $(this).attr('data-tab');

                    if(icampsPhotoGallery[targetSlideIndex] ===  undefined){
                        throw new Error('no slides to display for this category');
                        return false;
                    }

                    icampsDeskSlider.slick('unslick');

                    // /* Clear element content */
                    icampsDeskSlider.empty();

                    icampsDeskSlider.slick(icampsDeskSliderSettings);
                    addSlideDesk(icampsPhotoGallery[targetSlideIndex]);

                })

            }

            if (wViewport[0] >= 1 && wViewport[0] < 1200) {
                icampsMobSlider.slick(icampsMobSliderSettings);

                // addSlideMob(icampsPhotoGallery[0]);

                $('.icamps-photos__link').click(function () {

                    $('.icamps-photos__tab').removeClass('active');
                    $(this).parent().addClass('active');

                    var targetSlideIndex = $(this).attr('data-tab');

                    if(icampsPhotoGallery[targetSlideIndex] ===  undefined){
                        throw new Error('no slides to display for this category');
                        return false;
                    }

                    icampsMobSlider.slick('unslick');

                    // /* Clear element content */
                    icampsMobSlider.empty();

                    icampsMobSlider.slick(icampsMobSliderSettings);
                    addSlideMob(icampsPhotoGallery[targetSlideIndex]);

                })
            }
        }

        /**
         * Returns an array with arrays of the given size.
         *
         * @param myArray {Array} array to split
         * @param chunk_size {Integer} Size of every group
         */

        function chunkArray(myArray, chunk_size){
            var index = 0;
            var arrayLength = myArray.length;
            var tempArray = [];
            
            for (index = 0; index < arrayLength; index += chunk_size) {
                var myChunk = myArray.slice(index, index+chunk_size);
                // Do something if you want with the group
                tempArray.push(myChunk);
            }

            return tempArray;
        }


         /* Icamps Video Slider */

        var galleryCollection = [
            {
                preview: './dist/images/recommends-page/slider1/video-cover1.jpg',
                link: 'https://www.youtube.com/watch?v=sL-tCCRU0Mk'
            }, {
                preview: './dist/images/recommends-page/slider1/video-cover2.jpg',
                link: 'https://www.youtube.com/watch?v=IS7iW013dV8'
            }, {
                preview: './dist/images/recommends-page/slider1/video-cover3.jpg',
                link: 'https://www.youtube.com/watch?v=59ZDzzioKKg'
            }, {
                preview: './dist/images/recommends-page/slider1/video-cover2.jpg',
                link: 'https://www.youtube.com/watch?v=sL-tCCRU0Mk'
            }, {
                preview: './dist/images/recommends-page/slider2/video-cover1.jpg',
                link: 'https://www.youtube.com/watch?v=tqxMQS2LLhQ'
            }, {
                preview: './dist/images/recommends-page/slider2/video-cover2.jpg',
                link: 'https://www.youtube.com/watch?v=gVIdOSr2aGc'
            }
        ];

        var galleryPreviewSettings = {
            rows: 0,
            slidesToShow: 2,
            arrows: false,
            vertical: false,
            draggable: true,
            responsive: [
                {
                    breakpoint: 1999,
                    settings: {
                        slidesToShow: 3,
                        vertical: false,
                    }
                },
            ]
        };
        var galleryVideoSettings = {
            rows: 0,
            useTransform: false,
            prevArrow: ".arrow-left",
            nextArrow: ".arrow-right",
            fade: true,
            asNavFor: ".gallery",
            dots: true,
        };

        function addSlide(slides) {

            slides.forEach(function (slide) {
                $('#icampsReviewsPreviews').slick('slickAdd',
                    ` <div>
                <div class="recommends-slider__preview" style="background-image: url('${slide.preview}')">
                    <svg class="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" width="38px" height="40px" viewBox="0 0 38 40" enable-background="new 0 0 38 40"
                        xml:space="preserve">
                        <g transform="translate(0 .373)">
                            <ellipse opacity="0.604" fill="#243249" enable-background="new    " cx="19" cy="19.627" rx="19" ry="19.627" />
                            <g opacity="0.803">
                                <path fill="#FFFFFF" d="M23.57,19.214l-6.287-4.441c-0.195-0.15-0.717-0.15-0.758,0.413v8.883
                                            c0.046,0.562,0.577,0.572,0.758,0.413l6.286-4.441c0.228-0.164,0.281-0.482,0.117-0.71c-0.032-0.045-0.072-0.084-0.117-0.117
                                            H23.57z M17.497,23.122v-6.989l4.937,3.494L17.497,23.122z"
                                />
                                <path fill="#FFFFFF" d="M19,7.851c-6.286,0-11.4,5.283-11.4,11.776c0,6.494,5.114,11.777,11.4,11.777s11.4-5.283,11.4-11.777
                                            C30.4,13.134,25.286,7.851,19,7.851z M19,30.399c-5.751,0-10.428-4.83-10.428-10.772c0-5.94,4.677-10.771,10.428-10.771
                                            s10.428,4.83,10.428,10.771C29.428,25.57,24.75,30.4,19,30.399L19,30.399z"
                                />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>`);

                $('#icampsReviewsVideos').slick('slickAdd',
                    `<div>
        <div class="recommends-slider__item" style="background-image: url('${slide.preview}')">
            <a class="inlinePlayButton" href="${slide.link}"></a>
        </div>
    </div>`);
            })
        }    

        /* Icamps video slider initialization */
        $(function () {

            $('#icampsReviewsPreviews').slick(galleryPreviewSettings);
            $('#icampsReviewsVideos').slick(galleryVideoSettings);

            addSlide(galleryCollection);

            /* sync preview with video */
            $("#icampsReviewsPreviews .slick-slide").on("click", function () {
                var index = $(this).attr("data-slick-index");
                $('#icampsReviewsVideos').slick("slickGoTo", index);
            });
            $(".inlinePlayButton").YouTubePopUp({ autoplay: 0 });

        })


    })

})();