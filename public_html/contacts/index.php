<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/contacts.css");
?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=8ff686a7-c893-462e-9d60-01bd90ade3ee" type="text/javascript"></script>
<main class="main whiteBg_js">
    <section class="comeBack">
        <div class="comeBack__content container">
            <a href="/team/" class="comeBack__link">
                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/comeBackArrow.svg';?>
                <div class="comeBack__page">Специалисты</div>
            </a>
        </div>
    </section>
	<section class="page page_contacts" data-midnight="gray">
        <section class="contacts">
            <div class="container">
                <div class="contacts__container">
                    <div class="contacts__content">
                        <div class="breadCrumbs gray">
                            <ul class="breadCrumbs__list">
                                <li class="breadCrumbs__item">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/breadCrumbsChit-first.svg';?>
                                    <a href="/" class="breadCrumbs__chit">На главную</a>
                                </li>
                                <li class="breadCrumbs__item">
                                    <a href="#" class="breadCrumbs__chit">О нас</a>
                                </li>
                                <li class="breadCrumbs__item">
                                    <span class="breadCrumbs__chit">Контакты</span>
                                </li>
                            </ul>
                        </div>
                        <div class="contacts__box">
                            <div class="contacts__title">Наши контакты</div>
                            <div class="contacts__list">
                                <div class="contacts__item">
                                    <div class="contacts__name">Aдрес</div>
                                    <div class="contacts__text">Омск, ул. Волочаевская, 15/1</div>
                                </div>
                                <div class="contacts__item">
                                    <div class="contacts__name">E-mail</div>
                                    <div class="contacts__text">info@dolcevita55.ru</div>
                                </div>
                                <div class="contacts__item">
                                    <div class="contacts__name">Телефон</div>
                                    <div class="contacts__text">+7 3812 79-00-58</div>
                                </div>
                                <div class="contacts__work">
                                    <div class="contacts__name">Режим работы</div>
                                    <div class="contacts__mode">
                                        <div class="contacts__working">
                                            <div class="contacts__day">Пн — сб</div>
                                            <div class="contacts__time">09:00—21:00</div>
                                        </div>
                                        <div class="contacts__working">
                                            <div class="contacts__day">Вс</div>
                                            <div class="contacts__time">10:00—20:00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contacts__social">
                                    <div class="contacts__name">Социальные <br>сети</div>
                                    <div class="contacts__ul">
                                        <a href="https://www.instagram.com/dolcevita_omsk/" class="contacts__link" target="_blank">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/inst.svg';?>
                                        </a>
                                        <a href="https://www.facebook.com/dolcevita.omsk/" class="contacts__link" target="_blank">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/fb.svg';?>
                                        </a>
                                        <a href="https://vk.com/dolcevita55" class="contacts__link" target="_blank">
                                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vk.svg';?>
                                        </a>
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