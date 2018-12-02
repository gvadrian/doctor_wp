<?php

/**
 * Template Name: About
 */

get_header();
$fields = get_fields();
global $base;
$args_operations = [
    'post_type' => 'before_after',
    'numberposts' => 0,
];
$operations = get_posts($args_operations);
?>
<main>
    <div class="about-page__wrap">
        <section class="about-page__img-section">
            <div class="about-page__width about-page__img-section_img">
                <a class="inlinePlayButton"
                   href="https://www.youtube.com/watch?v=<?=$fields['first_block']['video_code']?>"></a>
            </div>
        </section>
        <section class="about-page__doctor-info">
            <div class="about-page__width">
                <div class="about-page__doctor-info_wrap">
                    <div class="about-page__doctor-info_header">
                        <h2 class="about-page__h2"><?=$fields['first_block']['title']?></h2>
                    </div>
                    <div class="about-page__doctor-info_paragraphs">
                        <?=$fields['first_block']['text']?>
                    </div>
                    <div class="about-page__doctor-info_numbers-section">
                        <?php $i = 1;?>
                        <?php foreach ($fields['first_block']['infoblock'] as $part) :?>
                            <div class="about-page__doctor-info_block<?=$i?>">
                                <div class="about-page__doctor-info_numbers"><?=$part['value']?></div>
                                <div class="about-page__doctor-info_numbers-text text<?=$i?>"><?=$part['sign']?></div>
                            </div>
                            <?php $i++;?>
                        <?php endforeach?>
                    </div>
                    <div class="about-page__doctor-info_icons-section">
                        <?php $i = 1;?>
                        <?php foreach ($fields['first_block']['infographics'] as $part) :?>
                            <div class="about-page__doctor-info_icon-block">
                                <div class="about-page__doctor-info_icon-wrap">
                                    <div class="about-page__doctor-info_icon icon<?=$i?>"
                                         style="background-image: url('<?=$part['icon']['url']?>')"></div>
                                </div>
                                <div class="about-page__doctor-info_icon-text">
                                    <?=$part['text']?>
                                </div>
                            </div>
                            <?php $i++;?>
                        <?php endforeach?>
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
        </section>
        <section class="about-page__doctor-tabs">
            <div class="about-page__doctor-tabs_width">
                <article class="tabbed-content tabs-side">
                    <div class="tabs">
                        <div class="list-wrap">
                            <?php $i = 1;?>
                            <?php foreach ($fields['second_block']['tabs'] as $tab) :?>
                                <div class="list-item">
                                    <a href="#side_tab<?=$i?>" <?=($i == 1) ? 'class="active"' : ''?>><?=$tab['title']?></a>
                                </div>
                                <?php $i++;?>
                            <?php endforeach?>
                        </div>
                    </div>
                    <div class="side_tab-wrap">
                        <?php $i = 1;?>
                        <?php foreach ($fields['second_block']['tabs'] as $tab) :?>
                            <div id="side_tab<?=$i?>" class="item <?=($i == 1) ? 'active' : ''?>"
                                 data-title="<?=$tab['title']?>">
                                <div class="item-content">
                                    <?=$tab['content']?>
                                </div>
                            </div>
                            <?php $i++;?>
                        <?php endforeach?>
                    </div>
                </article>
            </div>
        </section>
        <section class="about-page__surgery-results">
            <div class="about-page__width">
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
                            <div class="surgery-results__header">
                                <h2 class="surgery-results__h2"><?=$fields['third_block']['title']?></h2>
                                <div class="surgery-results__pointer pointer__wrap">
                                    <div class="surgery-results__square pointer__square-dark">
                                    </div>
                                </div>
                            </div>
                            <div class="surgery-results__list">
                                <?php foreach ($operations as $item) : ?>
                                    <?php $operation = get_fields($item->ID); ?>
                                    <div class="surgery-results__item">
                                        <a href="<?= get_permalink($item) ?>" class="surgery-results__link"
                                           style="background-image: url('<?= $operation['preview']['url'] ?>')">
                                            <span class="surgery-results__link-text"><?= $operation['title'] ?></span>
                                        </a>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="surgery-results__right">
                            <div class="surgery-results__wrap-slider">
                                <div id="surgeryResultsSliderAbout" class="surgery-results__slider">
                                    <?php foreach ($fields['third_block']['slider'] as $slide) : ?>
                                        <div class="surgery-results__slider-item">
                                            <a class="surgery-results__img"
                                               style="background-image: url('<?= $slide['url'] ?>')"></a>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="request-block">
                <div class="request-button__dark request-button">
                    <span class="request-button__text request-button__text-dark"><?=$base['button_text_register_for_appointment']?></span>
                </div>
            </div>
        </section>
        <section class="doctor-associations">
            <div class="doctor-associations__width">
                <div class="doctor-associations__header">
                    <h2 class="doctor-associations__h2"><?=$fields['fourth_block']['title']?></h2>
                    <div class="doctor-associations__pointer pointer__wrap">
                        <div class="doctor-associations__square pointer__square-dark">
                        </div>
                    </div>
                </div>
                <div class="doctor-associations__slider-wrap">
                    <div id="associationsSliderAbout" class="doctor-associations__slider slick-slider">
                        <?php foreach ($fields['fourth_block']['items'] as $item) :?>
                            <div class="doctor-associations__slider-item">
                                <a href="<?=$item['link']?>" target="_blank"
                                   class="doctor-associations__link">
                                    <img src="<?=$item['image']['url']?>">
                                    <span class="doctor-associations__link-text"><?=$item['sign']?></span>
                                </a>
                            </div>
                        <?php endforeach?>
                        <?php foreach ($fields['fourth_block']['items'] as $item) :?>
                            <div class="doctor-associations__slider-item">
                                <a href="<?=$item['link']?>" target="_blank"
                                   class="doctor-associations__link">
                                    <img src="<?=$item['image']['url']?>">
                                    <span class="doctor-associations__link-text"><?=$item['sign']?></span>
                                </a>
                            </div>
                        <?php endforeach?>
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
        </section>
        <section class="doctor-certificates">
            <div class="doctor-certificates__width">
                <div class="doctor-certificates__header">
                    <h2 class="doctor-certificates__h2"><?=$fields['fifth_block']['title']?></h2>
                    <div class="doctor-certificates__pointer pointer__wrap">
                        <div class="doctor-certificates__square pointer__square-dark">
                        </div>
                    </div>
                </div>
                <div class="doctor-certificates__slider-wrap">
                    <div id="certificatesSliderAbout" class="doctor-certificates__slider slick-slider">
                        <?php foreach ($fields['fifth_block']['items'] as $item) :?>
                            <div class="doctor-certificates__slider-item">
                                <a class="doctor-certificates__link"
                                   style="background-image: url('<?=$item['image']['url']?>')">
                                </a>
                            </div>
                        <?php endforeach?>
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
        </section>
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
                        <div class="synch-carousels" id="slider-1">
                            <div class="left gallery__wrap">
                                <div id="recommendsSliderPreviewsAbout" class="gallery">
                                </div>
                            </div>
                            <div class="right gallery__wrap">
                                <div id="recommendsSliderVideosAbout" class="gallery2">
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
    </div>
</main>
<script>
    var galleryCollection = <?=json_encode($fields['sixth_block']['slider'])?>;//эта переменная используется в подкючаемом в футере скрипте
</script>
<?php get_footer();?>