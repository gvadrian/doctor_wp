<?php

/**
 * Template Name: Before/After
 */

get_header(); ?>
<main>
    <section class="before-after__wrap">

        <div class="content">
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
            <section class="surgery-results">
                <div class="surgery-results__wrap">
                    <div class="surgery-results__left">
                        <div class="before-after__header surgery-results__header">
                            <h2 class="surgery-results__h2">результаты работ</h2>
                            <div class="surgery-results__pointer pointer__wrap">
                                <div class="surgery-results__square pointer__square-dark">
                                </div>
                            </div>
                        </div>
                        <div class="surgery-results__list">
                            <div class="surgery-results__item">
                                <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('./dist/images/surgery-results/nose.jpg')">
                                    <span class="surgery-results__link-text">Нос</span>
                                </a>
                            </div>
                            <div class="surgery-results__item">
                                <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('./dist/images/surgery-results/breast.jpg')">
                                    <span class="surgery-results__link-text">Грудь</span>
                                </a>
                            </div>
                            <div class="surgery-results__item">
                                <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('./dist/images/surgery-results/body.jpg')">
                                    <span class="surgery-results__link-text">Тело</span>
                                </a>
                            </div>
                            <div class="surgery-results__item">
                                <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('./dist/images/surgery-results/face.jpg')">
                                    <span class="surgery-results__link-text">Лицо</span>
                                </a>
                            </div>
                            <div class="surgery-results__item">
                                <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('./dist/images/surgery-results/aesthetic_medicine.jpg')">
                                    <span class="surgery-results__link-text">Эстетическая медицина</span>
                                </a>
                            </div>
                            <div class="surgery-results__item">
                                <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('./dist/images/surgery-results/intimate_plastic.jpg')">
                                    <span class="surgery-results__link-text">Интимная пластика</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="surgery-results__right">
                        <div class="surgery-results__wrap-slider">
                            <div id="beforeAfterSlider" class="surgery-results__slider">
                                <div class="surgery-results__slider-item">
                                    <a class="surgery-results__img" style="background-image: url('./dist/images/surgery-results/img1.jpg')"></a>
                                </div>
                                <div class="surgery-results__slider-item">
                                    <a class="surgery-results__img" style="background-image: url('./dist/images/surgery-results/img2.jpg')"></a>
                                </div>
                                <div class="surgery-results__slider-item">
                                    <a class="surgery-results__img" style="background-image: url('./dist/images/surgery-results/img3.jpg')"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="request-block">
            <div class="request-button__dark request-button">
                <span class="request-button__text request-button__text-dark">Записаться на прием</span>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>