<?php

/**
 * Template Name: SMI
 */

get_header(); ?>
<main class="news__about">
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
    <div class="news-about__wrap">
        <section class="news-about__video">
            <div class="news-about__video-inner">
                <div class="news-about__headline">
                    <div class="news-about__head-wrap">
                        <div class="news-about__second">
                            <div class="icon__back" onclick="history.back()">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="10px" height="18px" viewBox="0 0 10 18" enable-background="new 0 0 10 18" xml:space="preserve">
                                    <g id="Mobile" opacity="0.4">
                                        <g id="Service_info_Mobile" transform="translate(-20.000000, -100.000000)">
                                            <g id="Service_info" transform="translate(-389.000000, 60.000000)">
                                                <g id="h1" transform="translate(409.000000, 21.000000)">
                                                    <path id="Shape" opacity="0.4" fill="#FFFFFF" d="M8.875,36.814C9.003,36.938,9.164,37,9.341,37
                                                               c0.177,0,0.338-0.062,0.466-0.186c0.257-0.248,0.257-0.652,0-0.9L1.608,28l8.199-7.914c0.257-0.248,0.257-0.652,0-0.9
                                                               c-0.257-0.248-0.675-0.248-0.932,0L0.193,27.55c-0.257,0.248-0.257,0.652,0,0.9L8.875,36.814z"
                                                    />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="news-about__second-text">Павел Денищук на 1+1 о пластических операциях Роксоланы из Великолепного Века</h2>
                        </div>
                        <div>
                            <span class="news-about__second-date">17.10.18</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-about__play">
                <div class="news-about__player" style="background-image: url('/dist/images/news_img/news_beauty-face.jpg')">
                    <div class="news-about__player-poster">
                        <a href="https://www.youtube.com/watch?v=mKQMhA9dhF0" class="news-about__player-poster-ren"></a>
                    </div>
                </div>
                <!-- <section class="about-page__img-section">

                            <div class="about-page__width about-page__img-section_img">
                                <a class="inlinePlayButton"></a>
                            </div>

                        </section> -->
                <div class="news-about__play-text">
                    <p> Мерьем Узерли, актриса, которая сыграла главную героиню турецкого сериала "Великолепный век" Роксолану,
                        изменилась до неузнаваемости! Что же сделала актриса со своей внешностью, интересует миллионы
                        ее поклонников. Чтобы ответить на этот вопрос команда 1+1 обратилась к одному из ведущих пластических
                        хирургов с 30-летним опытом, Павлу Денищуку. В своем интервью доктор рассказал, какие пластические
                        операции сделала Мерьем Узерли.</p>
                </div>
            </div>
            <div class="request-block news-about__btn">
                <div class="request-button__dark request-button">
                    <span class="request-button__text request-button__text-dark"><?= $base['button_text_register_for_appointment'] ?></span>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>