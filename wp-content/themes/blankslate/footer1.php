<?php global $base;?>
<?php
$args_doctors = [
    'post_type' => 'doctors',
    'numberposts' => 0,
    'suppress_filters' => false
];
$doctors_objects = get_posts($args_doctors);
$doctors = array();
foreach ($doctors_objects as $doctor_object) {
    $doctors[$doctor_object->ID] = get_field('doctor_name',$doctor_object->ID);
}
?>
<section class="section section_fluid section_consultation p-vertical-90"
         style="background: url('<?php echo $base['block_before_footer']['background']['url'];?>') no-repeat; background-position: left bottom; background-color: #FAFAFA; background-size: contain;">
    <div class="container">
        <div class="consultation p-horizontal-80">
            <div class="consultation__item">
                <h2 class="consultation__title"><?php echo $base['block_before_footer']['title'];?></h2>
                <h4 class="consultation__text"><?php echo $base['block_before_footer']['text'];?></h4>
                <button id="openModal" class="btn btn_personal-consultation"><?php echo $base['form_button_text_3'];?></button>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer__elem">
        <div class="navigation">
            <nav class="navigation__item">
                <?php $services_menu = array();?>
                <?php foreach ($base['menu'] as $menu_item) :?>
                    <?php if (stripos($menu_item['link'], 'services')) $services_menu = $menu_item['items'];?>
                    <?php if (!empty($menu_item['link'])) :?>
                        <a href="<?php echo $menu_item['link'];?>"
                           class="navigation__link"><?php echo $menu_item['text'];?></a>
                    <?php endif;?>
                <?php endforeach;?>
            </nav>
            <nav class="navigation__item">
                <?php foreach ($services_menu as $menu_item) :?>
                    <a href="<?php echo $menu_item['link'];?>"
                       class="navigation__link"><?php echo $menu_item['text'];?></a>
                <?php endforeach;?>
            </nav>
        </div>
        <div class="contact">
            <h4 class="contact__address"><?php echo $base['address'];?></h4>
            <p class="schedule__text schedule__text_indent"><?php echo $base['schedule'];?></p>
            <a href="tel:+<?php echo preg_replace("/\D/", "", $base['phone']);?>"
               class="contact__number"><?php echo $base['phone'];?></a>
            <a href="mailto:info@regeneration.com.ua" class="contact__mail"><?php echo $base['email'];?></a>
            <div class="social social_footer ">
                <a href="<?php echo $base['facebook'];?>" class="social__link social__link_fb" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 21 21" style="enable-background:new 0 0 21 21;" xml:space="preserve">
                            <path d="M19.8,0H1.2C0.5,0,0,0.5,0,1.2v18.7C0,20.5,0.5,21,1.2,21l9.8,0v-8H8v-3h3V7c0-2.7,1.6-4,4-4c1.2,0,2.7,0.1,3,0.2V6h-2
                             c-1.3,0-2,1.1-2,2v2h4l-0.6,3H14v8l5.8,0c0.6,0,1.2-0.5,1.2-1.2V1.2C21,0.5,20.5,0,19.8,0z"/>
                        </svg>
                </a>
                <a href="<?php echo $base['youtube'];?>" class="social__link social__link_youtube" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
            <button class="btnConsultation btn btn_footer"><?php echo $base['form_button_text_1'];?></button>
        </div>
    </div>
    <div class="copywriting"><?php echo $base['copyright'];?></div>
</footer>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
        </div>
        <div class="contact__element contact__element_modal">
            <div class="form__container">
                <h2 class="contact__heading"><?php echo $base['form_title_3'];?></h2>
                <form class="form" id="consultation_form">
                    <div class="form__item form__item_modal">
                        <input type="text" id="consultation-name" class="form__input input input_modal" placeholder="<?php echo $base['sign_for_appointment']['name'];?>">
                    </div>
                    <div class="form__item form__item_modal">
                        <input type="email" id="consultation-email" class="form__input input input_modal" placeholder="<?php echo $base['sign_for_appointment']['email'];?>">
                    </div>
                    <div class="form__item form__item_modal">
                        <input type="text" id="consultation-phone" class="form__input input input_modal"
                               placeholder="<?php echo $base['sign_for_appointment']['phone'];?>">
                    </div>
                    <div class="form__item form__item_modal">
						<textarea id="consultation-message" class="form__input form__input_message input input_modal"
                                  placeholder="<?php echo $base['sign_for_appointment']['comment'];?>"></textarea>
                    </div>
                    <div class="contact__btn-wrap">
                        <button type="submit" class="btn btn_modal"><?php echo $base['sign_for_appointment']['button_send'];?></button>
                    </div>
                </form>
                <div class="cons_sent col-lg-12 col-md-12 col-xl-12 form__item">
                    <p><?php echo $base['sign_for_appointment']['consultation_message_sent_ok'];?></p>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="Consultation" class="modal">
    <div class="doctor-content modal-content">
        <div class="modal-header">
            <span class="close doctor-close">&times;</span>
        </div>
        <div class="contact__element contact__element_modal">
            <div class="form__container">
                <h2 class="contact__heading"><?php echo $base['form_title_1'];?></h2>
                <form class="form" id="appointment_form">
                    <div class="form__item form__item_modal">
                        <input type="text" id="appointment-name" class="form__input input input_modal" placeholder="<?php echo $base['sign_for_appointment']['name'];?>">
                    </div>
                    <div class="form__item form__item_modal">
                        <input type="email" id="appointment-email" class="form__input input input_modal" placeholder="<?php echo $base['sign_for_appointment']['email'];?>">
                    </div>
                    <div class="form__item form__item_modal">
                        <input type="text" id="appointment-phone" class="form__input input input_modal"
                               placeholder="<?php echo $base['sign_for_appointment']['phone'];?>">
                    </div>
                    <div class="select-container">
                        <input type="hidden" id="appointment-doctor" value="">
                        <span class="placeholder"><?php echo $base['sign_for_appointment']['choose_doctor'];?></span>
                        <span class="arrow">
							<svg viewBox="0 0 44 44" xml:space="preserve">
								<polyline class="arrow-style" points="38,16 22,29 6,16 "></polyline>
							</svg>
						</span>
                        <ul class="select-list">
                            <?php foreach ($doctors as $id => $name) :?>
                                <li class="select-list__item" data-id="<?php echo $id;?>"><?php echo $name;?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="form__item form__item_modal">
						<textarea id="appointment-message" class="form__input form__input_message input input_modal"
                                  placeholder="<?php echo $base['sign_for_appointment']['comment'];?>"></textarea>
                    </div>
                    <div class="contact__btn-wrap">
                        <button type="submit" class="btn btn_modal"><?php echo $base['sign_for_appointment']['button_send'];?></button>
                    </div>
                </form>
                <div class="appo_sent col-lg-12 col-md-12 col-xl-12 form__item">
                    <p><?php echo $base['sign_for_appointment']['appointment_message_sent_ok'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php wp_footer();?>
<!--Бинотел -->
<script type="text/javascript">
    (function(d, w, s) {
        var widgetHash = '39r70hvbrs6n19e4ei42', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
        gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
    })(document, window, 'script');
</script>
<!--Бинотел -->
</body>
</html>