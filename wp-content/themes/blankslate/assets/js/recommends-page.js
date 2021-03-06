(function () {
    $(document).ready(function () {

        var galleryCollection = [
            [ /* 1st Slider */
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
                }
            ], [ /* 2nd Slider */
                {
                    preview: './dist/images/recommends-page/slider2/video-cover1.jpg',
                    link: 'https://www.youtube.com/watch?v=tqxMQS2LLhQ'
                }, {
                    preview: './dist/images/recommends-page/slider2/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=gVIdOSr2aGc'
                }, {
                    preview: './dist/images/recommends-page/slider2/video-cover3.jpg',
                    link: 'https://www.youtube.com/watch?v=7e1bhU8L6gg'
                }, {
                    preview: './dist/images/recommends-page/slider2/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=gVIdOSr2aGc'
                }
            ], [ /* 3rd Slider */
                {
                    preview: './dist/images/recommends-page/slider3/video-cover1.jpg',
                    link: 'https://www.youtube.com/watch?v=MZ5MBKQHyxY'
                }, {
                    preview: './dist/images/recommends-page/slider3/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=zfkx6z3rQ3g'
                }, {
                    preview: './dist/images/recommends-page/slider3/video-cover3.jpg',
                    link: 'https://www.youtube.com/watch?v=DfazBncoS_U'
                }, {
                    preview: './dist/images/recommends-page/slider3/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=zfkx6z3rQ3g'
                }
            ], [ /* 4th Slider */
                {
                    preview: './dist/images/recommends-page/slider4/video-cover1.jpg',
                    link: 'https://www.youtube.com/watch?v=nhyTsr2kznU'
                }, {
                    preview: './dist/images/recommends-page/slider4/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=5BoLK3ZkZnk'
                }, {
                    preview: './dist/images/recommends-page/slider4/video-cover3.jpg',
                    link: 'https://www.youtube.com/watch?v=134bakRYAVI'
                }, {
                    preview: './dist/images/recommends-page/slider4/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=5BoLK3ZkZnk'
                }
            ], [ /* 5th Slider */
                {
                    preview: './dist/images/recommends-page/slider5/video-cover1.jpg',
                    link: 'https://www.youtube.com/watch?v=4nSkLEEcDJk'
                }, {
                    preview: './dist/images/recommends-page/slider5/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=zo-6A5DbhfA'
                }, {
                    preview: './dist/images/recommends-page/slider5/video-cover3.jpg',
                    link: 'https://www.youtube.com/watch?v=Wg6WdC18Idk'
                }, {
                    preview: './dist/images/recommends-page/slider5/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=zo-6A5DbhfA'
                }

            ], [ /* 6th Slider */
                {
                    preview: './dist/images/recommends-page/slider6/video-cover1.jpg',
                    link: 'https://www.youtube.com/watch?v=kAlbgODiGAQ'
                }, {
                    preview: './dist/images/recommends-page/slider6/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=co1luyoJ_EM&t=5s'
                }, {
                    preview: './dist/images/recommends-page/slider6/video-cover3.jpg',
                    link: 'https://youtu.be/_-atEpZp8RU'
                }, {
                    preview: './dist/images/recommends-page/slider6/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=co1luyoJ_EM&t=5s'
                }
            ], [ /* 7th Slider */
                {
                    preview: './dist/images/recommends-page/slider7/video-cover1.jpg',
                    link: 'https://www.youtube.com/watch?v=GDY2dk1ymzA'
                }, {
                    preview: './dist/images/recommends-page/slider7/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=XT5rXRSOBxg'
                }, {
                    preview: './dist/images/recommends-page/slider7/video-cover3.jpg',
                    link: 'https://www.youtube.com/watch?v=WL42aloZ_0I&t=112s'
                }, {
                    preview: './dist/images/recommends-page/slider7/video-cover2.jpg',
                    link: 'https://www.youtube.com/watch?v=XT5rXRSOBxg'
                }
            ]
        ];

        var galleryPreviewSettings = {
            rows: 0,
            slidesToShow: 2,
            arrows: false,
            fade: false,
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
                $('#recommendsPageSliderPreviews').slick('slickAdd',
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

                $('#recommendsPageSliderVideos').slick('slickAdd',
                    `<div>
        <div class="recommends-slider__item" style="background-image: url('${slide.preview}')">
            <a class="inlinePlayButton" href="${slide.link}"></a>
        </div>
    </div>`);
            })
        }


        /* Procedure tabs */
        $(function () {

            /* Starter slider data on page load */
            $('#recommendsPageSliderPreviews').slick(galleryPreviewSettings);
            $('#recommendsPageSliderVideos').slick(galleryVideoSettings);

            /* Slick initialized with settings */
            addSlide(galleryCollection[0]);

            $(".inlinePlayButton").YouTubePopUp({ autoplay: 0 });            

            $("#recommendsPageSliderPreviews .slick-slide").on("click", function () {

                var index = $(this).attr("data-slick-index");
                $('.gallery2').slick("slickGoTo", index);
            });

            $('.doctor-recommends__nav-link').click(function () {

                var targetSlideIndex = $(this).attr('data-tab');

                if (galleryCollection[targetSlideIndex] === undefined) {
                    throw new Error('no slides to display for this category');
                    return false;
                }

                $('#recommendsPageSliderPreviews').slick('unslick');
                $('#recommendsPageSliderVideos').slick('unslick');

                // /* Clear element content */
                $('#recommendsPageSliderPreviews').empty();
                $('#recommendsPageSliderVideos').empty();

                /* Slick initialized with settings*/
                $('#recommendsPageSliderPreviews').slick(galleryPreviewSettings);
                $('#recommendsPageSliderVideos').slick(galleryVideoSettings);

                addSlide(galleryCollection[targetSlideIndex]);


                $("#recommendsPageSliderPreviews .slick-slide").on("click", function () {
                    var index = $(this).attr("data-slick-index");
                    $('#recommendsPageSliderVideos').slick("slickGoTo", index);
                });

                $(".inlinePlayButton").YouTubePopUp({ autoplay: 0 });
                

                /* All tabs unactive except the target one */
                $('.doctor-recommends__nav-link').removeClass('current');
                $(this).addClass('current');

            })
        })


    })
})();






