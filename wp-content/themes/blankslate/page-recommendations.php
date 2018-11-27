<?php

/**
 * Template Name: Recommendations
 */

get_header();
global $base;
?>

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
                        <a class="doctor-recommends__nav-link current" data-tab="0">Грудь</a>
                        <a class="doctor-recommends__nav-link" data-tab="1">Нос</a>
                        <a class="doctor-recommends__nav-link " data-tab="2">Лицо</a>
                        <a class="doctor-recommends__nav-link" data-tab="3">Тело</a>
                        <a class="doctor-recommends__nav-link" data-tab="4">Интимная пластика</a>
                        <a class="doctor-recommends__nav-link" data-tab="5">Эстетическая медицина</a>
                        <a class="doctor-recommends__nav-link" data-tab="6">Другое</a>
                    </div>
                </div>

                <div class="recommends-slider__wrap">
                    <div class="synch-carousels" id="slider-1">
                        <div class="left gallery__wrap">
                            <div class="gallery">
                            </div>
                        </div>

                        <div class="right gallery__wrap">
                            <div class="gallery2">
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
            </div>
        </section>
        <div class="request-block">
            <div class="request-button__dark request-button">
                <span class="request-button__text request-button__text-dark"><?=$base['button_text_register_for_appointment']?></span>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>