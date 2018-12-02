<?php global $base;?>

<footer class="footer__wrap">

    <div class="footer__width">
        <div class="footer__link-group1">
            <?php foreach (array_slice($base['menu_footer'], 0, ceil(count($base['menu_footer'])/2)) as $menu_item) :?>
                <a href="<?=$menu_item['link']?>" class="footer__link-group1_item"><?=$menu_item['text']?></a>
            <?php endforeach;?>
        </div>
        <div class="footer__link-group2">
            <?php foreach (array_slice($base['menu_footer'], ceil(count($base['menu_footer'])/2)) as $menu_item) :?>
                <a href="<?=$menu_item['link']?>" class="footer__link-group2_item-school"><?=$menu_item['text']?></a>
            <?php endforeach;?>
        </div>
        <div class="footer__contact">
            <a href="tel:+38 (044) 483 21 78" class="footer__contact_item"><?=$base['phone']?></a>
            <a href="/contacts" class="footer__contact_item"><?=$base['address']?></a>
            <a href="mailto:clinic@anacosmo.com.ua" class="footer__contact_item">Email: <?=$base['email']?></a>
        </div>
        <div class="footer__logo">
            <a href="/">
                <img src="<?=get_template_directory_uri();?>/images/footer-logo.png" alt="Pavlo Denyshchuk logo">
            </a>
        </div>
        <div class="footer__links-social">
            <a href="<?=$base['youtube']?>" target="_blank" class="footer__links-social_link">
                <div class="footer__links-social_link-youtube" style="background-image: url(<?=get_template_directory_uri();?>/images/footer-youtube.svg)"></div>
            </a>
            <a href="<?=$base['facebook']?>" target="_blank" class="footer__links-social_link">
                <div class="footer__links-social_link-facebook" style="background-image: url(<?=get_template_directory_uri();?>/images/footer-facebook.svg)"></div>
            </a>
            <a href="<?=$base['instagram']?>" target="_blank" class="footer__links-social_link">
                <div class="footer__links-social_link-instagram" style="background-image: url(<?=get_template_directory_uri();?>/images/footer-instagram.svg)"></div>
            </a>
            <a href="<?=$base['wiki']?>" target="_blank" class="footer__links-social_link">
                <div class="footer__links-social_link-wiki" style="background-image: url(<?=get_template_directory_uri();?>/images/footer-wikipedia.svg)"></div>
            </a>
            <a href="<?=$base['telegram']?>" target="_blank" class="footer__links-social_link">
                <div class="footer__links-social_link-telegram" style="background-image: url(<?=get_template_directory_uri();?>/images/footer-telegram.svg)"></div>
            </a>
        </div>
        <div class="footer__request-button">
            <a class="footer__request-link"><?=$base['button_text_register_for_appointment']?></a>
        </div>
        <div class="footer__links-societies">
            <a href="https://www.breastsurgeons.org" target="_blank">
                <div class="footer__links-societies_breast-logo" style="background-image: url(<?=get_template_directory_uri();?>/images/breast_logo.png)"></div>
            </a>
            <a href="https://anacosmo.ua" target="_blank">
                <div class="footer__links-societies_anacosmo-logo" style="background-image: url(<?=get_template_directory_uri();?>/images/anacosmo-logo.png)"></div>
            </a>
            <a href="https://www.isaps.org/" target="_blank">
                <div class="footer__links-societies_icamps-logo" style="background-image: url(<?=get_template_directory_uri();?>/images/icamps-logo.png)"></div>
            </a>
            <a href="https://usaps.com.ua/en/" target="_blank">
                <div class="footer__links-societies_ukrplastic-logo" style="background-image: url(<?=get_template_directory_uri();?>/images/ukr-plastic-logo.png)"></div>
            </a>
        </div>
        <div class="footer__copyright">
            <?=$base['copyright']?>
        </div>
    </div>
</footer>
<?php wp_footer() ?>

</body>

</html>