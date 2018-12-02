<?php

/**
 * Template Name: Reviews
 */

get_header();
$fields = get_fields();
?>
<main class="patient-stories__page-wrap">
    <section class="recommends-page__wrap  main-page__section-gap">
        <div class="doctor-recommends">
            <div class="doctor-recommends__width">
                <div class="doctor-recommends__header-wrap">
                    <div class="doctor-recommends__header">
                        <h2 class="doctor-recommends__h2"><?=$fields['first_block']['title']?></h2>
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
                            <h2 class="doctor-reviews__h2"><?=$fields['second_block']['title']?></h2>
                            <div class="doctor-reviews__pointer pointer__wrap">
                                <div class="doctor-reviews__square pointer__square-light">
                                </div>
                            </div>
                        </div>
                        <div class="doctor-reviews__slider-wrap">
                            <div id="doctorReviewsSlider" class="doctor-reviews__slider slick-slider">
                                <?php foreach ($fields['second_block']['slider'] as $slide) : ?>
                                    <div class="doctor-reviews__slider-item_<?=$slide['acf_fc_layout']?>">
                                        <a href="<?=$slide['slide'][0]['url']?>"
                                           class="<?=($slide['acf_fc_layout']=='horiz') ? 'horizontal-img' : 'vertical-img'?>"
                                           style="background-image: url(<?=$slide['slide'][0]['url']?>)"></a>
                                        <a href="<?=$slide['slide'][1]['url']?>"
                                           class="<?=($slide['acf_fc_layout']=='horiz') ? 'horizontal-img' : 'vertical-img'?>"
                                           style="background-image: url(<?=$slide['slide'][1]['url']?>)"></a>
                                    </div>
                                <?php endforeach ?>
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
                <h2 class="patient-smi__h2"><?=$fields['third_block']['title']?></h2>
                <div class="patient-smi__pointer pointer__wrap">
                    <div class="patient-smi__square pointer__square-dark">
                    </div>
                </div>
            </div>

            <div class="patient-smi__view-link-wrap">
                <a href="<?=$fields['third_block']['button_link']?>" class="patient-smi__view-link"><?=$fields['third_block']['button_text']?></a>
            </div>

            <div class="patient-smi__slider-wrap">
                <div id="expertSmmSliderReviewsPage" class="patient-smi__slider slick-slider">
                    <?php foreach ($fields['third_block']['slider'] as $slide) : ?>
                    <div class="patient-smi__slider-item">
                        <a href="<?=$slide['link']?>" target="_blank" class="patient-smi__link">
                            <img src="<?=$slide['image']['url']?>">
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($fields['third_block']['slider'] as $slide) : ?>
                        <div class="patient-smi__slider-item">
                            <a href="<?=$slide['link']?>" target="_blank" class="patient-smi__link">
                                <img src="<?=$slide['image']['url']?>">
                            </a>
                        </div>
                    <?php endforeach ?>
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
    <script>
        var galleryCollection = <?=json_encode($fields['first_block']['slider'])?>;
    </script>
<?php get_footer();?>