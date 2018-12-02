
(function () {
    $(document).ready(function () {
        $('#doctorReviewsSlider').slick({
            dots: false,
            // centerMode: true,
            // fade: true,
            arrows: true,
            // autoplay:true,
            // autoplaySpeed:5000,
            dragable: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: false,
                        swipe: true,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: true,
                        dots: false,
                        swipe: true,
                    }
                }
            ]
        })

        $('#doctorReviewsSlider').slickLightbox({
            itemSelector: 'a[href]'
        });

        $('#expertSmmSliderReviewsPage').slick({
            dots: false,
            arrows: true,
            dragable: false,
            slidesToShow: 4,
            slidesToScroll: 2,
            infinite: true,
            cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2,
                        arrows: true,
                        dots: false,
                        swipe: true,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: true,
                        dots: false,
                        swipe: true
                    }
                }
            ]
        })

         /* Patient stories slider settings */
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
                $('#patientStoriesPreviews').slick('slickAdd',
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

                $('#patientStoriesVideos').slick('slickAdd',
                    `<div>
        <div class="recommends-slider__item" style="background-image: url('${slide.preview}')">
            <a class="inlinePlayButton" href="${slide.link}"></a>
        </div>
    </div>`);
            })
        }    

        /* Patient stories slider initialization */
        $(function () {

            $('#patientStoriesPreviews').slick(galleryPreviewSettings);
            $('#patientStoriesVideos').slick(galleryVideoSettings);

            addSlide(galleryCollection);

            /* sync preview with video */
            $("#patientStoriesPreviews .slick-slide").on("click", function () {
                var index = $(this).attr("data-slick-index");
                $('#patientStoriesVideos').slick("slickGoTo", index);
            });
            $(".inlinePlayButton").YouTubePopUp({ autoplay: 0 });
        })
    })
})();

