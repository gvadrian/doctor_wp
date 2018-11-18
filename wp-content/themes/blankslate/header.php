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
<html lang="ua">

<head>
    <meta charset="utf-8">
    <?php wp_title(); ?>
    <base href="/">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/css/slick.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css">
    <meta name="theme-color" content="#000">
</head>

<body class="scroll-blocker">

<!-- Preloader  -->

<div class="preloader-bg">
    <div id="spinner" class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<!-- --------------------------- -->
<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <a class="header__logo-link" href="<?= $current_lang_url; ?>">
                <img class="header__img" src="<?= get_template_directory_uri(); ?>/images/DoctorDenLogo.png" alt="Doctor Den" />
            </a>
        </div>

        <div class="header__contacts">
            <div class="header__socials">
                <a href="https://www.youtube.com/channel/UCsnaPSTBVu5UNOn-Lu5Dojw" target="_blank" class="header__social-link">
                    <div class="header__social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="11" viewBox="0 0 16 11">
                            <defs>
                                <path id="x9soa" d="M603 28.5v-6l5 3zm9.32-7.44c-.43-.77-.9-.91-1.86-.97-.96-.06-3.37-.09-5.46-.09s-4.5.03-5.46.1c-.95.05-1.42.19-1.86.96-.45.77-.68 2.1-.68 4.44 0 2.33.23 3.67.68 4.43.44.78.9.92 1.86.98.96.06 3.37.09 5.46.09s4.5-.03 5.46-.09 1.43-.2 1.86-.97c.45-.77.68-2.1.68-4.43v-.01c0-2.34-.23-3.67-.68-4.44z"
                                />
                            </defs>
                            <g>
                                <g opacity=".59" transform="translate(-597 -20)">
                                    <use fill="#fff" xlink:href="#x9soa" />
                                </g>
                            </g>
                        </svg>

                    </div>
                </a>
                <a href="https://www.facebook.com/pavel.denishuk" target="_blank" class="header__social-link">
                    <div class="header__social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16">
                            <defs>
                                <path id="j9tta" d="M645.85 18h-2.06c-2.3 0-3.8 1.53-3.8 3.9v1.8h-2.07a.32.32 0 0 0-.32.32v2.61c0 .18.14.32.32.32H640v6.58c0 .18.15.33.32.33h2.7c.18 0 .32-.15.32-.33v-6.58h2.42c.18 0 .32-.14.32-.32v-2.6a.32.32 0 0 0-.32-.33h-2.42v-1.52c0-.74.18-1.1 1.13-1.1l1.39-.01c.18 0 .32-.14.32-.32v-2.42a.32.32 0 0 0-.32-.33z"
                                />
                            </defs>
                            <g>
                                <g opacity=".59" transform="translate(-637 -18)">
                                    <use fill="#fff" xlink:href="#j9tta" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
                <a href="https://www.instagram.com/anacosmo_clinic/" target="_blank" class="header__social-link">
                    <div class="header__social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="16" viewBox="0 0 17 16">
                            <defs>
                                <path id="4364a" d="M686.32 29a3.5 3.5 0 0 1-3.5 3.5h-6a3.5 3.5 0 0 1-3.5-3.5v-6a3.5 3.5 0 0 1 3.5-3.5h6a3.5 3.5 0 0 1 3.5 3.5zm-3.5-11h-6a5 5 0 0 0-5 5v6a5 5 0 0 0 5 5h6a5 5 0 0 0 5-5v-6a5 5 0 0 0-5-5z"
                                />
                                <path id="4364b" d="M679.82 28.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0-6.5a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                            </defs>
                            <g>
                                <g opacity=".59" transform="translate(-671 -18)">
                                    <use fill="#fff" xlink:href="#4364a" />
                                </g>
                                <g opacity=".59" transform="translate(-671 -18)">
                                    <use fill="#fff" xlink:href="#4364b" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
                <a href="https://uk.wikipedia.org/wiki/Денищук_Павло_Андрійович" target="_blank" class="header__social-link">
                    <div class="header__social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="12" viewBox="0 0 17 12">
                            <defs>
                                <path id="938la" d="M727.98 20.04h-3.35a.4.4 0 0 0-.4.4v.51c0 .23.18.4.4.4h.85l-2.57 6.74-1.38-3.12 1.82-3.61h.38a.4.4 0 0 0 .41-.4v-.51a.4.4 0 0 0-.4-.41h-2.5a.4.4 0 0 0-.4.4v.51c0 .23.18.4.4.4h.35c-.01.06-.83 1.88-.83 1.88l-.84-1.87h.1a.4.4 0 0 0 .4-.4v-.51a.4.4 0 0 0-.4-.41h-2.65a.4.4 0 0 0-.4.4v.51c0 .23.18.4.4.4h.36l1.94 4.26-1.13 2.49a229.72 229.72 0 0 1-2.8-6.74h.74a.4.4 0 0 0 .4-.4v-.51a.4.4 0 0 0-.4-.41h-3.66a.4.4 0 0 0-.41.4v.51c0 .23.18.4.4.4h.64c.04.05 1.46 3.5 2.15 5.12a146.28 146.28 0 0 1 1.72 4.16c.08.18.3.74.8.74.43 0 .7-.42.86-.73v-.01c.35-.7.97-2.08 1.46-3.18.63 1.54 1.08 2.6 1.33 3.16.08.18.33.74.82.74.48 0 .74-.54.82-.71v-.02c.87-2.12 3.41-8.5 3.44-8.57v-.01c.1-.26.21-.44.36-.58l.17-.1h.6a.4.4 0 0 0 .4-.4v-.51a.4.4 0 0 0-.4-.41z"
                                />
                            </defs>
                            <g>
                                <g opacity=".59" transform="translate(-712 -20)">
                                    <use fill="#fff" xlink:href="#938la" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
                <a href="https://t.me/ drden_plastic" target="_blank" class="header__social-link">
                    <div class="header__social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="14" viewBox="0 0 16 14">
                            <defs>
                                <path id="zhrpa" d="M758.17 26.34l7.2-4.43c.13-.08.26.1.15.2l-5.94 5.51c-.21.2-.35.46-.39.74l-.2 1.5c-.02.2-.3.22-.36.03l-.78-2.74a.72.72 0 0 1 .32-.81zm-4.89-.64l3.69 1.38 1.43 4.58c.09.3.45.4.69.21l2.05-1.67a.61.61 0 0 1 .75-.02l3.7 2.69c.26.18.62.04.69-.27l2.71-13.06a.43.43 0 0 0-.58-.49l-15.13 5.84a.43.43 0 0 0 0 .81z"
                                />
                            </defs>
                            <g>
                                <g opacity=".59" transform="translate(-753 -19)">
                                    <use fill="#fff" xlink:href="#zhrpa" />
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="header__lang">
                <a href="" data-lang="ua" class="header__lang-link">укр</a>
                <span>/</span>
                <a href="" data-lang="ru" class="header__lang-link">рус</a>
                <span>/</span>
                <a href="" data-lang="en" class="header__lang-link">eng</a>
            </div>
            <div class="header__phone">
                <a class="header__phone-link" href="tel:+38 (044) 483 21 78">
                    +38 (044) 483 21 78
                </a>
            </div>
            <div id="header-request-btn" class="header__request-wrap">
                <a class="header__request-button request-button">
                    записаться на прием
                </a>
            </div>
        </div>
        <div class="header__menu-icon menu-icon open">
        </div>
        <nav class="header__nav">
            <ul class="header__nav-list">
                <?php foreach ($base['menu'] as $menu_item) : ?>
                    <?php if ($menu_item['acf_fc_layout'] == 'standard') : ?>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="<?= empty($menu_item['link']) ? "#" : $menu_item['link']; ?>">
                                <?php echo $menu_item['text']; ?>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="sub-menu header__nav-item">
                            <a class="header__nav-link sub-header">школа денищука</a>
                            <div class="sub-links menu__sub-links">
                                <?php foreach ($menu_item['items'] as $submenu_item) : ?>
                                    <a class="nav-link header__nav-link" href="<?php echo $submenu_item['link']; ?>">
                                        <?php echo $submenu_item['text']; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>


