<div id="popupMoreStage" class="mfp-hide popupBlock serviceMore">
    <div class="mfp-close popupBlock__close popupClose_js">
        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/popupsClose.svg';?>
    </div>
    <div class="serviceMore__content">
        <div class="serviceMore__left">
            <div class="serviceMore__img" style="background-image:url()">
            </div>
            <a class="btnBlueBorder serviceMore__btn" href="">Подробнее о&nbsp;программе</a>
        </div>
        <div class="serviceMore__right">
            <div class="serviceMore__header">
                <div class="serviceMore__title"></div>
                <div class="serviceMore__programm">программа</div>
            </div>
            <div class="serviceMore__wrapper">
                <div class="serviceMore__list scrollbarCustomGray"></div>
            </div>
        </div>
    </div>
</div>
<div id="popupFormRecording" class="mfp-hide popupForm popupForm_consultation">
    <div class="mfp-close popupForm__close popupClose_js">
        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/popupsClose.svg';?>
    </div>
    <div class="popupForm__content">
        <div class="popupForm__title">Записаться на&nbsp;консультацию</div>
        <div class="popupForm__description">Оставьте заявку, мы&nbsp;свяжемся с&nbsp;вами для уточнения даты и&nbsp;времени приема</div>
        <form class="popupForm__form popupFormRecording_js">
            <div class="popupForm__filed">
                <div class="envelopeInput">
                    <input type="text" class="envelopeInput__field requiredField_js" placeholder="Представьтесь">
                </div>
                <div class="envelopeInput">
                    <input type="text" class="envelopeInput__field maskPhone requiredField_js" placeholder="Телефон">
                </div>
            </div>
            <div class="popupForm__actions">
                <button class="btnPurple popupForm__btn">Записаться</button>
                <div class="popupForm__policy">
                    <span>
                        Нажимая кнопку &laquo;Записаться&raquo;, вы&nbsp;соглашаетесь с&nbsp;<a href="#">политикой конфиденциальности</a>
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>
        <footer class="footer">
            <div class="footer__content containerMin">
                <div class="footer__top">
                    <div class="footer__left">
                        <div class="footer__address"><?= Options::get('ADDRESS')?></div>
                        <a class="footer__yandex" href="https://yandex.ru/maps/66/omsk/house/volochayevskaya_ulitsa_15k1/Y0oYdQJjQEIDQFtufXV4dHtiYQ==/?ll=73.353973%2C54.995715&z=17" target="_blank">Смотреть в Яндекс.Картах</a>
                        <div class="footer__mode footerMode">
                            <div class="footerMode__item">
                                <span class="footerMode__day">Пн — сб</span>
                                <span class="footerMode__time"><?= Options::get('TIME_MONDAY')?></span>
                            </div>
                            <div class="footerMode__item">
                                <span class="footerMode__day">Вс</span>
                                <span class="footerMode__time"><?= Options::get('TIME_SATURNDAY')?></span>
                            </div>
                        </div>
                    </div>
                    <div class="footerTravel">
                        <a href="#" class="footerTravel__video" style="background-image:url(/dist/img/footerTravelVideo.png)">
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/footerTravelVideo-i.svg';?>
                        </a>
                        <div class="footerTravel__how">
                            <div class="footerTravel__question">
                                Как к&nbsp;нам проехать?
                            </div>
                            <div class="footerTravel__description">
                                Посмотрите подробное видео, как легко нас найти
                            </div>
                        </div>
                    </div>
                    <div class="footer__right">
                        <?$APPLICATION->IncludeComponent(
                        	"bitrix:menu", 
                        	"bottom", 
                        	array(
                        		"ROOT_MENU_TYPE" => "bottom",
                        		"MAX_LEVEL" => "1",
                        		"CHILD_MENU_TYPE" => "left",
                        		"USE_EXT" => "N",
                        		"DELAY" => "N",
                        		"ALLOW_MULTI_SELECT" => "N",
                        		"MENU_CACHE_TYPE" => "N",
                        		"MENU_CACHE_TIME" => "3600",
                        		"MENU_CACHE_USE_GROUPS" => "Y",
                        		"MENU_CACHE_GET_VARS" => array(
                        		),
                        		"COMPONENT_TEMPLATE" => "bottom"
                        	),
                        	false
                        );?>
                        <div class="footer__social footerSocial">
                            <ul class="footerSocial__list">
                                <? if (Options::get('SOCIAL_INST') != '') { ?>
                                    <li class="footerSocial__item">
                                        <a href="<?= Options::get('SOCIAL_INST')?>" class="footerSocial__link" target="_blank">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/footerSocial-inst.svg';?>
                                        </a>
                                    </li>
                                <? } ?>
                                <? if (Options::get('SOCIAL_FACEBOOK') != '') { ?>
                                    <li class="footerSocial__item">
                                        <a href="<?= Options::get('SOCIAL_FACEBOOK')?>" class="footerSocial__link" target="_blank">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/footerSocial-fb.svg';?>
                                        </a>
                                    </li>
                                <? } ?>
                                <? if (Options::get('SOCIAL_VK') != '') { ?>
                                    <li class="footerSocial__item">
                                        <a href="<?= Options::get('SOCIAL_VK')?>" class="footerSocial__link" target="_blank">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/footerSocial-vk.svg';?>
                                        </a>
                                    </li>
                                <? } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="footer__left">
                        <div class="footer__dolce">© 2021, Dolce Vita</div>
                    </div>
                    <div class="footer__right">
                        <div class="footerNav">
                            <a class="footer__policy" href="">Политика конфиденциальности</a>
                        </div>
                        <div class="footer__development">
                            <a class="footer__ferma" href="https://fermastudio.com/" target="_blank">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/fermaLogo.svg';?>
                                <span>создание сайта</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="scrollUp scrollUp_js">
                    <div class="scrollUp__content">
                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>