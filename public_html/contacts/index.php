<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/contacts.css");
$APPLICATION->AddHeadScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=8ff686a7-c893-462e-9d60-01bd90ade3ee");
?>
<main class="main whiteBg_js">
    <section class="comeBack">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","come_back",Array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "s1",
            )
        );?>
    </section>
	<section class="page page_contacts" data-midnight="gray">
        <section class="contacts">
            <div class="container">
                <div class="contacts__container">
                    <div class="contacts__content">
                        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","gray",Array(
                                "START_FROM" => "0",
                                "PATH" => "",
                                "SITE_ID" => "s1",
                            )
                        );?>
                        <div class="contacts__box">
                            <div class="contacts__title">Наши контакты</div>
                            <div class="contacts__list">
                                <div class="contacts__item">
                                    <div class="contacts__name">Aдрес</div>
                                    <div class="contacts__text"><?= Options::get('ADDRESS')?></div>
                                </div>
                                <div class="contacts__item">
                                    <div class="contacts__name">E-mail</div>
                                    <div class="contacts__text"><?= Options::get('EMAIL')?></div>
                                </div>
                                <div class="contacts__item">
                                    <div class="contacts__name">Телефон</div>
                                    <div class="contacts__text"><?= Options::get('PHONE')?></div>
                                </div>
                                <div class="contacts__work">
                                    <div class="contacts__name">Режим работы</div>
                                    <div class="contacts__mode">
                                        <div class="contacts__working">
                                            <div class="contacts__day">Пн &ndash; сб</div>
                                            <div class="contacts__time"><?= Options::get('TIME_MONDAY')?></div>
                                        </div>
                                        <div class="contacts__working">
                                            <div class="contacts__day">Вс</div>
                                            <div class="contacts__time"><?= Options::get('TIME_SATURNDAY')?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contacts__social">
                                    <div class="contacts__name">Социальные <br>сети</div>
                                    <div class="contacts__ul">
                                         <? if (Options::get('SOCIAL_INST') != '') { ?>
                                            <a href="<?= Options::get('SOCIAL_INST')?>" class="contacts__link" target="_blank">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/inst.svg';?>
                                            </a>
                                        <? } ?>
                                        <? if (Options::get('SOCIAL_FACEBOOK') != '') { ?>
                                            <a href="<?= Options::get('SOCIAL_FACEBOOK')?>" class="contacts__link" target="_blank">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/fb.svg';?>
                                            </a>
                                        <? } ?>
                                        <? if (Options::get('SOCIAL_VK') != '') { ?>
                                            <a href="<?= Options::get('SOCIAL_VK')?>" class="contacts__link" target="_blank">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vk.svg';?>
                                            </a>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__map" id="map"></div>
                    <style>
                        .ymaps-2-1-79-map-copyrights-promo, .ymaps-2-1-79-copyright__wrap {
                            display:none;
                        }
                    </style>
                </div>
            </div>
        </section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>