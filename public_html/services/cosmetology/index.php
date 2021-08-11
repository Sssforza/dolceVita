<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/services.css", true);
?>
<pre>
<? print_r($arResult)?>
</pre>
<main class="main">
    <section class="page page_services">
        <section class="banerSection banerServices">
            <div class="breadCrumbs">
                <ul class="breadCrumbs__list">
                    <li class="breadCrumbs__item">
                        <a href="" class="breadCrumbs__chit">На главную</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <a href="" class="breadCrumbs__chit">Услуги</a>
                    </li>
                    <li class="breadCrumbs__item">
                        <span class="breadCrumbs__chit">Косметология</span>
                    </li>
                </ul>
            </div>
            <div class="banerServices__content">
                <div class="banerServices__header">
                    <div class="banerServices__title">Косметология</div>
                    <div class="banerServices__tabs servicesTabs">
                        <div class="servicesTabs__list">
                            <div class="servicesTabs__item active">
                                <span>Лица</span>
                            </div>
                            <div class="servicesTabs__item">
                                <span>Тела</span>
                            </div>
                            <div class="servicesTabs__item">
                                <span>Рук</span></div>
                            <div class="servicesTabs__item">
                                <span>Ног</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banerServices__question">Какой результат я хочу получить от приема</div>
                <div class="banerServices__selected">
                    <div class="servicesSelected">
                        <div class="servicesSelected__input">
                            <input type="text" placeholder="Выберите желаемый результат">
                        </div>
                        <div class="servicesSelected__list">
                            <div class="servicesSelected__item"></div>
                        </div>
                    </div>
                    <div class="btnBlue banerServices__btn">Посмотреть услуги</div>
                </div>
            </div>
        </section>
        <section class="services services_attendance">
            <div class="services__content container">
                <div class="services__item servicesCard">
                    <div class="servicesCard__header">
                        <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                        <div class="servicesCard__wrapper">
                            <div class="servicesCard__title">Криолиполиз</div>
                            <div class="servicesCard__description">
                                Выборочное воздействие позволяет избавиться от&nbsp;жира в&nbsp;конкретных местах
                            </div>
                        </div>
                    </div>
                    <div class="servicesCard__bottom">
                        <div class="servicesCard__list">
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Длительность</div>
                                <div class="servicesCard__how">90 мин</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Процедуры</div>
                                <div class="servicesCard__how">4 сеанса</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Стоимость</div>
                                <div class="servicesCard__how">от 40 000 ₽</div>
                            </div>
                        </div>
                        <div class="servicesCard__equipment">
                            <div class="servicesCard__facilities">Оборудование</div>
                            <div class="servicesCard__name">Лазерный аппарат fotona 4d</div>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesCard servicesCard_programm">
                    <div class="servicesCard__header">
                        <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                        <div class="servicesCard__wrapper">
                            <div class="servicesCard__title">Комплексный подход коррекции фигуры</div>
                            <div class="servicesCard__description">
                                4-этапная программа восстановления упругости кожи и коррекции фигуры 
                            </div>
                        </div>
                        <div class="servicesCard__programm">программа</div>
                    </div>
                    <div class="servicesCard__bottom">
                        <div class="servicesCard__list">
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">1 этап</div>
                                <div class="servicesCard__how">Криолиполиз</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">2 этап</div>
                                <div class="servicesCard__how">LPG-массаж</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">3 этап</div>
                                <div class="servicesCard__how">Лазерный аппарат fotona 4d</div>
                            </div>
                        </div>
                        <div class="servicesCard__more">
                            <a class="servicesCard__details popupMoreStage_js" href="#popupMoreStage">Подробнее об этапах</a>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesCard">
                    <div class="servicesCard__header">
                        <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                        <div class="servicesCard__wrapper">
                            <div class="servicesCard__title">Морское утончение</div>
                            <div class="servicesCard__description">
                                Процедура обеспечивает двойной эффект утончения: препятствует образованию новых лишних 
                                объемов и&nbsp;устраняет уже существующие. Массаж-уход.
                            </div>
                        </div>
                    </div>
                    <div class="servicesCard__bottom">
                        <div class="servicesCard__list">
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Длительность</div>
                                <div class="servicesCard__how">60 мин</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Процедуры</div>
                                <div class="servicesCard__how">3 сеанса</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Стоимость</div>
                                <div class="servicesCard__how">от 15 000 ₽</div>
                            </div>
                        </div>
                        <div class="servicesCard__equipment">
                            <div class="servicesCard__facilities">Оборудование</div>
                            <div class="servicesCard__name">Лазерный аппарат fotona 4d</div>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesCard">
                    <div class="servicesCard__header">
                        <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                        <div class="servicesCard__wrapper">
                            <div class="servicesCard__title">Морское утончение</div>
                            <div class="servicesCard__description">
                                Процедура обеспечивает двойной эффект утончения: препятствует образованию новых лишних 
                                объемов и&nbsp;устраняет уже существующие. Массаж-уход.
                            </div>
                        </div>
                    </div>
                    <div class="servicesCard__bottom">
                        <div class="servicesCard__list">
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Длительность</div>
                                <div class="servicesCard__how">60 мин</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Процедуры</div>
                                <div class="servicesCard__how">3 сеанса</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Стоимость</div>
                                <div class="servicesCard__how">от 15 000 ₽</div>
                            </div>
                        </div>
                        <div class="servicesCard__equipment">
                            <div class="servicesCard__facilities">Оборудование</div>
                            <div class="servicesCard__name">Лазерный аппарат fotona 4d</div>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesCard">
                    <div class="servicesCard__header">
                        <div class="servicesCard__img" style="background-image:url(/dist/img/servicesCardImg-1.png)"></div>
                        <div class="servicesCard__wrapper">
                            <div class="servicesCard__title">Криолиполиз</div>
                            <div class="servicesCard__description">
                                Выборочное воздействие позволяет избавиться от&nbsp;жира в&nbsp;конкретных местах
                            </div>
                        </div>
                    </div>
                    <div class="servicesCard__bottom">
                        <div class="servicesCard__list">
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Длительность</div>
                                <div class="servicesCard__how">90 мин</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Процедуры</div>
                                <div class="servicesCard__how">4 сеанса</div>
                            </div>
                            <div class="servicesCard__box">
                                <div class="servicesCard__what">Стоимость</div>
                                <div class="servicesCard__how">от 40 000 ₽</div>
                            </div>
                        </div>
                        <div class="servicesCard__equipment">
                            <div class="servicesCard__facilities">Оборудование</div>
                            <div class="servicesCard__name">Лазерный аппарат fotona 4d</div>
                        </div>
                    </div>
                </div>
                <div class="services__item servicesCard servicesCardBig">
                    <div class="servicesCardBig__content">
                        <div class="servicesCardBig__title">больше услуг</div>
                        <div class="servicesCardBig__more">
                            <div class="servicesCardBig__link">посмотреть</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services services_cosmetic">
            <div class="container">
                <div class="services__title">Для лучшего результата после процедуры <br>рекомендуем косметику</div>
                <div class="services__container">
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cosmeticCard">
                        <div class="cosmeticCard__top">
                            <div class="cosmeticCard__img" style="background-image:url(/dist/img/cosmeticCardImg-1.png)"></div>
                            <div class="cosmeticCard__title">
                                <a class="cosmeticCard__name" href="">Babor Spa</a>
                            </div>
                        </div>
                        <div class="cosmeticCard__bottom">
                            <ul class="cosmeticCard__result">
                                <li class="cosmeticCard__effect">Лифтинг</li>
                                <li class="cosmeticCard__effect">Гладкая кожа</li>
                                <li class="cosmeticCard__effect">Совершенный силуэт</li>
                            </ul>
                            <div class="cosmeticCard__wrapper">
                                <div class="cosmeticCard__price">11 500 ₽</div>
                                <div class="cosmeticCard__basket">
                                    <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/cosmeticCardBasket-i.svg';?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services servicesAction">
            <div class="container">
                <div class="services__title">Акция</div>
                <div class="services__container">
                    <div class="servicesAction__bg" style="background-image:url(/dist/img/servicesActionBg.png)">
                        <div class="servicesAction__box">
                            <div class="servicesAction__title">Скидки до 50% <br>в январе!</div>
                            <div class="servicesAction__description">
                                У&nbsp;Вас есть отличный повод записаться <br>на&nbsp;процедуру LPG‐массажа, 
                                которую вы&nbsp;уже давно <br>откладывали!
                            </div>
                            <a class="servicesAction__btn btrWhiteBorder" href="#">ЗАПИСАТЬСЯ НА ПРИЁМ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
