<?php

/**
 * Template Name: Recommendations
 */

get_header();
global $base;
$fields = get_fields();
$args_recommendations = [
    'post_type' => 'recommendations',
    'numberposts' => 0,
];
$recommendations = get_posts($args_recommendations);
?>
    <main>
        <div class="recommends-page__wrap">
            <section class="doctor-recommends">
                <div class="doctor-recommends__width">
                    <div class="doctor-recommends__header-wrap">
                        <div class="doctor-recommends__header">
                            <h2 class="doctor-recommends__h2"><?= $fields['title'] ?></h2>
                            <div class="doctor-recommends__pointer pointer__wrap">
                                <div class="doctor-recommends__square pointer__square-light">
                                </div>
                            </div>
                        </div>
                        <div class="doctor-recommends__nav">
                            <?php $i = 0 ?>
                            <?php foreach ($recommendations as $item) : ?>
                                <?php
                                $recommendation = get_fields($item->ID);
                                $slider_size = count($recommendation['slider']);
                                $recommendation_slider[] = $recommendation['slider'];
                                ?>
                                <a class="doctor-recommends__nav-link <?= ($i == 0) ? 'current' : '' ?>"
                                   data-tab="<?= $i ?>"><?= $recommendation['title'] ?>
                                    <div class="recommends__pointer icamps-photos__pointer pointer__wrap">
                                        <div class="icamps-photos__square pointer__square-light">
                                        </div>
                                    </div>
                                </a>
                                <?php $i++ ?>
                            <?php endforeach ?>
                        </div>
                    </div>

                    <div class="recommends-slider__wrap z-10">
                        <div class="synch-carousels">
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
                    <span class="request-button__text request-button__text-dark"><?= $base['button_text_register_for_appointment'] ?></span>
                </div>
            </div>
        </div>
    </main>
    <script>
        var galleryCollection = <?=json_encode($recommendation_slider)?>;//эта переменная используется в подключаемом в футере скрипте
    </script>
<?php get_footer() ?>