<?php

/**
 * Template Name: Home
 */

get_header();
$fields = get_fields();
global $base;
?>
<main>
    <section class="main-head">
        <div class="main-head__wrap">
            <div class="main-head__bg" style="background-image: url('<?=$fields['first_block']['image']?>');">
                <div class="main-head__mask"></div>
            </div>
            <div class="main-head__text-wrap">
                <div class="main-head__text-block">
                    <div class="main-head__text-wrapper">
                        <h1 class="main-head__h1"><?=$fields['first_block']['text']?></h1>
                        <h3 class="main-head__h3"><?=$fields['first_block']['sign']?></h3>
                    </div>
                </div>

                <div class="main-head__request">
                    <div class="main-head__request-wrap">
                        <div class="main-head__request-button request-button">
                            <span><?=$base['button_text_register_for_appointment']?></span>
                            <div class="main-head__request-line">
                                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="101px" height="9px" viewBox="0 0 101 9" enable-background="new 0 0 101 9" xml:space="preserve">
                                    <polygon opacity="0.4" fill="#D8D8D8" points="101,4.486 91.993,0 91.999,4 0.499,4.139 -0.001,4.139 0.001,5.139 0.501,5.139
                92.001,5 92.007,9 " />
                                </svg>
                            </div>
                            <div class="main-head__square"></div>
                        </div>
                    </div>
                </div>
                <div class="main-head__scroll">
                    <div class="main-head__scroll-wrap">
                        <div class="main-head__scroll-text">прокрутите колесико мышки</div>
                        <div>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="9.125px" height="101.119px" viewBox="0.875 1.253 9.125 101.119" enable-background="new 0.875 1.253 9.125 101.119"
                                 xml:space="preserve">
                                <g opacity="1">
                                    <polygon opacity="0.4" fill="#fff" enable-background="new    " points="5.872,31.753 5.872,21.753 5.872,21.253 4.872,21.253
                                4.872,21.753 4.872,31.753 4.872,32.253 5.872,32.253 	" />
                                    <polygon opacity="0.4" fill="#fff" enable-background="new    " points="5.872,51.753 5.872,41.753 5.872,41.253 4.872,41.253
                                4.872,41.753 4.872,51.753 4.872,52.253 5.872,52.253 	" />
                                    <polygon opacity="0.4" fill="#fff" enable-background="new    " points="5.872,11.753 5.872,1.753 5.872,1.253 4.872,1.253
                                4.872,1.753 4.872,11.753 4.872,12.253 5.872,12.253 	" />
                                    <polygon opacity="0.4" fill="#fff" enable-background="new    " points="5.872,91.753 5.872,81.753 5.872,81.253 4.872,81.253
                                4.872,81.753 4.872,91.753 4.872,92.253 5.872,92.253 	" />
                                    <polygon opacity="0.4" fill="#fff" enable-background="new    " points="5.872,71.753 5.872,61.753 5.872,61.253 4.872,61.253
                                4.872,61.753 4.872,71.753 4.872,72.253 5.872,72.253 	" />
                                    <polygon opacity="0.4" fill="#fff" enable-background="new    " points="0.872,93.372 5.372,102.372 9.872,93.372 	" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-about">
        <div class="main-about__wrap">
            <div id="main-about-video" class="main-about__video" style="background-image: url('<?=get_template_directory_uri();?>/images/about-page/video_poster.jpg')">
                <a class="inlinePlayButton" href="https://www.youtube.com/watch?v=<?=$fields['second_block']['video_code']?>"></a>
            </div>
        </div>
    </section>
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
        <section class="about-surgeon">
            <div class="about-surgeon__header">
                <h2 class="about-surgeon__h2"><?=$fields['second_block']['sign']?></h2>
            </div>
            <div class="about-surgeon__text">
                <div class="about-surgeon__paragraphs">
                    <?=$fields['second_block']['text']?>
                </div>
            </div>
            <div class="about-surgeon__more more">
                <div class="about-surgeon__more-btn more__btn">
                    <a class="about-surgeon__more-link more__link" href="<?=$fields['second_block']['button_link']?>"><?=$base['button_detail_text']?></a>
                </div>
            </div>
        </section>
        <section class="surgery-results">
            <div class="surgery-results__wrap">
                <div class="surgery-results__left">
                    <div class="surgery-results__header">
                        <h2 class="surgery-results__h2">результаты работ</h2>
                        <div class="surgery-results__pointer pointer__wrap">
                            <div class="surgery-results__square pointer__square-dark">
                            </div>
                        </div>
                    </div>
                    <div class="surgery-results__list">
                        <div class="surgery-results__item">
                            <a href="./procedure-page.html" class="surgery-results__link" href="./procedure-page.html" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/nose.jpg')">
                                <span class="surgery-results__link-text">Нос</span>
                            </a>
                        </div>
                        <div class="surgery-results__item">
                            <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/breast.jpg')">
                                <span class="surgery-results__link-text">Грудь</span>
                            </a>
                        </div>
                        <div class="surgery-results__item">
                            <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/body.jpg')">
                                <span class="surgery-results__link-text">Тело</span>
                            </a>
                        </div>
                        <div class="surgery-results__item">
                            <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/face.jpg')">
                                <span class="surgery-results__link-text">Лицо</span>
                            </a>
                        </div>
                        <div class="surgery-results__item">
                            <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/aesthetic_medicine.jpg')">
                                <span class="surgery-results__link-text">Эстетическая медицина</span>
                            </a>
                        </div>
                        <div class="surgery-results__item">
                            <a href="./procedure-page.html" class="surgery-results__link" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/intimate_plastic.jpg')">
                                <span class="surgery-results__link-text">Интимная пластика</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="surgery-results__right">
                    <div class="surgery-results__wrap-slider">
                        <div id="surgeryResultsSliderMain" class="surgery-results__slider">
                            <div class="surgery-results__slider-item">
                                <div class="surgery-results__img" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/img2.jpg')"></div>
                            </div>
                            <div class="surgery-results__slider-item">
                                <div class="surgery-results__img" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/img1.jpg')"></div>
                            </div>
                            <div class="surgery-results__slider-item">
                                <div class="surgery-results__img" style="background-image: url('<?=get_template_directory_uri();?>/images/surgery-results/img3.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="surgery-projects">
            <div class="surgery-projects__text-block">
                <div class="request-block">
                    <div class="request-button__light request-button">
                        <span class="request-button__text request-button__text-light"><?=$base['button_text_register_for_appointment']?></span>
                    </div>
                </div>
                <div class="surgery-projects__header">
                    <h2 class="surgery-projects__h2"><?=$fields['fourth_block']['title']?></h2>
                    <div class="surgery-projects__pointer pointer__wrap">
                        <div class="surgery-projects__square pointer__square-light">
                        </div>
                    </div>
                </div>
            </div>
            <div class="surgery-projects__gallery">
                <?php foreach ($fields['fourth_block']['tiles'] as $tile) :?>
                    <a href="<?=$tile['link']?>" style="background-image: url('<?=$tile['image']['url']?>')"
                        <?=($tile['target_blank'] == 1) ? 'target="_blank"' : ''?>
                       class="surgery-projects__gallery-link">
                        <div class="surgery-projects__gallery-text"><?=$tile['text']?></div>
                    </a>
                <?php endforeach;?>
            </div>

        </section>
        <section class="expert-smm">
            <div class="expert-smm__width">
                <div class="expert-smm__header">
                    <h2 class="expert-smm__h2"><?=$fields['fifth_block']['title']?></h2>
                    <div class="expert-smm__pointer pointer__wrap">
                        <div class="expert-smm__square pointer__square-dark">
                        </div>
                    </div>
                </div>
                <div class="expert-smm__view-link-wrap">
                    <a href="<?=$fields['fifth_block']['button_link']?>" class="expert-smm__view-link"><?=$fields['fifth_block']['button_text']?></a>
                </div>

                <div class="expert-smm__slider-wrap">
                    <div id="expertSmmSliderMain" class="expert-smm__slider slick-slider">
                        <div class="expert-smi__slider-item">
                            <a href="https://1plus1.ua" target="_blank" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/1_plus_1_logo.png">
                            </a>
                        </div>
                        <div class="expert-smi__slider-item">
                            <a href="https://www.unian.ua" target="_blank" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/unian-logo.png">
                            </a>
                        </div>
                        <div class="expert-smi__slider-item">
                            <a href="http://www.channel5.com" target="_blank" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/logo_5_channel.png">
                            </a>
                        </div>
                        <div class="expert-smi__slider-item">
                            <a href="https://ain.ua" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/ain-logo.png">
                            </a>
                        </div>
                        <div class="expert-smi__slider-item">
                            <a href="https://1plus1.ua" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/1_plus_1_logo.png">
                            </a>
                        </div>
                        <div class="expert-smi__slider-item">
                            <a href="https://www.unian.ua" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/unian-logo.png">
                            </a>
                        </div>
                        <div class="expert-smi__slider-item">
                            <a href="http://www.channel5.com" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/logo_5_channel.png">
                            </a>
                        </div>
                        <div class="expert-smi__slider-item">
                            <a href="https://ain.ua" class="expert-smi__link-wrap">
                                <img src="<?=get_template_directory_uri();?>/images/smm-expert/ain-logo.png">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <section class="recommends-page__wrap main-page__section-gap">
        <section class="doctor-recommends">
            <div class="doctor-recommends__width">
                <div class="doctor-recommends__header-wrap">
                    <div class="doctor-recommends__header">
                        <h2 class="doctor-recommends__h2"><?=$fields['sixth_block']['title']?></h2>
                        <div class="doctor-recommends__pointer pointer__wrap">
                            <div class="doctor-recommends__square pointer__square-light">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="recommends-slider__wrap">
                    <div class="synch-carousels">
                        <div class="left gallery__wrap">
                            <div id="recommendsSliderPreviewsMain" class="gallery">
                            </div>
                        </div>

                        <div class="right gallery__wrap">
                            <div id="recommendsSliderVideosMain" class="gallery2">
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
            <div class="request-button__light request-button">
                <span class="request-button__text request-button__text-light"><?=$base['button_text_register_for_appointment']?></span>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>