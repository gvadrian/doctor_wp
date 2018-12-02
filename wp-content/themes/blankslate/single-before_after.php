<?php

/**
 * Template Name: Before/After
 */

get_header();
global $base;
$fields = get_fields();
?>
    <section class="procedure-head">
        <!-- <div class="procedure-head__wrap"> -->
        <div class="procedure-head__width">
            <div class="procedure-head__text-wrap">
                <div class="procedure-head__title">
                    <div class="icon__back" onclick="history.back()">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="10px" height="18px" viewBox="0 0 10 18" enable-background="new 0 0 10 18"
                             xml:space="preserve">
                        <g id="Mobile" opacity="0.4">
                            <g id="Service_info_Mobile" transform="translate(-20.000000, -100.000000)">
                                <g id="Service_info" transform="translate(-389.000000, 60.000000)">
                                    <g id="h1" transform="translate(409.000000, 21.000000)">
                                        <path id="Shape" opacity="0.4" fill="#FFFFFF" d="M8.875,36.814C9.003,36.938,9.164,37,9.341,37
                                   c0.177,0,0.338-0.062,0.466-0.186c0.257-0.248,0.257-0.652,0-0.9L1.608,28l8.199-7.914c0.257-0.248,0.257-0.652,0-0.9
                                   c-0.257-0.248-0.675-0.248-0.932,0L0.193,27.55c-0.257,0.248-0.257,0.652,0,0.9L8.875,36.814z"
                                        />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    </div>
                    <div>
                        <h2 class="procedure-head__title-text"><?= $fields['title'] ?></h2>
                    </div>
                </div>
                <div class="procedure-head__list">
                    <?php $i = 0 ?>
                    <?php foreach ($fields['type'] as $item) : ?>
                        <div class="procedure-head__list-item <?= ($i == 0) ? 'active' : '' ?>">
                            <div class="pointer__wrap">
                                <div class="pointer__square-light">
                                    <?php if ($i != 0) : ?>
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="7px" height="7px" viewBox="0 0 7 7" enable-background="new 0 0 7 7"
                                             xml:space="preserve">
                                <g id="Mobile" opacity="0.4">
                                    <g id="Service_info_Mobile" transform="translate(-39.000000, -173.000000)">
                                        <g id="Service_info" transform="translate(-389.000000, 60.000000)">
                                            <g id="h2" transform="translate(0.000000, 86.000000)">
                                                <g id="Active">
                                                    <rect id="Rectangle-5" x="428" y="27" fill="#FFFFFF" width="7"
                                                          height="7"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                                    <?php endif ?>
                                </div>
                            </div>
                            <a class="procedure-head__list-item_link">
                                <?= $item['title'] ?>
                            </a>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="procedure-results__wrap-slider surgery-results__wrap-slider">
                <div id="procedureResulstSlider" class="surgery-results__slider">
                    <div class="surgery-results__slider-item">
                        <a href="<?=get_template_directory_uri()?>/images/surgery-results/img3.jpg" class="surgery-results__img"
                           style="background-image: url('<?=get_template_directory_uri()?>/images/surgery-results/img3.jpg')"></a>
                    </div>
                    <div class="surgery-results__slider-item">
                        <a href="<?=get_template_directory_uri()?>/images/surgery-results/img2.jpg" class="surgery-results__img"
                           style="background-image: url('<?=get_template_directory_uri()?>/images/surgery-results/img2.jpg')"></a>
                    </div>
                    <div class="surgery-results__slider-item">
                        <a href="<?=get_template_directory_uri()?>/images/surgery-results/img1.jpg" class="surgery-results__img"
                           style="background-image: url('<?=get_template_directory_uri()?>/images/surgery-results/img1.jpg')"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>

    <section class="procedure-info">
        <div class="procedure-info__width">
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
            <div class="procedure-info__wrap">
                <div class="procedure-info__text-blocker"></div>
                <p> Сегодня можно быстро и легко, без хирургического вмешательства, откорректировать форму носа, а также
                    избавиться
                    от незначительных изъянов.</p>
                <p> Что представляет собой Перед процедурой пациенту вводится анестезия, затем доктор приступает к
                    коррекции
                    носа. Специалист осуществляет необходимое количество инъекций в наиболее проблемные зоны, в роли
                    «наполнителя»
                    выступает гиалуроновая кислота, которая является гипоаллергенной и совершенно безопасной.m Перед
                    процедурой
                    пациенту вводится анестезия, затем доктор приступает к коррекции носа. Специалист осуществляет
                    необходимое
                    количество инъекций в наиболее проблемные зоны, в роли «наполнителя» выступает гиалуроновая кислота,
                    которая является гипоаллергенной и совершенно безопасной.m Перед процедурой пациенту вводится
                    анестезия,
                    затем доктор приступает к коррекции носа. Специалист осуществляет необходимое количество инъекций в
                    наиболее
                    проблемные зоны, в роли «наполнителя» выступает гиалуроновая кислота, которая является
                    гипоаллергенной
                    и совершенно безопасной.процедура Суть процедуры достаточно проста, для того, чтобы форма носа стала
                    более ровной, без изъянов и дефектов, необходимо заполнить ниши, создающие неровности. Для этого
                    используют
                    жировые клетки или объемное вещество (филлерам).</p>
                <p> Процедура рекомендована: • при небольших дефектах кончика носа; • при наличии впадинок; • при
                    асимметрии;
                    • при острых уголках; • при наличии горбинки на переносице.</p>
                <p> Инъекции помогут откорректировать небольшие недостатки в форме носа без какого-либо хирургического
                    вмешательства.
                    Заполняя специальным веществом ниши, создающие неровный рельеф, можно скорректировать и улучшить
                    форму
                    носа, сделать его более привлекательным.</p>
                <p> Как осуществляется процедура Все манипуляции отличаются безболезненностью и простотой. Как правило,
                    проведение
                    всей процедуры не занимает более тридцати минут.</p>

                <p> Почему стоит обратить внимание на клинику «АНА-КОСМО» Несмотря на то что, безоперационная коррекция
                    формы
                    носа является достаточно простой процедурой, обращаться за помощью необходимо исключительно к
                    опытным
                    специалистам, обладающим достаточными знаниями для осуществления подобных манипуляций.</p>
                <p> В первую очередь, необходимо обращать внимание на репутацию клиники, а также на отзывы клиентов,
                    которые
                    уже проходили подобную процедуру и остались довольны результатами. Это крайне важно, так как
                    позволит
                    избежать возможности инъекций некачественных или не сертифицированных препаратов.</p>
                <p> Важно помнить, что ваше здоровье только в ваших руках, поэтому доверять его необходимо только
                    профессионалам,
                    специалистам с богатым опытом. Наша клиника «АНА-КОСМО» имеет штат высококвалифицированных докторов,
                    обладающих множеством наград, а также положительными отзывами от благодарных клиентов. Наши
                    специалисты
                    — залог вашего спокойствия.
                </p>
            </div>
        </div>
        <div class="request-block">
            <div class="request-button__dark request-button">
                <span class="request-button__text request-button__text-dark">Записаться на прием</span>
            </div>
        </div>
    </section>
<?php get_footer() ?>