<!-- Request consultation Popup -->
<div class="request-consultation__popup">
    <div class="popup__wrap">
        <div class="popup__header-wrap">
            <h3 class="popup__header">Заполните поля</h3>
            <a class="popup__close-icon">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="18px" height="16px" viewBox="0 0 18 16" enable-background="new 0 0 18 16" xml:space="preserve">
                        <g id="Desktop">
                            <g id="Main_x5F_HD-_x28_menu_x29_" transform="translate(-1162.000000, -323.000000)">
                                <g id="Group-2" transform="translate(705.000000, 280.000000)">
                                    <g id="Group">
                                        <g id="cross" transform="translate(457.000000, 43.000000)">
                                            <polygon id="Shape" fill="#252525" points="18,0.91 16.956,0.015 9,6.838 1.043,0.015 0,0.91 7.957,7.732 0,14.554
                                               1.043,15.449 9,8.627 16.956,15.449 18,14.554 10.043,7.732 					" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
            </a>
        </div>
        <div class="popup__form-wrap">
            <form class="requst-consultation__form">
                <div class="popup__input-wrap">
                    <input class="popup__input-field" type="text" id="family-name" placeholder="ФИО">
                </div>
                <div class="popup__input-wrap">
                    <input class="popup__input-field" type="email" id="family-name" placeholder="E-mail">
                </div>
                <div class="popup__input-wrap">
                    <input class="popup__input-field" type="tel" id="family-name" placeholder="Телефон">
                </div>
                <div class="popup__input-wrap">
                    <input class="popup__input-field" type="text" id="family-name" placeholder="Комментарий">
                </div>
            </form>
        </div>
        <div class="popup__more more">
            <div class="popup__more-btn more__btn more__btn">
                <a class="popup__more-link more__link" href="./about-page.html">отправить</a>
            </div>
        </div>
    </div>
