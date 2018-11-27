<?php
global $current_lang_url;
if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) {
    $current_lang_url = '/en/';
} elseif (strpos($_SERVER['REQUEST_URI'], '/uk/') !== false) {
    $current_lang_url = '/uk/';
} else {
    $current_lang_url = '/';
}
add_action('wp_enqueue_scripts', 'load_scripts');
function load_scripts()
{
    //scripts
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), false, true);
    wp_enqueue_script('slick-script', get_template_directory_uri() . '/libs/js/slick.min.js', array(), false, true);
    wp_enqueue_script('slick-lightbox-script', 'https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js', array(), false, true);
    wp_enqueue_script('youtube-popup-script', get_template_directory_uri() . '/libs/js/YouTubePopUp.jquery.js', array(), false, true);
    wp_enqueue_script('popup-overlay-script', get_template_directory_uri() . '/libs/js/jquery.popupoverlay.js', array(), false, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.min.js', array(), false, true);

    //styles
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/libs/css/slick.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');

    //specific scripts and styles for pages
    if (is_front_page())
        wp_enqueue_script('main-page', get_template_directory_uri() . '/js/main-page.min.js', array(), false, true);
    if (strpos($_SERVER['REQUEST_URI'], '/about/') !== false)
        wp_enqueue_script('about-page', get_template_directory_uri() . '/js/about-page.min.js', array(), false, true);
    if (strpos($_SERVER['REQUEST_URI'], '/before-after/') !== false)
        wp_enqueue_script('before-after-page', get_template_directory_uri() . '/js/before-after-page.min.js', array(), false, true);
    if (strpos($_SERVER['REQUEST_URI'], '/recommendations/') !== false) {
        wp_enqueue_script('recommendations-page', get_template_directory_uri() . '/js/recommends-page.min.js', array(), false, true);
        wp_enqueue_style('recommendations-slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    }
    if (strpos($_SERVER['REQUEST_URI'], '/reviews/') !== false)
        wp_enqueue_script('reviews-page', get_template_directory_uri() . '/js/patient-stories.min.js', array(), false, true);
    if (strpos($_SERVER['REQUEST_URI'], '/school/') !== false)
        wp_enqueue_script('school-page', get_template_directory_uri() . '/js/school-page.min.js', array(), false, true);
    if (strpos($_SERVER['REQUEST_URI'], '/icamps/') !== false)
        wp_enqueue_script('icamps-page', get_template_directory_uri() . '/js/icamps-page.min.js', array(), false, true);
    if (strpos($_SERVER['REQUEST_URI'], '/smi/') !== false)
        wp_enqueue_script('smi-page', get_template_directory_uri() . '/js/news-about.min.js', array(), false, true);
    if (strpos($_SERVER['REQUEST_URI'], '/school/') !== false)
        wp_enqueue_script('school-page', get_template_directory_uri() . '/js/school-page.min.js', array(), false, true);






//    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/css/main.css');
//    wp_enqueue_style('main-style3', get_template_directory_uri() . '/style/css/sass3/main2.css');
//    wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/style/plugins/owl.carousel.min.css');
//    wp_enqueue_style('owl-theme-carousel-style', get_template_directory_uri() . '/style/plugins/owl.theme.default.min.css');
//    wp_enqueue_style('additional-style', get_template_directory_uri() . '/css/custom.css');
//
//    wp_localize_script('custom-script', 'front_ajax',
//        array(
//            'url' => admin_url('admin-ajax.php'),
//            'nonce' => wp_create_nonce('front_ajax-nonce')
//        )
//    );
}
/*
add_action('wp_ajax_news_tag_switch', 'news_tag_switch');
add_action('wp_ajax_nopriv_news_tag_switch', 'news_tag_switch');

function get_reviews($post_id)
{
    $args = array(
        'post_type' => 'reviews',
        'meta_query' => array(
            array(
                'key' => 'relation',
                'value' => $post_id,
                'compare' => 'IN'
            )
        )
    );
    $reviews = get_posts($args);
    foreach ($reviews as $review) :
        $fields = get_fields($review);
       ?>
        <div class="testimonials__item">
            <div class="testimonials__photo">
                <img src="<?php echo $fields['reviewer_photo']['url'];?>"
                     alt="<?php echo $fields['reviewer_photo']['alt'];?>">
            </div>
            <div class="testimonials__description">
                <h3 class="testimonials__name"><?php echo $fields['reviewer_name'];?></h3>
                <h4 class="testimonials__text"><?php echo $fields['review_text'];?></h4>
            </div>
        </div>
    <?
    endforeach;
}

function news_tag_switch()
{
    $args_news = [
        'post_type' => 'news',
        'numberposts' => 0,
        'tax_query' => array(
            array(
                'taxonomy' => 'news_tags',
                'field' => 'slug',
                'terms' => $_GET['user_data'],
            )
        )
    ];
    $news = get_posts($args_news);
    ob_start();
   ?>
    <div class="news-page__container">
        <?php
        global $base;
        $i = $p = 0;
        $page_capacity = $base['pagination_amount'];
        $page_amount = ceil(count($news) / $page_capacity);
       ?>
        <?php foreach ($news as $issue_object) :
            $issue = get_fields($issue_object->ID);
            $news_ids[] = $issue_object->ID;
            $p = (($i % $page_capacity) === 0) ? $p + 1 : $p;
            $i++;
           ?>
            <div class="news-page__element" data-page="<?php echo $p;?>">
                <div class="news-page__image">
                    <a href="<?php echo get_permalink($issue_object);?>">
                        <img src="<?php echo $issue['image']['url'];?>" alt="<?php echo $issue['image']['alt'];?>">
                    </a>
                </div>
                <div class="news-page__description">
                    <a href="<?php echo get_permalink($issue_object);?>">
                        <h3 class="news-page__title"><?php echo $issue['title'];?></h3>
                    </a>

                    <p class="news-page__text">
                        <?php echo $issue['short_desc'];?>
                    </p>
                    <div class="btn-wrap">
                        <a href="<?php echo get_permalink($issue_object);?>" class="btn btn_small">Подробнее</a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <?php if ($page_amount > 1) {?>
    <div class="pagination">
        <ul class="pagination__list text-center" id="pagination">
            <li class="pagination__item">
                <a class="pagination__link pagin_left">
                    <div class="pagination__arrow pagination__arrow_left">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="25" height="25" viewBox="0 0 12 19">
                            <defs>
                                <path id="pu1ka" d="M494.78 2497.78l-8-8 8-8"/>
                                <clipPath id="pu1kb">
                                    <use fill="#fff" xlink:href="#pu1ka"/>
                                </clipPath>
                            </defs>
                            <g>
                                <g transform="translate(-485 -2480)">
                                    <use fill="#fff" fill-opacity="0" stroke="#61bec2"
                                         stroke-miterlimit="50"
                                         stroke-width="2" clip-path="url(&quot;#pu1kb&quot;)"
                                         xlink:href="#pu1ka"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
            </li>
            <li class="pagination__item">
                <a data-pagelink="1"
                   class="pagination__link pagination__link_active">1</a>
            </li>
            <?php for ($i = 2; $i <= $page_amount; $i++) :?>
                <li class="pagination__item">
                    <a data-pagelink="<?php echo $i;?>"
                       class="pagination__link"><?php echo $i;?></a>
                </li>
            <?php endfor;?>
            <li class="pagination__item">
                <a class="pagination__link pagin_right">
                    <div class="pagination__arrow pagination__arrow_right">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             width="25" height="25" viewBox="0 0 13 19">
                            <defs>
                                <path id="i2x0a" d="M863.73 2498l7.99-7.5-8-7.5"/>
                                <clipPath id="i2x0b">
                                    <use fill="#fff" xlink:href="#i2x0a"/>
                                </clipPath>
                            </defs>
                            <g>
                                <g transform="translate(-862 -2481)">
                                    <use fill="#fff" fill-opacity="0" stroke="#61bec2"
                                         stroke-miterlimit="50"
                                         stroke-width="2" clip-path="url(&quot;#i2x0b&quot;)"
                                         xlink:href="#i2x0a"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>
            </li>
        </ul>
    </div>
<?php }
    $new_news = ob_get_contents();
    ob_end_clean();
    $tag = $_GET['user_data'];
    echo json_encode(['tag' => $tag, 'new_news' => $new_news]);
    die();
}

add_action('wp_ajax_appointment', 'appointment');
add_action('wp_ajax_nopriv_appointment', 'appointment');
add_action('wp_ajax_consultation', 'consultation');
add_action('wp_ajax_nopriv_consultation', 'consultation');
add_action('wp_ajax_write_us', 'write_us');
add_action('wp_ajax_nopriv_write_us', 'write_us');
function appointment()
{
    global $base;
    $data = $_POST['user_data'];
    $data['name'] = sanitize_text_field($data['name']);
    $data['phone'] = preg_replace("/\D/", "", $data['phone']);
    $data['doc'] = sanitize_text_field($data['doc']);
    $data['mess'] = sanitize_textarea_field($data['mess']);
    $nameOk = (mb_strlen($data['name']) > 1) ? true : false;
    $emailOk = (is_email($data['email'])) ? true : false;
    $phoneOk = (mb_strlen($data['phone']) > 6) ? true : false;
    $docOk = (mb_strlen($data['doc']) > 10) ? true : false;
    if ($phoneOk && $nameOk && $emailOk && $docOk) {
        $headers = 'From: Регенерація <admin@regeneration.wordpress>' . "\r\n";
        $message = 'Имя: ' . $data['name'] . PHP_EOL .
            'Email: ' . $data['email'] . PHP_EOL .
            'Телефон: ' . $data['phone'] . PHP_EOL .
            'Доктор: ' . $data['doc'] . PHP_EOL .
            'Сообщение: ' . $data['mess'] . PHP_EOL;
        $sendOk = wp_mail($base['main_email'], 'Запись на приём ' . $_SERVER['HTTP_ORIGIN'], $message, $headers);
        if ($sendOk) {
            die(json_encode(array('email_sent' => 'ok')));
        } else {
            die(json_encode(array('email_sent' => 'fail')));
        }
    } else {
        die(json_encode(array('phone' => $phoneOk, 'name' => $nameOk, 'email' => $emailOk, 'doc' => $docOk)));
    }
}

function consultation()
{
    global $base;
    $data = $_POST['user_data'];
    $data['name'] = sanitize_text_field($data['name']);
    $data['phone'] = preg_replace("/\D/", "", $data['phone']);
    $data['mess'] = sanitize_textarea_field($data['mess']);
    $nameOk = (mb_strlen($data['name']) > 1) ? true : false;
    $emailOk = (is_email($data['email'])) ? true : false;
    $phoneOk = (mb_strlen($data['phone']) > 6) ? true : false;
    if ($phoneOk && $nameOk && $emailOk) {
        $headers = 'From: Регенерація <admin@regeneration.wordpress>' . "\r\n";
        $message = 'Имя: ' . $data['name'] . PHP_EOL .
            'Email: ' . $data['email'] . PHP_EOL .
            'Телефон: ' . $data['phone'] . PHP_EOL .
            'Сообщение: ' . $data['mess'] . PHP_EOL;
        $sendOk = wp_mail($base['main_email'], 'Заказ онлайн-консультации ' . $_SERVER['HTTP_ORIGIN'], $message, $headers);
        if ($sendOk) {
            die(json_encode(array('email_sent' => 'ok')));
        } else {
            die(json_encode(array('email_sent' => 'fail')));
        }
    } else {
        die(json_encode(array('phone' => $phoneOk, 'name' => $nameOk, 'email' => $emailOk)));
    }
}

function write_us()
{
    global $base;
    $data = $_POST['user_data'];
    $data['name'] = sanitize_text_field($data['name']);
    $data['phone'] = preg_replace("/\D/", "", $data['phone']);
    $data['mess'] = sanitize_textarea_field($data['mess']);
    $nameOk = (mb_strlen($data['name']) > 1) ? true : false;
    $emailOk = (is_email($data['email'])) ? true : false;
    $phoneOk = (mb_strlen($data['phone']) > 6) ? true : false;
    $messOk = (mb_strlen($data['mess']) > 10) ? true : false;
    if ($phoneOk && $nameOk && $emailOk && $messOk) {
        $headers = 'From: Регенерація <admin@regeneration.wordpress>' . "\r\n";
        $message = 'Имя: ' . $data['name'] . PHP_EOL .
            'Email: ' . $data['email'] . PHP_EOL .
            'Телефон: ' . $data['phone'] . PHP_EOL .
            'Сообщение: ' . $data['mess'] . PHP_EOL;
        $sendOk = wp_mail($base['main_email'], 'Напишите нам ' . $_SERVER['HTTP_ORIGIN'], $message, $headers);
        if ($sendOk) {
            die(json_encode(array('email_sent' => 'ok')));
        } else {
            die(json_encode(array('email_sent' => 'fail')));
        }
    } else {
        die(json_encode(array('phone' => $phoneOk, 'name' => $nameOk, 'email' => $emailOk, 'mess' => $messOk)));
    }
}

function lang_link($lang)
{
    $current_url = explode('?',$_SERVER['REQUEST_URI'])[0];
    if (strpos($current_url, '/en/') !== false) {
        if ($lang == 'ru') {
            $new_url = str_ireplace('/en/', "/", $current_url);
        } else {
            $new_url = str_ireplace('/en/', "/$lang/", $current_url);
        }
    } elseif (strpos($current_url, '/uk/') !== false) {
        if ($lang == 'ru') {
            $new_url = str_ireplace('/uk/', "/", $current_url);
        } else {
            $new_url = str_ireplace('/uk/', "/$lang/", $current_url);
        }
    } else {
        if ($current_url != '/') {
            if ($lang == 'ru') {
                $url_array = explode('/', $current_url);
                $new_url = implode('/', $url_array);
            } else {
                $url_array = explode('/', $current_url);
                $url_array[0] = "/$lang";
                $new_url = implode('/', $url_array);
            }
        } else {
            if ($lang == 'ru') {
                $new_url = "/";
            } else {
                $new_url = "/$lang/";
            }
        }
    }
    return $new_url;
}


add_action('admin_menu', 'add_settings_page');
function add_settings_page() {
    $id = 1072;
    if ($_GET['lang'] == 'uk') $id = 2012;
    if ($_GET['lang'] == 'en') $id = 2011;
    if ($id == 1072) $_GET['lang'] = 'ru';
    add_menu_page('Опции', 'Общее', 'manage_options', 'post.php?post='.$id.'&action=edit&lang='.$_GET['lang'].'&admin_bar=1', '', '', 24);
}

/*
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
    remove_menu_page( 'cptui_main_menu' );
    remove_menu_page( 'themes.php' );
    remove_menu_page( 'edit.php?post_type=acf-field-group' );
    global $menu;
    $restricted = array(
        __('Dashboard'),
        __('Posts'),
        __('Media'),
        __('Links'),
        //__('Pages'),
        __('Appearance'),
        __('Tools'),
        __('Users'),
        __('Settings'),
        __('Comments'),
        __('Plugins')
    );
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (in_array(($value[0] != NULL ? $value[0] : ""), $restricted)) {
            unset($menu[key($menu)]);
        }
    }
}

function wph_new_toolbar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');    //меню "комментарии"
    $wp_admin_bar->remove_menu('edit');        //меню "редактировать запись"
    $wp_admin_bar->remove_menu('new-content'); //меню "добавить"
    $wp_admin_bar->remove_menu('updates');     //меню "обновления"
    $wp_admin_bar->remove_menu('wp-logo');     //меню "о wordpress"
    $wp_admin_bar->remove_menu('my-sites');    //меню "мои сайты"
}
add_action('wp_before_admin_bar_render', 'wph_new_toolbar');

add_action( 'current_screen', 'dashboard_redirect' );
function dashboard_redirect() {
    global $current_screen;
    if ( $current_screen->base == 'dashboard' ) {
        $id = 1072;
        if ($_GET['lang'] == 'uk') $id = 2012;
        if ($_GET['lang'] == 'en') $id = 2011;
        if ($id == 1072) $_GET['lang'] = 'ru';
        wp_redirect( admin_url( 'post.php?post='.$id.'&action=edit&lang='.$_GET['lang'].'&admin_bar=1' ) );
    }
}

function admin_styles(){
    wp_enqueue_style("admin_styles",get_template_directory_uri()."/css/admin_styles.css");
}
add_action('admin_enqueue_scripts', 'admin_styles');

if ($_GET['post_type'] == 'page') :?>
    <style>
        .trash, .clone, .edit_as_new_draft { display: none !important; }
    </style>
<?php endif;

function dumperGet(&$obj, $leftSp = "")
{
    if (is_array($obj)) {
        $type = "Array[" . count($obj) . "]";
    } elseif (is_object($obj)) {
        $type = "Object";
    } elseif (gettype($obj) == "boolean") {
        return $obj ? "true" : "false";
    } else {
        return "\"$obj\"";
    }
    $buf = $type;
    $leftSp .= "    ";
    for (Reset($obj); list($k, $v) = each($obj);) {
        if ($k === "GLOBALS") continue;
        $buf .= "\n$leftSp$k => " . dumperGet($v, $leftSp);
    }
    return $buf;
}*/