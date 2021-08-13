<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/contacts.css");
?>
<main class="main">
	<section class="page page_contacts">
        <section class="contacts">
            <div class="container">
                <div class="contacts__container">
                    <div class="contacts__content">
                        <div class="breadCrumbs">
                            <ul class="breadCrumbs__list">
                                <li class="breadCrumbs__item">
                                    <a href="" class="breadCrumbs__chit">На главную</a>
                                </li>
                                <li class="breadCrumbs__item">
                                    <a href="" class="breadCrumbs__chit">О нас</a>
                                </li>
                                <li class="breadCrumbs__item">
                                    <span class="breadCrumbs__chit">Специалисты</span>
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
                                    <ul class="contacts__ul">
                                        <li class="contacts__li">
                                            <a href="" class="contacts__link">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/inst.svg';?>
                                            </a>
                                        </li>
                                        <li class="contacts__li">
                                            <a href="" class="contacts__link">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/fb.svg';?>
                                            </a>
                                        </li>
                                        <li class="contacts__li">
                                            <a href="" class="contacts__link">
                                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/vk.svg';?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__map"></div>
                </div>
            </div>
        </section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>