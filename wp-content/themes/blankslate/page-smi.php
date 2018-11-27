<?php

/**
 * Template Name: smi
 */

get_header();
global $base;
$fields = get_fields();
$args_news = [
    'post_type' => 'smi',
    'numberposts' => 0,
];
$news = get_posts($args_news);
?>
<main class="news__main">
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

    <section class="news__wrap">
        <div class="news__head">
            <h2 class="news__head-text"><?=$fields['title']?></h2>
            <div class="news__head-text_flo pointer__wrap">
                <div class="pointer__square-dark">
                </div>
            </div>
        </div>
        <div class="news__list">
            <?php foreach ($news as $item) : ?>
            <?php $news_fields = get_fields($item->ID); ?>
            <div class="news__item">
                <div class="news__img-block">
                    <img class="news__img" src="<?=$news_fields['list_image']['url']?>" alt="" />
                    <div class="news__img-mask"></div>
                </div>
                <div class="news__item-inner">
                    <div class="news__text">
                        <h2 class="news__text-headline about-surgeon__h2"><?=$news_fields['title']?></h2>
                        <?=$news_fields['content']?>
                    </div>
                    <div class="news_btn more">
                        <div class="news_btn_about more__btn">
                            <a class="news_btn_about-link more__link" href="<?=get_permalink($item)?>"><?=$base['button_detail_text_2']?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="request-block">
            <div class="request-button__dark request-button">
                <span class="request-button__text request-button__text-dark"><?=$base['button_text_register_for_appointment']?></span>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>