</div>
<!-- Request consultation Popup end -->


<div class="mobile-menu">
    <div class="mobile-menu__wrap">
        <div class="mobile-menu__lang">
            <a href="" data-lang="ua" class="mobile-menu__lang-link">укр</a>
            <span>/</span>
            <a href="#" data-lang="ru" class="mobile-menu__lang-link active">рус</a>
            <span>/</span>
            <a href="#" data-lang="en" class="mobile-menu__lang-link">eng</a>
        </div>
        <nav class="mobile-menu__nav">
            <ul class="mobile-menu__nav-list">
                <li class="mobile-menu__nav-item">
                    <a class="mobile-menu__nav-link" href="./about-page.html">о хирурге</a>
                </li>
                <li class="mobile-menu__nav-item">
                    <a class="mobile-menu__nav-link" href="./before-after-page.html">до/после</a>
                </li>
                <li class="mobile-menu__nav-item">
                    <a class="mobile-menu__nav-link" href="./recommends-page.html">рекомендации</a>
                </li>
                <li class="mobile-menu__nav-item">
                    <a class="mobile-menu__nav-link" href="./patient-stories.html">отзывы</a>
                </li>
                <li class="mobile-menu__sub-menu">
                    <a class="sub-header mobile-menu__nav-link">школа денищука</a>
                    <div class="mobile-menu__sub-link">
                        <a class="nav-link mobile-menu__nav-link" href="./school.html">школа пластической хирургии</a>
                        <a class="nav-link mobile-menu__nav-link" href="./icamps.html">ICAMPS</a>
                    </div>
                </li>
                <li class="mobile-menu__nav-item">
                    <a class="mobile-menu__nav-link" href="./news.html">эксперт в сми</a>
                </li>
                <li class="mobile-menu__nav-item">
                    <a class="mobile-menu__nav-link" href="./contacts.html">контакты</a>
                </li>
            </ul>
        </nav>
        <div class="mobile-menu__phone">
            <a class="mobile-menu__phone-link" href="tel:+38 (044) 483 21 78">
                +38 (044) 483 21 78
            </a>
        </div>
        <div class="mobile-menu__socials">
            <a href="https://www.youtube.com/channel/UCsnaPSTBVu5UNOn-Lu5Dojw" target="_blank" class="mobile-menu__social-link">
                <div class="mobile-menu__social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="9" viewBox="0 0 12 9">
                        <defs>
                            <path id="vjyba" d="M84.5 454.94v-4.46l3.75 2.23zm6.99-5.52c-.33-.58-.68-.68-1.4-.72-.72-.05-2.52-.07-4.09-.07-1.57 0-3.37.02-4.1.07-.71.04-1.06.14-1.4.72-.33.57-.5 1.55-.5 3.28 0 1.73.17 2.72.5 3.29.34.57.69.67 1.4.72.73.04 2.53.07 4.1.07 1.57 0 3.37-.03 4.1-.07.71-.05 1.07-.15 1.4-.72.33-.57.5-1.56.5-3.28 0-1.74-.17-2.72-.51-3.3z"
                            />
                        </defs>
                        <g>
                            <g opacity=".59" transform="translate(-80 -448)">
                                <use fill="#243249" xlink:href="#vjyba" />
                            </g>
                        </g>
                    </svg>
                </div>
            </a>
            <a href="https://www.facebook.com/pavel.denishuk" target="_blank" class="mobile-menu__social-link">
                <div class="mobile-menu__social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7" height="13" viewBox="0 0 7 13">
                        <defs>
                            <path id="wd5va" d="M124.67 446.65h-1.58c-1.79 0-2.94 1.17-2.94 2.97V451h-1.6a.25.25 0 0 0-.24.25v1.98c0 .14.11.25.25.25h1.6v5.01c0 .14.1.25.24.25h2.08c.14 0 .25-.11.25-.25v-5h1.87c.13 0 .25-.12.25-.26v-1.98a.25.25 0 0 0-.08-.18.25.25 0 0 0-.17-.07h-1.87v-1.16c0-.56.14-.84.87-.84h1.07c.14 0 .25-.11.25-.25v-1.84a.25.25 0 0 0-.25-.25z"
                            />
                        </defs>
                        <g>
                            <g opacity=".59" transform="translate(-118 -446)">
                                <use fill="#243249" xlink:href="#wd5va" />
                            </g>
                        </g>
                    </svg>
                </div>
            </a>
            <a href="https://www.instagram.com/anacosmo_clinic/" target="_blank" class="mobile-menu__social-link">
                <div class="mobile-menu__social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13" height="13" viewBox="0 0 13 13">
                        <defs>
                            <path id="5dc0a" d="M162.25 454.8c0 1.43-1.18 2.59-2.63 2.59h-4.5a2.61 2.61 0 0 1-2.63-2.6v-4.44c0-1.43 1.18-2.59 2.63-2.59h4.5a2.61 2.61 0 0 1 2.63 2.6zm-2.63-8.15h-4.5a3.73 3.73 0 0 0-3.75 3.7v4.45c0 2.04 1.68 3.7 3.75 3.7h4.5a3.73 3.73 0 0 0 3.75-3.7v-4.45c0-2.04-1.68-3.7-3.75-3.7z"
                            />
                            <path id="5dc0b" d="M157.37 454.46a1.87 1.87 0 0 1-1.88-1.85c0-1.02.85-1.85 1.88-1.85 1.03 0 1.88.83 1.88 1.85s-.85 1.85-1.88 1.85zm0-4.81c-1.66 0-3 1.33-3 2.96a2.98 2.98 0 0 0 3 2.97c1.66 0 3-1.33 3-2.97a2.98 2.98 0 0 0-3-2.96z"
                            />
                        </defs>
                        <g>
                            <g opacity=".59" transform="translate(-151 -446)">
                                <use fill="#243249" xlink:href="#5dc0a" />
                            </g>
                            <g opacity=".59" transform="translate(-151 -446)">
                                <use fill="#243249" xlink:href="#5dc0b" />
                            </g>
                        </g>
                    </svg>
                </div>
            </a>
            <a href="https://uk.wikipedia.org/wiki/Денищук_Павло_Андрійович" target="_blank" class="mobile-menu__social-link">
                <div class="mobile-menu__social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13" height="9" viewBox="0 0 13 9">
                        <defs>
                            <path id="v1jea" d="M201.37 448.63h-2.52a.3.3 0 0 0-.3.3v.38c0 .16.14.3.3.3h.64l-1.92 4.98-1.04-2.3 1.37-2.68h.28a.3.3 0 0 0 .3-.3v-.38a.3.3 0 0 0-.3-.3h-1.86a.3.3 0 0 0-.3.3v.38c0 .16.13.3.3.3h.26l-.63 1.39s-.59-1.3-.62-1.4h.06a.3.3 0 0 0 .3-.3v-.37a.3.3 0 0 0-.3-.3h-1.98a.3.3 0 0 0-.3.3v.38c0 .16.13.3.3.3h.27c.05.07 1.36 2.9 1.46 3.14l-.86 1.85a169.03 169.03 0 0 1-2.09-5h.55a.3.3 0 0 0 .3-.3v-.37a.3.3 0 0 0-.3-.3H190a.3.3 0 0 0-.3.3v.38c0 .16.14.3.3.3h.48c.03.03 1.1 2.59 1.61 3.79.48 1.1.97 2.25 1.3 3.07.05.14.22.55.6.55.32 0 .52-.3.64-.54.26-.52.72-1.55 1.09-2.36.48 1.14.81 1.93 1 2.34.06.13.24.55.61.55.36 0 .56-.4.62-.53v-.01c.66-1.57 2.56-6.3 2.58-6.35v-.01a1 1 0 0 1 .27-.43.46.46 0 0 1 .13-.07h.45a.3.3 0 0 0 .3-.3v-.38a.3.3 0 0 0-.3-.3z"
                            />
                        </defs>
                        <g>
                            <g opacity=".59" transform="translate(-189 -448)">
                                <use fill="#243249" xlink:href="#v1jea" />
                            </g>
                        </g>
                    </svg>
                </div>
            </a>
            <a href="https://t.me/ drden_plastic" target="_blank" class="mobile-menu__social-link">
                <div class="mobile-menu__social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="11" viewBox="0 0 12 11">
                        <defs>
                            <path id="ndnga" d="M231.87 453.07l5.4-3.3c.1-.05.2.08.11.15l-4.45 4.1a.91.91 0 0 0-.29.55l-.15 1.12c-.02.15-.23.16-.27.02l-.58-2.03a.54.54 0 0 1 .23-.61zm-3.66-.48l2.77 1.02 1.07 3.4c.07.21.34.3.51.15l1.55-1.24c.16-.13.39-.14.56-.02l2.78 2c.19.13.46.03.5-.2l2.04-9.67a.32.32 0 0 0-.43-.37L228.2 452c-.28.1-.28.5 0 .6z"
                            />
                        </defs>
                        <g>
                            <g opacity=".59" transform="translate(-228 -447)">
                                <use fill="#243249" xlink:href="#ndnga" />
                            </g>
                        </g>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>