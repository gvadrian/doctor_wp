<?php

/**
 * Template Name: Reviews
 */

get_header();?>
<main class="patient-stories__page-wrap">
    <section class="recommends-page__wrap  main-page__section-gap">
        <div class="doctor-recommends">
            <div class="doctor-recommends__width">
                <div class="doctor-recommends__header-wrap">
                    <div class="doctor-recommends__header">
                        <h2 class="doctor-recommends__h2">истории пациентов</h2>
                        <div class="doctor-recommends__pointer pointer__wrap">
                            <div class="doctor-recommends__square pointer__square-light">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommends-slider__wrap">
                    <div class="synch-carousels">
                        <div class="left gallery__wrap">
                            <div id="patientStoriesPreviews" class="gallery">
                            </div>
                        </div>

                        <div class="right gallery__wrap">
                            <div id="patientStoriesVideos" class="gallery2">
                            </div>
                            <div class="nav-arrows">
                                <button class="arrow-left">
                                </button>
                                <button class="arrow-right">
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <section class="doctor-reviews">

                    <div class="doctor-reviews__width">
                        <div class="doctor-reviews__header">
                            <h2 class="doctor-reviews__h2">Отзывы</h2>
                            <div class="doctor-reviews__pointer pointer__wrap">
                                <div class="doctor-reviews__square pointer__square-light">
                                </div>
                            </div>
                        </div>

                        <div class="doctor-reviews__slider-wrap">

                            <div id="doctorReviewsSlider" class="doctor-reviews__slider slick-slider">
                                <div class="doctor-reviews__slider-item_horiz">
                                    <a class="horizontal-img" style="background-image: url(/dist/images/patient-stories/comment-1.png)"></a>
                                    <a class="horizontal-img" style="background-image: url(/dist/images/patient-stories/comment-2.png)"></a>
                                </div>
                                <div class="doctor-reviews__slider-item_vert">
                                    <a class="vertical-img" style="background-image: url(/dist/images/patient-stories/review-1.jpg)"></a>
                                    <a class="vertical-img" style="background-image: url(/dist/images/patient-stories/review-2.jpg)"></a>
                                </div>
                                <div class="doctor-reviews__slider-item_horiz">
                                    <a class="horizontal-img" style="background-image: url(/dist/images/patient-stories/comment-1.png)"></a>
                                    <a class="horizontal-img" style="background-image: url(/dist/images/patient-stories/comment-2.png)"></a>
                                </div>
                                <div class="doctor-reviews__slider-item_vert">
                                    <a class="vertical-img" style="background-image: url(/dist/images/patient-stories/review-3.jpg)"></a>
                                    <a class="vertical-img" style="background-image: url(/dist/images/patient-stories/review-4.jpg)"></a>
                                </div>
                            </div>

                        </div>


                    </div>
                </section>
            </div>
            <div class="request-block">
                <div class="request-button__light request-button">
                    <span class="request-button__text request-button__text-light"><?=$base['button_text_register_for_appointment']?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="patient-smi">
        <div class="patient-smi__width">
            <div class="patient-smi__header">
                <h2 class="patient-smi__h2">Эксперт в сми</h2>
                <div class="patient-smi__pointer pointer__wrap">
                    <div class="patient-smi__square pointer__square-dark">
                    </div>
                </div>
            </div>

            <div class="patient-smi__view-link-wrap">
                <a class="patient-smi__view-link">посмотреть все</a>
            </div>

            <div class="patient-smi__slider-wrap">
                <div id="expertSmmSliderReviewsPage" class="patient-smi__slider slick-slider">
                    <div class="patient-smi__slider-item">
                        <a href="https://1plus1.ua" target="_blank" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/1_plus_1_logo.png">
                        </a>
                    </div>
                    <div class="patient-smi__slider-item">
                        <a href="https://www.unian.ua" target="_blank" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/unian-logo.png">
                        </a>
                    </div>
                    <div class="patient-smi__slider-item">
                        <a href="http://www.channel5.com" target="_blank" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/logo_5_channel.png">
                        </a>
                    </div>
                    <div class="patient-smi__slider-item">
                        <a href="https://ain.ua" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/ain-logo.png">
                        </a>
                    </div>
                    <div class="patient-smi__slider-item">
                        <a href="https://1plus1.ua" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/1_plus_1_logo.png">
                        </a>
                    </div>
                    <div class="patient-smi__slider-item">
                        <a href="https://www.unian.ua" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/unian-logo.png">
                        </a>
                    </div>
                    <div class="patient-smi__slider-item">
                        <a href="http://www.channel5.com" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/logo_5_channel.png">
                        </a>
                    </div>
                    <div class="patient-smi__slider-item">
                        <a href="https://ain.ua" class="patient-smi__link">
                            <img src="/dist/images/smm-expert/ain-logo.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="lines">
            <div class="lines__list">
                <div class="lines__item"></div>
                <div class="lines__item"></div>
                <div class="lines__item"></div>
                <div class="mob-none lines__item"></div>
                <div class="tab-none lines__item"></div>
                <div class="tab-none lines__item"></div>
            </div>
        </div>

        <div class="request-block">
            <div class="request-button__dark request-button">
                <span class="request-button__text request-button__text-dark"><?=$base['button_text_register_for_appointment']?></span>
            </div>
        </div>


    </section>
</main>
<?php get_footer();?>