<div id="popupMoreStage" class="mfp-hide popupBlock serviceMore">
    <div class="mfp-close popupBlock__close">
        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/popupsClose.svg';?>
    </div>
    <div class="serviceMore__content">
        <div class="serviceMore__left">
            <div class="serviceMore__img">
                <img src="/dist/img/serviceMoreImg.png">
            </div>
            <a class="btrBlueBorder serviceMore__btn" href="#">ПОдробнее о программе</a>
        </div>
        <div class="serviceMore__right">
            <div class="serviceMore__header">
                <div class="serviceMore__title">Комплексный подход моделирования фигуры</div>
                <div class="serviceMore__programm">программа</div>
            </div>
            <div class="serviceMore__list scrollbar-inner">
                <div class="serviceMore__item">
                    <div class="serviceMore__stage">1 ЭТАП</div>
                    <div class="serviceMore__description">
                        <div class="serviceMore__name">Криолиполиз</div>
                        <div class="serviceMore__text">
                            Эффективно моделируем фигуру. Выборочное воздействие позволяет избавиться от жира в конкретных местах
                        </div>
                    </div>
                </div>
                <div class="serviceMore__item">
                    <div class="serviceMore__stage">2 ЭТАП</div>
                    <div class="serviceMore__description">
                        <div class="serviceMore__name">LPG-массаж</div>
                        <div class="serviceMore__text">
                            Возвращаем коже упругость. Лифтинг и укрепление кожи, устранение
                        </div>
                    </div>
                </div>
                <div class="serviceMore__item">
                    <div class="serviceMore__stage">3 ЭТАП</div>
                    <div class="serviceMore__description">
                        <div class="serviceMore__name">Морское утончение</div>
                        <div class="serviceMore__text">
                            Уход эффективно воздействует на лишние объемы, активизируют процессы липолиза и выведения воды.
                        </div>
                    </div>
                </div>
                <div class="serviceMore__item">
                    <div class="serviceMore__stage">4 ЭТАП</div>
                    <div class="serviceMore__description">
                        <div class="serviceMore__name">Vela Shape II</div>
                        <div class="serviceMore__text">
                            Позволяет уменьшить растяжки, подтянуть и разгладить кожу
                        </div>
                    </div>
                </div>
                <div class="serviceMore__item">
                    <div class="serviceMore__stage">5 ЭТАП</div>
                    <div class="serviceMore__description">
                        <div class="serviceMore__name">Лифтинг</div>
                        <div class="serviceMore__text">
                            Лифтинг
                        </div>
                    </div>
                </div>
                <div class="serviceMore__item">
                    <div class="serviceMore__stage">6 ЭТАП</div>
                    <div class="serviceMore__description">
                        <div class="serviceMore__name">Моделирование фигуры</div>
                        <div class="serviceMore__text">
                            Моделирование
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?$APPLICATION->IncludeComponent(
	"ferma:news", 
	".default", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CATEGORY_CODE" => "CATEGORY",
		"CATEGORY_IBLOCK" => array(
			0 => "12",
			1 => "13",
			2 => "14",
			3 => "15",
		),
		"CATEGORY_ITEMS_COUNT" => "5",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"FORUM_ID" => "1",
		"GROUP_PERMISSIONS" => array(
			0 => "1",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MAX_VOTE" => "5",
		"MESSAGES_PER_PAGE" => "10",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"POST_FIRST_MESSAGE" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"REVIEW_AJAX_POST" => "Y",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHARE_HANDLERS" => array(
			0 => "delicious",
			1 => "facebook",
			2 => "lj",
			3 => "twitter",
		),
		"SHARE_HIDE" => "Y",
		"SHARE_SHORTEN_URL_KEY" => "",
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_TEMPLATE" => "",
		"SHOW_404" => "Y",
		"SHOW_LINK_TO_FORUM" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "Y",
		"URL_TEMPLATES_READ" => "",
		"USE_CAPTCHA" => "Y",
		"USE_CATEGORIES" => "Y",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "Y",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"VOTE_NAMES" => array(
			0 => "0",
			1 => "1",
			2 => "2",
			3 => "3",
			4 => "4",
			5 => "",
		),
		"YANDEX" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"CATEGORY_THEME_12" => "list",
		"CATEGORY_THEME_13" => "list",
		"CATEGORY_THEME_14" => "list",
		"CATEGORY_THEME_15" => "list",
		"SEF_FOLDER" => "/services/cosmetology/",
		"SEF_URL_TEMPLATES" => array(
			"news" => "/services/cosmetology/",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?><?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>