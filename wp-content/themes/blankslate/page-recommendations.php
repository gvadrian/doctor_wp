<?php

/**
 * Template Name: Recommendations
 */

get_header(); ?>
<main>
    <div class="recommends-page__wrap">
        <section class="doctor-recommends">
            <div class="doctor-recommends__width">
                <div class="doctor-recommends__header-wrap">
                    <div class="doctor-recommends__header">
                        <h2 class="doctor-recommends__h2">Рекомендации доктора</h2>
                        <div class="doctor-recommends__pointer pointer__wrap">
                            <div class="doctor-recommends__square pointer__square-light">
                            </div>
                        </div>
                    </div>
                    <div class="doctor-recommends__nav">
                        <a class="doctor-recommends__nav-link current" data-tab="0">Грудь
                            <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                <div class="icamps-photos__square pointer__square-light">
                                </div>
                            </div>
                        </a>
                        <a class="doctor-recommends__nav-link" data-tab="1">Нос
                            <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                <div class="icamps-photos__square pointer__square-light">
                                </div>
                            </div>
                        </a>
                        <a class="doctor-recommends__nav-link " data-tab="2">Лицо
                            <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                <div class="icamps-photos__square pointer__square-light">
                                </div>
                            </div>
                        </a>
                        <a class="doctor-recommends__nav-link" data-tab="3">Тело
                            <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                <div class="icamps-photos__square pointer__square-light">
                                </div>
                            </div>
                        </a>
                        <a class="doctor-recommends__nav-link" data-tab="4">Интимная пластика
                            <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                <div class="icamps-photos__square pointer__square-light">
                                </div>
                            </div>
                        </a>
                        <a class="doctor-recommends__nav-link" data-tab="5">Эстетическая медицина
                            <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                <div class="icamps-photos__square pointer__square-light">
                                </div>
                            </div>
                        </a>
                        <a class="doctor-recommends__nav-link" data-tab="6">Другое
                            <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                <div class="icamps-photos__square pointer__square-light">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="recommends-slider__wrap">
                    <div class="synch-carousels" id="slider-1">
                        <div class="left gallery__wrap">
                            <div id="recommendsPageSliderPreviews" class="gallery">
                            </div>
                        </div>

                        <div class="right gallery__wrap">
                            <div id="recommendsPageSliderVideos" class="gallery2">
                            </div>
                            <div class=" nav-arrows">
                                <button class="recommends-page__arrow-left arrow-left">
                                </button>
                                <button class="recommends-page__arrow-right arrow-right">
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="request-block">
            <div class="request-button__dark request-button">
                <span class="request-button__text request-button__text-dark">Записаться на прием</span>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>