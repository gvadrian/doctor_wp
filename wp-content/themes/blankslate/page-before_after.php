<?php

/**
 * Template Name: Before/After
 */

get_header();
global $base;
$fields = get_fields();
$args_operations = [
    'post_type' => 'before_after',
    'numberposts' => 0,
];
$operations = get_posts($args_operations);
?>
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
                                <h2 class="surgery-results__h2"><?= $fields['title'] ?></h2>
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
                                <div id="beforeAfterSlider" class="surgery-results__slider">
                                    <?php foreach ($fields['slider'] as $slide) : ?>
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
                    <span class="request-button__text request-button__text-dark"><?= $base['button_text_register_for_appointment'] ?></span>
                </div>
            </div>
        </section>
    </main>
<?php get_footer() ?>