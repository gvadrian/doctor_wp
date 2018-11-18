<?php global $base, $current_lang_url; ?>

<?php
$langs = array('ru', 'en', 'uk');
if (strpos($_SERVER['REQUEST_URI'],'/en/') !== false) $current_lang = 'en'; else
    if (strpos($_SERVER['REQUEST_URI'],'/uk/') !== false) $current_lang = 'uk';
if ($current_lang) {
    $index = array_search($current_lang, $langs);
    if ($index !== false) {
        unset($langs[$index]);
        array_unshift($langs, $current_lang);
    }
} else {
    $current_lang = 'ru';
}
$logo_lang = (!empty($current_lang) && in_array($current_lang,$langs)) ? $current_lang : 'ru';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title><?php wp_title(); ?></title> -->
    <meta name="google-site-verification" content="rGQPKa_a0zRYy7NMuoD2-r2jZyjorEGeKpQOwLDkO0Y" />
    <meta name="yandex-verification" content="9e50d0c673d5a253" />
    <meta name='wmail-verification' content='d962433a8e4e3febf851f505b10924eb' />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">
    <?php wp_head(); ?>
    <?php if ("en" == $current_lang): ?>
        <style>.header .header__menu li:hover>a, .header .header__menu li>a:hover, .header__menu__link{font-family: Arial;}</style>
    <?php endif; ?>

    <script type="application/ld+json"><?= ldJsBreadcrumbs();?></script>

    <script type="text/javascript">
        function preventSelection(element){
            var preventSelection = false;
            function addHandler(element, event, handler){
                if (element.attachEvent)
                    element.attachEvent('on' + event, handler);
                else
                if (element.addEventListener)
                    element.addEventListener(event, handler, false);
            }
            function removeSelection(){
                if (window.getSelection) { window.getSelection().removeAllRanges(); }
                else if (document.selection && document.selection.clear)
                    document.selection.clear();
            }
            function killCtrlA(event){
                var event = event || window.event;
                var sender = event.target || event.srcElement;
                if (sender.tagName.match(/INPUT|TEXTAREA/i))
                    return;
                var key = event.keyCode || event.which;
                if (event.ctrlKey && key == 'A'.charCodeAt(0))
                {
                    removeSelection();
                    if (event.preventDefault)
                        event.preventDefault();
                    else
                        event.returnValue = false;
                }
            }
            addHandler(element, 'mousemove', function(){
                if(preventSelection)
                    removeSelection();
            });
            addHandler(element, 'mousedown', function(event){
                var event = event || window.event;
                var sender = event.target || event.srcElement;
                preventSelection = !sender.tagName.match(/INPUT|TEXTAREA/i);
            });
            addHandler(element, 'mouseup', function(){
                if (preventSelection)
                    removeSelection();
                preventSelection = false;
            });
            addHandler(element, 'keydown', killCtrlA);
            addHandler(element, 'keyup', killCtrlA);
        }
        function clickIE4(){
            if (event.button==2){
                return false;
            }
        }
        function clickNS4(e){
            if (document.layers||document.getElementById&&!document.all){
                if (e.which==2||e.which==3){
                    return false;
                }
            }
        }
        if (document.layers){
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown=clickNS4;
        }
        else if (document.all&&!document.getElementById){
            document.onmousedown=clickIE4;
        }
        // document.oncontextmenu=new Function("return false")
        preventSelection(document);
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114137739-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-114137739-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K797KZD');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K797KZD"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page page-<?php echo $page_class; ?>">
    <header class="header">
        <div class="header__above-header">
            <div class="header__logo">
                <a href="<?php echo $current_lang_url; ?>" class="header__logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-<?php echo $logo_lang; ?>.png" alt="logo">
                </a>
            </div>
            <div class="header__number">
                <?php foreach ($base['header_phones'] as $phone) : ?>
                    <a href="tel:+<?php echo preg_replace("/\D/", "", $base['phone']); ?>"
                       class="header__number__item"><?php echo $phone['phone']; ?></a>
                    <?php break; endforeach; ?>
                <span class="header__schedule__item"><?php echo $base['schedule']; ?></span>
            </div>
            <div class="header__above-info">

                <div class="social social_header">
                    <a href="<?php echo $base['facebook']; ?>" class="social__link social__link_fb" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                             y="0px"
                             viewBox="0 0 21 21" style="enable-background:new 0 0 21 21;" xml:space="preserve">
                            <path d="M19.8,0H1.2C0.5,0,0,0.5,0,1.2v18.7C0,20.5,0.5,21,1.2,21l9.8,0v-8H8v-3h3V7c0-2.7,1.6-4,4-4c1.2,0,2.7,0.1,3,0.2V6h-2
                             c-1.3,0-2,1.1-2,2v2h4l-0.6,3H14v8l5.8,0c0.6,0,1.2-0.5,1.2-1.2V1.2C21,0.5,20.5,0,19.8,0z"/>
                        </svg>
                    </a>
                    <a href="<?php echo $base['youtube']; ?>" class="social__link social__link_youtube" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                             y="0px"
                             viewBox="0 0 28 20" style="enable-background:new 0 0 28 20;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M27.7,4.3c0,0-0.3-2-1.1-2.8c-1.1-1.1-2.3-1.1-2.8-1.2C19.9,0,14,0,14,0h0c0,0-5.9,0-9.8,0.3C3.7,0.4,2.5,0.4,1.4,1.5
                                        C0.6,2.4,0.3,4.3,0.3,4.3S0,6.6,0,8.9v2.2c0,2.3,0.3,4.6,0.3,4.6s0.3,2,1.1,2.8c1.1,1.1,2.5,1.1,3.1,1.2C6.7,19.9,14,20,14,20
                                        s5.9,0,9.8-0.3c0.5-0.1,1.7-0.1,2.8-1.2c0.8-0.9,1.1-2.8,1.1-2.8s0.3-2.3,0.3-4.6V8.9C28,6.6,27.7,4.3,27.7,4.3z M11.1,13.9v-8
                                        l7.4,3.9L11.1,13.9z"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <button class="btnConsultation btn btn_header"><?php echo $base['form_button_text_1']; ?></button>
                <div class="header__language">
                    <div class="header__language_hamburger-menu">
                        <?php foreach ($langs as $lang) : ?>
                            <div class="header__language_item <?php echo ($lang == $_GET['lang']) ? 'header__language_item-active' : ''; ?>">
                                <a href="<?php echo ($lang != $_GET['lang']) ? lang_link($lang) : 'javascript:void(0);'; ?>"
                                   class="header__language_link"><?php echo $lang; ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="header__button-menu"><span></span></button>
            </div>
        </div>

        <div class="header__main-nav">
            <nav class="header__nav">
                <ul class="header__menu">
                    <?php foreach ($base['menu'] as $menu_item) : ?>
                        <?php if ($menu_item['acf_fc_layout'] == 'standard') : ?>
                            <li class="header__menu__item"><a href="<?= empty($menu_item['link']) ? "#" : $menu_item['link']; ?>"
                                                              class="header__menu__link"><?php echo $menu_item['text']; ?></a>
                            </li>
                        <?php else: ?>
                            <li class="header__menu__item">
                                <a href="<?= empty($menu_item['link']) ? "#" : $menu_item['link']; ?>"
                                   class="header__menu__link"><?php echo $menu_item['text']; ?></a>
                                <span class="header__dots-wrap">
							        <span class="header__menu__link_dots"></span>
						        </span>
                                <ul class="header__menu-inner">
                                    <?php foreach ($menu_item['items'] as $submenu_item) : ?>
                                        <li><a href="<?php echo $submenu_item['link']; ?>"
                                               class="header__menu__link header__menu-inner__link"><?php echo $submenu_item['text']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <!--<button class="btnConsultation btn btn_nav"><?php /*echo $base['form_button_text_1']; */ ?></button>-->
            </nav>
        </div>

    </header>