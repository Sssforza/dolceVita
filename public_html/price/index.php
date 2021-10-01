<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetAdditionalCSS("/dist/css/blocks/price.css");
?>
<main class="main whiteBg_js">
	<section class="page page_price" data-midnight="gray">
        <section class="whiteSection">
            <div class="container">
                <div class="whiteSection__content">
                    <div class="breadCrumbs gray">
                        <ul class="breadCrumbs__list">
                            <li class="breadCrumbs__item">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/breadCrumbsChit-first.svg';?>
                                <a href="/" class="breadCrumbs__chit">На главную</a>
                            </li>
                            <li class="breadCrumbs__item">
                                <span class="breadCrumbs__chit">Стоимость</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pagePrice">
            <div class="pagePrice__content containerMin">
                <div class="priceHeader">
                    <div class="priceHeader__title">Стоимость</div>
                    <div class="priceHeader__list">
                        <div class="priceHeader__item">
                            <a href="#" class="priceHeader__link">Система лояльности</a>
                        </div>
                        <div class="priceHeader__item">
                            <a href="#" class="priceHeader__link">Сертификаты</a>
                        </div>
                    </div>
                </div>
                <div class="pagePrice__info">
                    <div class="pagePrice__description">
                        На&nbsp;этой странице мы&nbsp;собрали цены на&nbsp;все услуги. Если вы&nbsp;что-то не&nbsp;нашли
                        или хотите уточнить стоимость услуги, смело звоните нам
                    </div>
                    <div class="priceSearch priceSearch_js">
                        <div class="priceSearch__envelope envelopeInput grayInput">
                            <input class="priceSearch__input priceSearchInput_js" placeholder="ВВЕДИТЕ НАЗВАНИЕ УСЛУГИ" type="text">
                            <button class="priceSearch__button">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceSearch-i.svg';?>
                            </button>
                            <div class="priceSearch__clear clearInput clearInput_js">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/clearInput.svg';?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagePrice__services pagePriceServices_js">
                    <div class="pagePrice__selection">
                        <span class="pagePriceSelection_js"></span>
                    </div>
                    <div class="priceNav">
                        <ul class="priceNav__ul">
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js active" data-services="laser">Лазерная терапия</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="correction">Коррекция фигуры</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="injection">Инъекционная косметология</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="hardware">Аппаратная косметология</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="programmCorrection">Программы коррекции фигуры</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="programmFace">Программы для лица</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="qualityLife">Качество жизни</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="stylist">Услуги стилиста</span>
                            </li>
                            <li class="priceNav__li">
                                <span class="priceNav__choice priceNav_js" data-services="nails">Ногтевой сервис</span>
                            </li>
                        </ul>
                    </div>
                    <div class="priceList blockPriceList_js">
                        <div class="priceList__list priceList_js" data-list="laser">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Лечение акне</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Лечение акне простое, 30 мин</div>
                                            <div class="priceList__cost">6 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Лечение акне простое, 30 мин</div>
                                            <div class="priceList__cost">6 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Лечение сосудистой патологии</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Лечение сосудистых патологий лица простое</div>
                                            <div class="priceList__cost">9 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Лечение сосудистых патологий лица сложное</div>
                                            <div class="priceList__cost">12 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Удаление сосудов на крыльях носа</div>
                                            <div class="priceList__cost">8 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Полировка</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Полировка кожи лица</div>
                                            <div class="priceList__cost">6 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="correction">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Коррекция фигуры</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Коррекция фигуры простое, 30 мин</div>
                                            <div class="priceList__cost">14 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Коррекция фигуры простое, 30 мин</div>
                                            <div class="priceList__cost">20 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="injection">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Инъекционная косметология</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Инъекционная косметология простое, 30 мин</div>
                                            <div class="priceList__cost">6 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Инъекционная косметология простое, 30 мин</div>
                                            <div class="priceList__cost">7 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="hardware">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Аппаратная косметология</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Аппаратная косметология простое, 30 мин</div>
                                            <div class="priceList__cost">4 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Аппаратная косметология простое, 30 мин</div>
                                            <div class="priceList__cost">8 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="programmCorrection">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Программы коррекции фигуры</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Программы коррекции фигуры простое, 30 мин</div>
                                            <div class="priceList__cost">14 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Программы коррекции фигуры простое, 30 мин</div>
                                            <div class="priceList__cost">18 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="programmFace">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Программы для лица</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Программы для лица простое, 30 мин</div>
                                            <div class="priceList__cost">24 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Программы для лица простое, 30 мин</div>
                                            <div class="priceList__cost">28 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="qualityLife">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Качество жизни</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Качество жизни простое, 30 мин</div>
                                            <div class="priceList__cost">54 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Качество жизни простое, 30 мин</div>
                                            <div class="priceList__cost">68 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="stylist">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Услуги стилиста</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Услуги стилиста простое, 30 мин</div>
                                            <div class="priceList__cost">4 000 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Услуги стилиста простое, 30 мин</div>
                                            <div class="priceList__cost">8 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="priceList__list priceList_js hidden" data-list="nails">
                            <div class="priceList__item">
                                <div class="priceList__header">
                                    <div class="priceList__title">Ногтевой сервис</div>
                                    <div class="priceList__svg">
                                        <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/priceItem-i.svg';?>
                                    </div>
                                </div>
                                <div class="priceList__content">
                                    <ul class="priceList__ul">
                                        <li class="priceList__li">
                                            <div class="priceList__name">Ногтевой сервис простое, 30 мин</div>
                                            <div class="priceList__cost">2 500 ₽</div>
                                        </li>
                                        <li class="priceList__li">
                                            <div class="priceList__name">Ногтевой сервис простое, 30 мин</div>
                                            <div class="priceList__cost">3 000 ₽</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</section>
</main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>